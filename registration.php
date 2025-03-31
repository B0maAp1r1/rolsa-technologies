<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body id="reglog_body">
    <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordhash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (isset($_POST["submit"]) && (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat))) {

                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid email");
            }
            if (strlen($password)<8) {
                array_push($errors, "password must be at least 8 characters long");
            }
            if ($password!==$passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sqli = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sqli);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{

                $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordhash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    header("Location: login.php");
                    die();
                }else{
                    die("Something went wrong");
                }
            }

        }
    ?>
    <div class="container">
        <form action="registration.php" method="post">
            <div style="background-color: #75fb87; justify-self: center; width: 200px; border-radius: 50px; padding: 5px; text-align: center;">
                <h1 style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Register
                </h1>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <br>
            <div class="form-btn" style="position: relative; left: 80%;">
                <input type="submit" style="background: #75fb87; text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
