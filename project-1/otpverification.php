<?php
// verify_otp.php

include_once 'database.php';
session_start();

if (isset($_POST['submit'])) {
   
    $otp = $_POST['otp'];

    
    if (isset($_COOKIE['otp'])) {
        
        if ($otp == $_COOKIE['otp']) {
            
            header('Location: reset_password.php');
        }
        else 
        {
            echo "Invalid OTP or OTP has expired.";
        }
    } 
    else 
    {
        echo "OTP has not been set or has expired.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify OTP</title>
</head>
<body>

<form method="POST">
    <table>
        <tr>
            <td>OTP:</td>
            <td><input type="text" name="otp" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Verify OTP"></td>
        </tr>
    </table>
</form>

</body>
</html>
