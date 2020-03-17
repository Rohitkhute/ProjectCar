<?php include("database.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
<body>
<div class="container">
    <div class="header">
        <h2>Registration</h2>
    </div>
    <form action="registration.php" method="post">
        <?php include("errors.php")?>
        <div>
            <label></label>
            <input type="text" name="username" placeholder="Username" value="" required>
        </div>
        <div>
            <label></label>
            <input type="text" name="email" placeholder="Email" value="" required>
        </div>
        <div>
            <label></label>
            <input type="password" name="password1" placeholder="Password" value="" required>
        </div>
        <div>
            <label></label>
            <input type="password" name="password2" placeholder="Confirm Password" value="" required>
        </div>
        <button type="submit" name="reg_user">SignIn</button>
        <p>Already a user ?<a href="login.php">LogIn</a></p> 
    </form>
</div>      
</body>
<html>