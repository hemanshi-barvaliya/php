<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fristdb");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != '' && $password != '') {
  
      
        $query = "SELECT * FROM contactbook WHERE email='$email' AND password='$password'";

        $result = mysqli_query($con, $query);
        $data = mysqli_num_rows($result);

        if ($data != 0) {
            $row = mysqli_fetch_assoc($result);

           
            $_SESSION['userid'] = $row['id'];

        
            header("location:index.php");
           
        } else {
            echo "Wrong email or password!";
        }
    } else {
        echo "Please enter email and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    
    <form method="POST">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
