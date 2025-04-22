<?php
session_start();
require_once "database.php";

// Check if user is logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user_email'];

// Fetch user information
$stmt = mysqli_prepare($conn, "SELECT fullname, email FROM users WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $user_email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

$update_message = "";
$password_error = "";
$password_success = "";

// Handle password change
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Fetch current password hash
    $stmt = mysqli_prepare($conn, "SELECT password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $user_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user_password_data = mysqli_fetch_assoc($result);

    if (!$user_password_data || !password_verify($current_password, $user_password_data['password'])) {
        $password_error = "Current password is incorrect.";
    } elseif ($new_password !== $confirm_password) {
        $password_error = "New password and confirm password do not match.";
    } elseif (strlen($new_password) < 6) {
        $password_error = "New password must be at least 6 characters long.";
    } else {
        // Update password
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, "UPDATE users SET password = ? WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "ss", $new_password_hash, $user_email);
        if (mysqli_stmt_execute($stmt)) {
            $password_success = "Password updated successfully.";
        } else {
            $password_error = "Failed to update password. Please try again.";
        }
    }
}

// Handle sign out
if (isset($_GET['signout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="icon" href="./logos/Logo maker project.png" />
</head>
<body>
    <div class="container" style="max-width: 600px; margin: 2rem auto;">
        <h1>Account Information</h1>
        <?php if ($user): ?>
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($user['fullname']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <?php else: ?>
            <p>User information not found.</p>
        <?php endif; ?>

        <h2>Change Password</h2>
        <?php if ($password_error): ?>
            <div style="color: red;"><?php echo htmlspecialchars($password_error); ?></div>
        <?php endif; ?>
        <?php if ($password_success): ?>
            <div style="color: green;"><?php echo htmlspecialchars($password_success); ?></div>
        <?php endif; ?>
        <form method="post" action="account.php">
            <input type="hidden" name="change_password" value="1" />
            <div>
                <label for="current_password">Current Password:</label><br />
                <input type="password" id="current_password" name="current_password" required />
            </div>
            <div>
                <label for="new_password">New Password:</label><br />
                <input type="password" id="new_password" name="new_password" required />
            </div>
            <div>
                <label for="confirm_password">Confirm New Password:</label><br />
                <input type="password" id="confirm_password" name="confirm_password" required />
            </div>
            <br />
            <button type="submit" style="background-color: #75fb87; border: none; padding: 10px 20px; border-radius: 5px;">Update Password</button>
        </form>

        <br />
        <a href="account.php?signout=1" style="color: red; font-weight: bold;">Sign Out</a>
    </div>
</body>
</html>
