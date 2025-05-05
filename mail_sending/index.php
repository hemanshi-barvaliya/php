<?php

$con = mysqli_connect("localhost","root","","oop");
session_start();

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email != "" && $password !="")
    {
        $sql = "select * from class where email = '$email' and password='$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_num_rows($result);

        if($row==1)
        {
            $data = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $data['email'];
            header("location:mail/smtp.php");
            
        }
        else
        {
            echo "wrong email & password";
        }
    }
    else
    {
        echo "enter email and password";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form> 
</body>
</html>