<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!-- Add the navigation bar here -->
<nav>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</nav>

<h2>Login</h2>
<form action="actions/login-action.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
