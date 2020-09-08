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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <div class="page-header"> <h1><b> Weather forecasting</b></h1></div>
<div><h2>Weather forecasting is the application of current technology and science to predict the state of the atmosphere for a future time and a given location.</h2></div>

<div><h3>Weather forecasts are made by collecting as much data as possible about the current state of the atmosphere (particularly the temperature, humidity and wind) and using understanding of atmospheric processes (through meteorology) to determine how the atmosphere evolves in the future.

</h3></div>
<div class="page-header"> <h1><b> Thanks for Login...!!!</b></h1></div>
    </p>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br>
        <a href="main.php" class="btn btn">Get Back to weather site</a><br><br>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a><br><br>
    </p>
</body>
</html>