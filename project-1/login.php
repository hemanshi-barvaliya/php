<?php
	session_start();

	include_once 'database.php';
	

	

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		
			$query = "select * from project1 where email='$email' and password='$password'";
			$result = mysqli_query($con,$query);
			$row = mysqli_num_rows($result);

			if($row==1)
			{
				$data = mysqli_fetch_assoc($result);

				$_SESSION['email'] = $data['email'];

				$_SESSION['user_id'] = $data['id'];

				header("location:registration.php");
			}
			else
			{
				echo "Wrong email and password";
			}
		}
		
	




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="POST">
		
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="LogIn"></td>
				<td><button><a href="registration.php">Registration</button></td>
			</tr>
		</table>

		<p><a href="forgot_password.php">forgot password</p>
</form>


</body>
</html>
