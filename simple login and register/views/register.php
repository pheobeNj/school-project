<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    

<form id="register-form" class="form" action="../backend/register.php" method="POST">
    <h2>Register</h2>
    <div class="form-group">
        <label for="register-username">Username</label>
        <input type="text" id="register-username" name="username" required>
    </div>
    <div class="form-group">
        <label for="register-fullname">Fullname:</label>
        <input type="text" id="register-fullname" name="fullname" required>
    </div>
    <div class="form-group">
        <label for="register-email">Email:</label>
        <input type="email" id="register-email" name="email" required>
    </div>
    <div class="form-group">
        <label for="register-contact">Contact:</label>
        <input type="text" id="register-contact" name="contact" required>
    </div>
    <div class="form-group">
        <label for="register-password">Password:</label>
        <input type="password" id="register-password" name="password" required>
    </div>
    <div class="form-group">
        <label for="register-confirm-password">Confirm Password:</label>
        <input type="password" id="register-confirm-password" name="confirmpassword" required>
    </div>
    <button type="submit" name="register">Register</button>
    <p>Already have an account? <a href="../index.php">Login</a></p>
</form>


</body>
</html>