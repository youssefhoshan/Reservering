<?php

$VisitorName = $_POST['VisitorName'];
$VisitorEmail = $_POST['VisitorEmail'];
$VisitorPhone = $_POST['VisitorPhone'];
$TotalAdults = $_POST['TotalAdults'];
$Total_Children = $_POST['Total_Children'];
$Checkin = $_POST['Checkin'];
$Checkout = $_POST['Checkout'];
$bike_preference = filter_input(INPUT_POST, "BikePreference", FILTER_VALIDATE_INT);



$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_NAME = 'bikeshop';
$DATABASE_PASS = '';


$conn = mysqli_connect( hostname: $DATABASE_HOST,
                        username: $DATABASE_USER,
                        password: $DATABASE_PASS,
                        database: $DATABASE_NAME);

if (mysqli_connect_errno()) {
    die("Connection failed" . mysqli_connect_error());
}
echo " FUCK YES CONNECTED BITCH";


?>
