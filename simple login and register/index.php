<a?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Form</title>

</head>
<body>
    <div class="container">
        <div class="form-container">
           
    <form id="login-form" class="form" action="backend/login.php" method="POST">
    <h2>Login</h2>
    <div class="form-group">
        <label for="login-email">Email:</label>
        <input type="email" id="login-email" name="email" required>
    </div>
    <div class="form-group">
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" required>
    </div>
    <button type="submit" name="login">Login</button>
    <p>Don't have an account? <a href="views/register.php">Register</a></p>
</form>

</body>
</html>