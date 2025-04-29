<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Feedback</title>
</head>
<body>
    <!-- navbar section -->
    <div id="nav-bar" style="background-color: black; height: 75px; position: absolute; display: flex; top: 25px; border-radius: 50px; left: 25%; width: 50vw;">
        <a href="./index.php" style="position: relative; border: 1px solid #75fb87; left: 300px;"><img width="100px" height="73px" src="./logos/Logo maker project.png" alt="logo"></a>
        <nav style="display: flex; position: relative; left: 27.5%; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-top: 15px; font-size: 25px;">
            <ul style="display: flex; gap: 20px;">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./products.php">Products & Services</a></li>
                <li><a href="./rolsa.php">Rolsa</a></li>
            </ul>
            <span style="display: flex; gap: 20px;">
                <a href="./account.php" style="position: relative; left: 100px;"><i class="fa-solid fa-user"></i></a>
                <a href="./shopping-cart.php" style="position: relative; left: 100px; top: 1%;"><i class="fa-solid fa-cart-shopping"></i></a>
            </span>
        </nav>
    </div>  

    <div style="height: 250px;"></div>

    <div style="color: black; justify-self: center; width: 65%; background: #75fb87; height: 500px; border-radius: 15px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px;">
        <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; Justify-self: center; position: relative; top: 75px;">
            Are you a Technical User or Non-Technical User
        </h1>

        <div style="justify-self: center; justify-content: center; font-size: 20px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; display: flex;  position: relative; gap: 30px;">
            <button style="width: 150px; background: black; color: white; height: 100px; position: relative; border-radius: 10px; top: 200px;"><a href="https://forms.office.com/e/BQDUiNLRHN">Yes</a></button>
            <br>
            <button style="width: 150px; background: black; color: white; height: 100px; position: relative; border-radius: 10px; top: 200px;"><a href="https://forms.office.com/e/puvuR3x8qB">No</a></button>
        </div>
    </div>

    <div style="height: 200px;"></div>

    <!-- footer section -->
    <footer style="display: flex;">
        <div class="footer_child1" style="position: relative; top: 10%; height: 100%; height: 300px; width: 400px;">
            <a href="./index.php"><img width="200px" height="150px" style="position: relative; left: 20%;" src="./logos/Logo.png" alt="logo"></a>
            <a href=""><li style="position: relative; font-size: 40px; left: 20%; top: 10%;">+447311883461</li></a>
            <a href=""><li style="position: relative; left: 20%; top: 10%; font-size: 35px;">sales@rolsatech.com</li></a>
        </div>
        <div class="footer_child2" style="position: relative; top: 42.5%; left: 10%; height: 175px;">
            <li style="font-size: 40px;">About Us</li>
            <a href="./rolsa.php"><li style="font-size: 35px; opacity: 75%;">Our Story</li></a>
            <a href="./contact.php"><li style="font-size: 35px; opacity: 75%;">Contact</li></a>
        </div>
        <div class="footer_child3" style="position: relative; top: 42.5%; left: 20%; height: 175px;">
            <li style="font-size: 40px;">Account</li>
            <a href="./login.php"><li style="font-size: 35px; opacity: 75%;">Log In</li></a>
            <a href="./registration.php"><li style="font-size: 35px; opacity: 75%;">Register</li></a>
            <a href="./orders.php"><li style="font-size: 35px; opacity: 75%;">Orders</li></a>
            <a href="./feedback.php"><li style="font-size: 35px; opacity: 75%;">Feedback</li></a>
        </div>
        <div class="footer_child4" style="position: relative; top: 42.5%; left: 30%; height: 350px;">    
            <li style="font-size: 40px;">Legal</li>
            <a href="./privacy-policy.php"><li style="font-size: 35px; opacity: 75%;">Privacy Policy</li></a>
            <a href="./terms-condition.php"><li style="font-size: 35px; opacity: 75%;">Terms & Conditions</li></a>
            <a href="./return-policy.php"><li style="font-size: 35px; opacity: 75%;">Return Policy</li></a>
        </div>
    </footer>    
</body>
</html>