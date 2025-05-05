<?php 

session_start();
$con = mysqli_connect("localhost","root","","mail");


if(isset($_POST['save']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql_login = "select *from user where email = '$email' and password= '$password'";
	$data = mysqli_query($con,$sql_login);
	$cnt=mysqli_num_rows($data);

	if($cnt==1)
	{
		$row = mysqli_fetch_assoc($data);
		$_SESSION['email'] =$row['email'];
		header('location:mail/smtp.php');
		// echo "login";
	}
	else
	{
		echo "check email and password";
	}
}
 ?>




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
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
		
	</table>
</form>