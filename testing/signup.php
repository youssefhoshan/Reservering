<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form  action="signup-check.php" method="post">
    <h2>SIGN UP</h2>
    <?php 
    if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php 
    if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label>Name</label>
    <?php 
    if (isset($_GET['name'])) { ?>
        <input type="text" 
        id="name" 
        name="name" 
        placeholder="Voornaam"
        value="<?php echo $_GET['name']; ?>" >
    <?php } else { ?>
        <input type="text" 
        id="name" name="name" 
        placeholder="Voornaam">
    <?php }?>

    <label>Username</label>
    <?php 
    if (isset($_GET['uname'])) { ?>
        <input type="text" 
        id="uname" 
        name="uname" 
        placeholder="Gebruikersnaam"
        value="<?php echo $_GET['uname']; ?>" >
    <?php } else { ?>
        <input type="text" 
        id="uname" name="uname" 
        placeholder="Gebruikersnaam">
    <?php }?>

        <label>Password</label>
        <input type="password" 
               id="password" 
               name="password" 
               placeholder="Wachtwoord">
        
        <label>Confirm Password</label>
        <input type="password" 
               id="re_password" 
               name="re_password" 
               placeholder="wachtwoord">

        <button type="submit">Sign Up</button>
        <a href="index.php">Already have an account?</a>
</form>
</body>
</html>
