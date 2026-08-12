<!-- filepath: c:\xampp\htdocs\sleekpick-skeleton (2)\sleekpick\account.php -->
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user data (example)
$user_name = "John Doe"; // Replace with database query
$user_email = "johndoe@example.com"; // Replace with database query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="assets/css/account.css">
</head>
<body>
    <header id="site-header">
        <div class="header-inner">
            <div class="logo">
                <a href="index.php">SleekPick</a>
            </div>
            <nav class="main-nav">
                <a href="index.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="account.php" class="active">Account</a>
            </nav>
        </div>
    </header>

    <main class="account-page">
        <section class="account-info">
            <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>
            <p>Email: <?php echo htmlspecialchars($user_email); ?></p>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </section>
    </main>

    <script src="assets/js/account.js"></script>
</body>
</html>