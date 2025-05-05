<?php 

session_start();

$con = mysqli_connect("localhost","root",'',"test");


	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email !="" && $password !="")
		{
			$query = "SELECT * FROM `demo` where `email`='$email' and `password`='$password'";

			$result = mysqli_query($con, $query);

			$cnt = mysqli_num_rows($result);

			if($cnt>0)
			{
				$row = mysqli_fetch_assoc($result);

				$_SESSION['user_id'] = $row['id'];

				header("location:index.php");
			}
			else
			{
				echo "Worng email and password";
			}

		}
		else
		{
			echo "Enter email and password";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
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
			<td><input type="submit" name="login" value="Login"></td>
			<td><input type="submit" name="register" value="Register"></td>

		</tr>
	</table>
	
</form>