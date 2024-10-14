<?php
include '../config/db.php';

if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        header("Location: ../views/register.php?error=This email already exists!");
        exit();
    } else {
        if ($password === $confirmpassword) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, fullname, email, contact, password) VALUES ('$username', '$fullname', '$email', '$contact', '$hashedPassword')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header('Location: ../index.php?register=success');
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
                header('Location: ../views/register.php?register=failed');
                exit();
            }
        } else {
            header('Location: ../views/register.php?error=Passwords do not match!');
            exit();
        }
    }
}

if ($conn) {
    echo "Database connection successful!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

?>