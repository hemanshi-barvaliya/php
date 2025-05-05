<?php
session_start();

$con = mysqli_connect("localhost", "root","","fristdb");

// if(isset($_POST['id']))
// {
//     $id = $_POST['id'];
// }

 if (isset($_POST['register'])) 
    {
        header("location:registration.php"); 
      
    }


if (isset($_POST['login'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email != "" && $password!="")
        {

            $query = "SELECT * FROM user WHERE email='$email' and password='$password'";

            $result = mysqli_query($con, $query);

            $cnt = mysqli_num_rows($result);    
            
            if($cnt>0)
            {
                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];

                header("location:form.php"); 
            }

            else
            {   
                    echo "Wrong email and password";

            }
        }
        else
        {
            echo "Enter email and password";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" ></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>
                <td><input type="submit" name="register" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>