<?php
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $passw = $_POST["passw"];

    echo $username . $email ; 

    //creating an array to store each users details
    $user_data = [
        "username" => $username,
        "email" => $email,
        "passw" => $passw
    ];
    if ($user_data) {
        //push created array through the file system and save
        file_put_contents("userd/" . $user_data["username"] . ".json" , json_encode($user_data));
        $_SESSION["username"] = $user_data["username"];
        $_SESSION["email"] = $email;

        echo "Successfully Registered";
        header("location:main.php");

    } else {
        header("location:main.php");
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
            <h1>Simple Authentication - Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="email" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>


            <label for="passw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passw" id="passw" required>

            <button type="submit" name="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Login </a></p>
        </div>
    </form>

</body>

</html>