<?php
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["username"];
    $psw = $_POST["passw"];
    $path = "userd/" . $username . ".json";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['passw'] = $_POST['passw'];

    if (file_exists($path)) {
        $_SESSION["email"] = $email;
        echo "Logged in Sucessfully";
        header("location:logout.php");
    } else {
        echo "user not found";
        header("location:login.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form method="post">
        <div class="container">
            <h1>Simple Authentication - Login</h1>
            <p>Sign in to your account here</p>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="passw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passw" id="passw" required>

            <button type="submit" name="submit" class="registerbtn">Login</button>
        </div>

        <div class="container signin">
            <p> You want to Logout? <a href="logout.php">Logout</a></p>
            <p> No account Yet? <a href="register.php">Register</a></p>
        </div>
    </form>

</body>

</html>