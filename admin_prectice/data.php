<?php


	
include_once 'db.php';

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `data1` (`email`,`password`) VALUES ('$email' , '$password')";

	mysqli_query($con , $query);

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>