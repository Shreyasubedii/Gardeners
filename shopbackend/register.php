<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link -->
    <link rel= 'stylesheet' href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- <link rel="stylesheet" type= "text/css" href="style.css">   -->
    <link rel="stylesheet" href="style.css">
    <title>Register Page </title>
</head>
<body>
    <section class="form-container">
        <form action="" method="post">
            <h1>Register Now</h1> 
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="cpassword" placeholder="confirm your password" required>
            <input type="submit" name="submit-btn" value="register now" class="btn">
            <p>already have an account ? <a href="login.php">Login Now </a></p>
        </form>

    </section>
</body>
</html>