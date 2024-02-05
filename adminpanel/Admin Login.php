<?php
  require("connection.php");
?>
<html>
  <head>
    <title>ADMIN lOGIN PANEL</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="mycss.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body>
    <div class="login-form">
      <h2>Admin Panel Login</h2>
      <form method="POST">
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Admin Name" name="AdminName">
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="AdminPassword">
        </div>

        <button type="submit" name="Signin">Sign In</button>

        <div class="extra">
          <a href="#">Forgot Password ?</a>
         
        </div>
      </form>
    </div>

    <?php
        if(isset($_POST['Signin']))
        {
          $adminName = $_POST['AdminName'];
          $adminPassword = $_POST['AdminPassword'];
          $data = $con->query("SELECT * FROM admin_login WHERE Admin_Name= '$adminName' AND Admin_Password='$adminPassword'");

if($data->num_rows>0){
session_start();
$_SESSION['AdminLoginId'] = $adminName;
header("location: Admin Panel.php");
}
        else
        {
          echo"<script> alert('Incorrect Password');</script>";
        }
      }
    ?>

  </body>
</html>
