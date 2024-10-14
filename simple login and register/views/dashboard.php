<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['username'])){
            header("location: ../index.php");
            exit();
        }

        if(isset($_SESSION['username'])){
            echo "Welcome <b>" . htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8') . "</b>";
        }
    ?>
    <br><br>
    <a href="../logout.php">Logout</a>

</body>
</html>
