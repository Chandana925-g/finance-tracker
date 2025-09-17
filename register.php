<?php
session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate CSRF token
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h2>Register</h2>

<nav>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <form action="actions/register-action.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
