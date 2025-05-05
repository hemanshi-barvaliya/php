<?php  
	
	include_once 'db.php';

	session_start();

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email != '' && $password != '')
		{
			$query = "SELECT * FROM `exam` WHERE `email`='$email' AND `Password`='$password'";

			$result = mysqli_query($con,$query);

			$data = mysqli_num_rows($result);

			if($data>0)
			{
				$row = mysqli_fetch_assoc($result);

				$_SESSION['user_id'] = $row['id'];

				header('Location:form.php'); 

			}
			else
			{
				echo "Worng Email and password";
			}
		}
		else
		{
			echo "Enter Email And password";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
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
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>

