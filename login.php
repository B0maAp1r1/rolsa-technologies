<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body id="reglog_body">
    <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST["password"];
            require_once "database.php";
$sql = "SELECT * FROM users WHERE email = ?";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
    ?>

    <div class="container">
        <form action="login.php" method="post">
            <div style="background-color: #75fb87; justify-self: center; width: 200px; border-radius: 50px; padding: 5px; text-align: center;">
                <h1 style="color: black; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Log In
                </h1>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
            <br>
            <div class="form-btn" style="position: relative; left: 80%;">
                <input type="submit" style="background: #75fb87; text-decoration: underline; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn" value="Login" name="login">
            </div>
        </form>
    </div>
</body>
</html>
