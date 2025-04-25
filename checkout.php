<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Checkout</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="icon" href="./logos/Logo maker project.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<?php
session_start();

$paymentSuccess = false;
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['card_payment'])) {
    // Basic validation of card details
    $cardNumber = trim($_POST['card_number'] ?? '');
    $expiryDate = trim($_POST['expiry_date'] ?? '');
    $cvv = trim($_POST['cvv'] ?? '');
    $cardHolder = trim($_POST['card_holder'] ?? '');

    if (empty($cardNumber) || empty($expiryDate) || empty($cvv) || empty($cardHolder)) {
        $errorMessage = 'Please fill in all card details.';
    } elseif (!preg_match('/^\d{16}$/', $cardNumber)) {
        $errorMessage = 'Card number must be 16 digits.';
    } elseif (!preg_match('/^\d{2}\/\d{2}$/', $expiryDate)) {
        $errorMessage = 'Expiry date must be in MM/YY format.';
    } elseif (!preg_match('/^\d{3}$/', $cvv)) {
        $errorMessage = 'CVV must be 3 digits.';
    } else {
        // Simulate payment processing success
        $paymentSuccess = true;
        // Save paid products to session for orders page
        $_SESSION['paid_products'] = $_SESSION['cart'] ?? [];
        // Clear the cart after successful payment
        unset($_SESSION['cart']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="stylesheet.css" />
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

    <div style="height: 125px;">
        
    </div>

    <h1>Checkout Page</h1>

    <?php if ($paymentSuccess): ?>
        <p style="color: green; font-weight: bold;">Payment successful! Thank you for your purchase.</p>
        <a href="index.php" style="color: #007bff; text-decoration: none;">Return to Home</a>
    <?php else: ?>
        <?php if ($errorMessage): ?>
            <p style="color: red; font-weight: bold;"><?php echo htmlspecialchars($errorMessage); ?></p>
        <?php endif; ?>

        <form method="POST" action="checkout.php" style="max-width: 400px;">
            <input type="hidden" name="card_payment" value="1" />
            <div style="margin-bottom: 10px;">
                <label for="card_holder">Cardholder Name:</label><br />
                <input type="text" id="card_holder" name="card_holder" required style="width: 100%;" />
            </div>
            <div style="margin-bottom: 10px;">
                <label for="card_number">Card Number:</label><br />
                <input type="text" id="card_number" name="card_number" maxlength="16" pattern="\d{16}" required style="width: 100%;" />
            </div>
            <div style="margin-bottom: 10px;">
                <label for="expiry_date">Expiry Date (MM/YY):</label><br />
                <input type="text" id="expiry_date" name="expiry_date" maxlength="5" pattern="\d{2}/\d{2}" placeholder="MM/YY" required style="width: 100%;" />
            </div>
            <div style="margin-bottom: 10px;">
                <label for="cvv">CVV:</label><br />
                <input type="password" id="cvv" name="cvv" maxlength="3" pattern="\d{3}" required style="width: 100%;" />
            </div>
            <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Pay with Card</button>
        </form>

        <p><a href="shopping-cart.php" style="color: #007bff; text-decoration: none;">Back to Cart</a></p>
    <?php endif; ?>
</body>
</html>
