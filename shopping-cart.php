<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Shopping Cart</title>
</head>
<body>
    <div style="height: 250px;">

    </div>
    <?php
    session_start();

    // Handle removal of items from cart
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_product'])) {
        $removeProduct = $_POST['remove_product'];
        if (isset($_SESSION['cart'][$removeProduct])) {
            unset($_SESSION['cart'][$removeProduct]);
        }
        // Redirect to avoid form resubmission
        header('Location: shopping-cart.php');
        exit();
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Handle quantity reduction
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reduce_product'])) {
        $reduceProduct = $_POST['reduce_product'];
        if (isset($_SESSION['cart'][$reduceProduct])) {
            $_SESSION['cart'][$reduceProduct]--;
            if ($_SESSION['cart'][$reduceProduct] <= 0) {
                unset($_SESSION['cart'][$reduceProduct]);
            }
        }
        // Redirect to avoid form resubmission
        header('Location: shopping-cart.php');
        exit();
    }

    if (empty($_SESSION['cart'])) {
        echo "<h1 style=\"font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black; background-color: white; padding: 20px;\">Your shopping cart is empty.</h1>";
    } else {
        echo "<h1 style=\"font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black; background-color: white; padding: 20px;\">Your Shopping Cart</h1>";
        echo "<div style='background-color: white; color: black; padding: 20px;'>";
        foreach ($_SESSION['cart'] as $product => $quantity) {
            echo "<div style='border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center; font-family:\"Gill Sans\", \"Gill Sans MT\", Calibri, \"Trebuchet MS\", sans-serif;'>";
            echo "<div>Product: " . htmlspecialchars($product) . "</div>";
            echo "<div>Quantity: " . intval($quantity) . "</div>";
            echo "<div style='display: flex; gap: 10px;'>";
            // Reduce quantity form
            echo "<form method='POST' action='shopping-cart.php' style='display:inline;'>";
            echo "<input type='hidden' name='reduce_product' value='" . htmlspecialchars($product) . "'>";
            echo "<button type='submit' style='color: white; background-color: #007bff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;'>-</button>";
            echo "</form>";
            // Remove product form
            echo "<form method='POST' action='shopping-cart.php' style='display:inline;'>";
            echo "<input type='hidden' name='remove_product' value='" . htmlspecialchars($product) . "'>";
            echo "<button type='submit' style='color: white; background-color: red; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;'>Remove</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
        // Checkout button
        echo "<div style='text-align: right; margin-top: 20px;'>";
        echo "<a href='checkout.php' style='background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 18px;'>Proceed to Checkout</a>";
        echo "</div>";
        echo "</div>";
    }
    ?>

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

</body>
</html>