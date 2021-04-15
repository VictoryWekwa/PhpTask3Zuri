<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h2> Welcome to your dashboard</h2>
    <div class="container signin">
        <p>Already have an account? <a href="login.php">Login </a></p>
        <p> You want to register? <a href="register.php">Register</a></p>
    </div>
</body>
<html>
 