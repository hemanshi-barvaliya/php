<?php


include_once 'database.php';
session_start();


if (isset($_POST['submit'])) 
{

        $new_password = $_POST['new_password'];
        $id = $_SESSION['user_id'];

            
        $update_query = "UPDATE project1 SET password='$new_password' 
                        WHERE id='$id'";

                mysqli_query($con,$update_query);

                header('location:login.php'); 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>

<form method="POST">
    New Password:<input type="password" name="new_password"><br><br>
    <input type="submit" name="submit" value="Reset Password">
</form>

</body>
</html>
