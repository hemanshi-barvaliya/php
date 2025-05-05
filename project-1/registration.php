<?php

	include_once 'database.php';

	session_start();

	// if(!isset($_SESSION['user_id']))
	// {
	// 	header("location:login.php");
	// }

	if(isset($_GET['u_id']))
	{
		$id = $_GET['u_id'];

		$query = "select * from project1 where id='$id'";
		$data = mysqli_query($con, $query);
		$row=mysqli_fetch_assoc($data);

		$hobby = explode(',', $row['hobby']);

	}

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$hoby = $_POST['hobby'];
		$hobby = implode(',' , $hoby);
		$gender = $_POST['gender'];
		$city = $_POST['city'];

		if(isset($_GET['u_id']))
		{
			$id = $_GET['u_id'];

			$sql = "update project1 set 
					name='$name',
					email='$email',
					password='$password',
					contact='$contact',
					hobby='$hobby',
					gender='$gender',
					city='$city' where id = '$id'";
		}
		else
		{

		$sql = "insert into project1 (name,email,password,contact,hobby,gender,city)values('$name','$email','$password','$contact','$hobby','$gender','$city')";
		}

		mysqli_query($con, $sql);
		header("location:registration.php");
	}

	if(isset($_GET['srch']))
	{
		$srch = $_GET['srch'];
	}
	else
	{
		$srch = "";
	}

		$query = "select * from project1 where name like '%$srch%'";
		$data = mysqli_query($con,$query);

		if(isset($_GET['d_id']))
		{
			$id = $_GET['d_id'];
			$del_sql = "delete from project1 where id='$id'";
			mysqli_query($con,$del_sql);
			header("location:registration.php");
		}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration page</title>
</head>
<body>
	<form method="POST">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo @$row['name'];?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?php echo @$row['email'];?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?php echo @$row['password'];?>"></td>
				</tr>
				<tr>
					<td>Contact:</td>
					<td><input type="text" name="contact" value="<?php echo @$row['contact'];?>"></td>
				</tr>
				<tr>
					<td>Hobby:</td>
				<td>
                    <input type="checkbox" name="hobby[]" value="cricket" <?php echo in_array('cricket', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>cricket
                    <input type="checkbox" name="hobby[]" value="camping" <?php echo in_array('camping', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>camping
                    <input type="checkbox" name="hobby[]" value="reading" <?php echo in_array('reading', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>reading
                    <input type="checkbox" name="hobby[]" value="travelling" <?php echo in_array('travelling', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>travelling
                </td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" name="gender" value="male" <?php echo @$row['gender'] == 'male' ? 'checked' : ''; ?>>male
						<input type="radio" name="gender" value="female"<?php echo @$row['gender'] == 'female' ? 'checked' : ''; ?>>female
					</td>
				</tr>
				<tr>
					<td>City:</td>
					<td>
						<select name="city">
							<option>---city---</option>
							<option value="surat" 
							<?php echo @$row['city'] == 'surat' ? 'selected' : '' ; ?>>surat</option>
							<option value="navsari"
							<?php echo @$row['city'] == 'navsari' ? 'selected' : '' ; ?>>navsari</option>
							<option value="rajkot"
							<?php echo @$row['city'] == 'rajkot' ? 'selected' : '' ; ?>>rajkot</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
	</form>

	<form method="GET">
		<table>
			<tr>
				<td><input type="text" name="srch"></td>
				<td><input type="submit" value="Search"></td>
			</tr>
		</table>
	</form>
	<table border="1">
		<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Contact</th>
			<th>Hobby</th>
			<th>Gender</th>
			<th>City</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>

		<?php $cnt=1; while($row = mysqli_fetch_assoc($data)) { ?> 
			<tr>
				<td><?php echo $cnt++;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['contact'];?></td>
				<td><?php echo $row['hobby'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['city'];?></td>
				<td>
					<a href="registration.php?u_id=<?php echo $row['id'];?>">Update
				</td>
				<td>
					<a href="registration.php?d_id=<?php echo $row['id'];?>">Delete
				</td>
			</tr>


		<?php } ?>
		</tbody>
	</table>
	<a href="logout.php">LOGOUT</a>
</body>
</html>