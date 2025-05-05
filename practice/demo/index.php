<?php

       session_start();

$con = mysqli_connect('localhost', 'root' ,'' , 'test');

if(!isset($_SESSION['user_id']))
{
	header('location:login.php');
}




 if(isset($_POST['submit']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
    $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : [];
 	$hoby_str = implode(', ', $hobby);
 	

 	$inst = "INSERT INTO demo (`name`,`email`,`password`,`hobby`) 
 			VALUES ('$name' , '$email', '$password', '$hoby_str')";


 	mysqli_query($con , $inst);

 }

 if(isset($_GET['srch']))
 {
 	$srch = $_GET['srch'];
 }
 else
 {
 	$srch = "";
 }


  $query = "SELECT * FROM `demo` where `name` Like '%$srch%'";
  $data = mysqli_query($con, $query);

  if(isset($_GET['d_id']))
  {

  		$d_id = $_GET['d_id'];

  		$del = "DELETE FROM `demo` WHERE `id`='$d_id'";

  		mysqli_query($con, $del);

  		header("location:index.php");

  }
  //   if(isset($_GET['u_id']))
  // {

  // 		$u_id = $_GET['u_id'];

  // 		$select = "SELECT * FROM `demo` WHERE `id`= '$u_id'";
  // 		$result = mysqli_query($con , $select);
  // 		$row = mysqli_fetch_row($result);

  // 		$name = $row['name'];
// 	 	$email = $row['email'];
// 	 	$password = $row['password'];
// 	    $hobby = explode(',', $row['hobby']);
	 
  // 		$update = "UPDATE `demo` SET `name`='$name',`email`='$email',`password`='$password',`hobby`='$hobby' WHERE `id` = '$u_id'";


  // 		mysqli_query($con, $update);
  		

 

  // }

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
			<td>Name:</td>
			<td><input type="text" name="name"  value=<?php echo @$row['name']; ?>></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value=<?php echo @$row['email']; ?>></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value=<?php echo @$row['password'];?>></td>
		</tr>
		<tr>
			<td>Hobby:</td>
			<td><input type="checkbox" name="hobby[]" value="Reading">Reading
				<input type="checkbox" name="hobby[]" value="Cricket">Cricket
				<input type="checkbox" name="hobby[]" value="Camping">Camping
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	
</form>

<form method="GET">

	<input type="text" name="srch">
	<input type="submit" name="submit">

</form>

<table border="1">

	<tr>
		<td>id</td>
		<td>Name</td>
		<td>email</td>
		<td>password</td>
		<td>hobby</td>
	</tr>
	<?php while($row = mysqli_fetch_assoc($data)){?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['password']?></td>
			<td><?php echo $row['hobby']?></td>
			<td><a href="index.php?d_id=<?php echo $row['id'];?>">Delete</td>
			<td><a href="index.php?u_id=<?php echo $row['id'];?>">Update</td>
		</tr>
		<?php } ?>
	
</table>
</body>
</html>