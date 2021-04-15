<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="login.php" method="post">
    <h3>LOGIN</h3>
    <?php if (isset($_GET['error'])) {?> 
        <p class="error"><? echo $_GET['error']; ?></p>
    <?php} ?>
    <label>Username</label>
}