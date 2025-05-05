<?php
// forgot_password.php

include_once 'database.php';
session_start();

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];

    
        $query = "SELECT * FROM project1 WHERE email='$email'";
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);

        if ($row == 1) 
        {
            $data = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $data['email'];

            header("location:mail/smtp.php");

        } 
        else 
        {
            echo "No account found with that email.";
        }
    } 
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
</head>
<body>

<form method="POST">
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Reset Password"></td>
        </tr>
    </table>
</form>

</body>
</html>
