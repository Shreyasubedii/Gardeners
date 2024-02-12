<?php
    include 'connection.php';
    session_start();
    $admin_id= $_SESSION['admin_name'];

    if(!isset($admin_id)){
        header('location:login.php');

    }
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link -->
    <link rel= 'stylesheet' href="https://https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>admin panel</title>
</head>
<body>
    <?php
        include 'admin_header.php';
    ?>
</body>
</html>