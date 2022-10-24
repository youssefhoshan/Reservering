<?php

session_start();
include "db_connect.php";

$name = ($_POST['name']);
$uname = ($_POST['uname']);
$pass = ($_POST['password']);
$re_pass = ($_POST['re_password']);


$user_data = 'uname=' . $uname . '& name=' . $name;

if (empty($uname)) {
    header("Location: signup.php?error=Username is required&$user_data");
    exit();
} else if (empty($pass)) {
    header("Location: signup.php?error=Password is required&$user_data");
    exit();
} else if (empty($re_pass)) {
    header("Location: signup.php?error=Confirmn password is required&$user_data");
    exit();
} else if (empty($name)) {
    header("Location: signup.php?error=User Name is required&$user_data");
    exit();
} else if ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
} else {
    $sql = "SELECT * FROM users WHERE user_name='$uname' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=This username is taken please try another&$user_data");
        exit();
    } else {
        $sql2 = "INSERT INTO users(user_name, password, name) 
                 VALUES ('$uname', '$pass', '$name')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            header("Location: signup.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: signup.php?error=unknown error occurred&$user_data");
            exit();
        }
    }
}
?>
