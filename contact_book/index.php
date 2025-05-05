<?php
	
	session_start();
	$con= mysqli_connect("localhost","root","","fristdb");

	if(!isset($_SESSION['userid']))
	{
		header("location:login.php");
	}
	

	$limit = 2;

	if(isset($_GET['pageno']))
	{
		$pageno = $_GET['pageno'];
	}
	else
	{
		$pageno = 1;
	}

	$start = $limit * ($pageno-1);

	$total_record_query = mysqli_query($con, "select * from contactbook");

	$totalrecord = mysqli_num_rows($total_record_query);

	$totalpage = ceil($totalrecord / $limit);

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hobby = $_POST['hobby'];
		$hoby_str = implode(',', $hobby);
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		$image = $_FILES['image']['name'];
	
		$path = "image/".$image;

		move_uploaded_file($_FILES['image']['tmp_name'],$path);


		$inst = "INSERT INTO contactbook
				(`name`, `contact`, `email`, `password`, `hobby`, `gender`, `city`,`image`) VALUES 
				('$name','$contact','$email','$password','$hoby_str','$gender','$city','$image')";

				mysqli_query($con,$inst);

		
	}

	if(isset($_GET['srch']))
	{
		$srch= $_GET['srch'];
	}
	else
	{
		$srch="";
	}

	//$sel = "select * from contactbook";

	$sel = "select * from contactbook limit $start, $limit"; // 
	$data = mysqli_query($con, $sel);

	

	if(isset($_GET['id']))
	{
		$id= $_GET['id'];

		$del= "delete from contactbook where id=$id";

		mysqli_query($con,$del);

		header("location:index.php");
	}

//pagination

	


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">

		<table>
			<tr>
				
				<td><a href="logout.php">LOGOUT</td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Hobby:</td>
				<td>
					<input type="checkbox" name="hobby[]" value="travelling">travelling
					<input type="checkbox" name="hobby[]" value="reading">reading
					<input type="checkbox" name="hobby[]" value="cricket">cricket
					<input type="checkbox" name="hobby[]" value="camping">camping
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<td>City:</td>
				<td>
					<select name="city">
						<option>---city----</option>
						<option value="Surat">Surat</option>
						<option value="Navsari">Navsari</option>
						<option value="Rajkot">Rajkot</option>
					</select>
				<td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>

	<form method="GET">
		<table>
			<tr>
				<td>Search Recored:</td>
				<td><input type="text" name="srch"></td>
				<td><input type="submit" value="Search"></td>
			</tr>
		</table>
	</form>

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

		<?php while ($row = mysqli_fetch_assoc($data)) {?>
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


		</tr>
		<?php } ?>



	</table>

	<?php

		if($pageno>1)
		{
			echo '<a href=index.php?pageno='.($pageno-1).'>Privious</a>';
		}
	?>
	<?php
		for($i=1; $i<=$totalpage; $i++){?>
			<a href="index.php?pageno=<?php echo $i;?>">
				<?php echo $i ?>
			</a>
		<?php } ?>

	<?php
		if($totalpage>$pageno)
		{
			echo '<a href=index.php?pageno='.($pageno+1).'>Next</a>';
		}





	?>

</body>
</html>