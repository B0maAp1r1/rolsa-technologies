<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Orders</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: white; color: black; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 20px;">
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

    <div style="height: 125px;"></div>

    <h1>Your Orders</h1>

    <?php
    session_start();

    if (!isset($_SESSION['paid_products']) || empty($_SESSION['paid_products'])) {
        echo "<h2 style='font-family:\"Gill Sans\", \"Gill Sans MT\", Calibri, \"Trebuchet MS\", sans-serif; color: black; background-color: white; padding: 20px;'>You have no orders yet.</h2>";
    } else {
        echo "<div style='background-color: white; color: black; padding: 20px;'>";
        foreach ($_SESSION['paid_products'] as $product => $quantity) {
            echo "<div style='border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center; font-family:\"Gill Sans\", \"Gill Sans MT\", Calibri, \"Trebuchet MS\", sans-serif;'>";
            echo "<div>Product: " . htmlspecialchars($product) . "</div>";
            echo "<div>Quantity: " . intval($quantity) . "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    ?>

</body>
</html>
