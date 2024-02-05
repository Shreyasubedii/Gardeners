<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: Admin Login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel </title>
    <style>
        body{
            margin:0px;
        }
        div.header{
            font-family:poppins;
            display: flex;
            justify-content:space-between;
            align-items:center;
            padding: 0px 60px;
            background-color: #8FB3A0;
        }
        div.header button{
            background-color: ##8FB3A0;;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black; 
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
    <h1>WELCOME TO ADMIN PANEL-<?php echo $_SESSION ['AdminLoginId']?> </h1>
    <form method="POST">
    <buton name="Logout">LOG OUT </buton>
    </form>
    </div>


<?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("Location:Admin Login.php");
    }
?>
</body>
</html>