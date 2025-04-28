<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div style="height: 100px;"></div>

    <div style="color: black; background: #75fb87; height: 500px; border-radius: 15px; box-shadow: rgba(100, 100, 111, 0.5) 0px 7px 29px 0px;">
        <h1>
            Are you a Technical User or Non-Technical User
        </h1>

        <div style="justify-self: center; justify-content: center;">
            <button style="width: 150px; position: relative; border-radius: 10px; top: 5%; left: 15%;">Yes</button>
            <button style="width: 150px; position: relative; border-radius: 10px; top: 5%; left: 20%;">No</button>
        </div>
    </div>
</body>
</html>