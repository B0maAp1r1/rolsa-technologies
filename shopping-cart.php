<?php
session_start();

// Check if the cart is empty
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Display the cart items
if (empty($_SESSION['cart'])) {
    echo "<h1>Your shopping cart is empty.</h1>";
} else {
    echo "<h1>Your Shopping Cart</h1>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<p>Product: " . htmlspecialchars($item) . "</p>";
    }
}
?>
