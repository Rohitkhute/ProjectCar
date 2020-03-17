
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
<body>
<div class="container">
    <div class="header">
        <h2>Log In Here </h2>
        
    </div>
    <form action="login.php" method="post">
        
        <div>
            <label></label>
            <input type="text" name="username" placeholder="Username" value="" required>
        </div>
        
        <div>
            <label></label>
            <input type="password" name="password" placeholder="Password" value="" required>
        </div>
        
        <button type="submit" name="login_user">LogIn</button>
        <p>Not a user ?<a href="registration.php">SignIn</a></p> 
    </form>
</div>      
</body>
<html>