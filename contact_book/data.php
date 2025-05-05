<?php
session_start();

$con= mysqli_connect("localhost","root","","fristdb");


	$id = $_SESSION['userid'];

	if(!isset($_SESSION['userid']))
	{
		header("location:login.php");
	}
	else
	{
		

		$selquery = "select * from contactbook where id = $id";

		$result= mysqli_query($con, $selquery);

		//$cnt = mysqli_num_rows($result);

		$row = mysqli_fetch_assoc($result);
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
	<table border="">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>Conact</td>
			<td>Email</td>
			<td>Password</td>
			<td>Hobby</td>
			<td>Gender</td>
			<td>City</td>
			<td>Image</td>
			<td>delete</td>
			<td>Update</td>
		</tr>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['hobby'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><img src="image/<?php echo $row['image'];?>" height="30px" width="30px"></td>
			<td><a href="index.php?id=<?php echo $row['id'];?>">Delete</td>
			<td><a href="update.php?id=<?php echo $row['id'];?>">Update</td>
	</table><br>

    <button><a href="login.php">Login</a></button>
    <button><a href="index.php">index</a></button>
    <button><a href="ragister.php">ragister</a></button>
    <button><a href="logout.php">Logout</a></button>

</body>
</html>