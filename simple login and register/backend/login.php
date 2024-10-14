<?php

include '../config/db.php'; 
session_start();

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header('location: ../views/dashboard.php');
            exit();
        } else {
            header('location: ../index.php?invalidLogin=Login Failed. Incorrect password.');
            exit(); 
        }         
    } else {
        header('location: ../index.php?NoUserFound=No User Found!');
        exit(); 
    } 
    $stmt->close();    
}

?>
