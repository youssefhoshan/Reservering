<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form  action="login.php" method="post">
    <h2>LOGIN</h2>
    <?php 
    if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
        <label>User name</label>
            <input type="text" id="uname" name="uname" placeholder="Gebruikersnaam">
                                             
        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Wachtwoord">
        <button type="submit" value="Log in">Login</button>
        <a href="signup.php">Create an account</a>
</form>
</body>
</html>
