<?php

	$con = mysqli_connect('localhost','root','','project');

	if(isset($_GET['u_id']))
	{
		$id = $_GET['u_id'];

		$query = "select * from demo1 where id='$id'";
		$data = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($data);

		$hobby_arr = explode(',', $row['hobby']);
	}


	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =$_POST['password'];
		$hobby = implode(',', $_POST['hobby']);
		$image = $_FILES['image']['name'];

		if($image == "")
		{
			$image = $row['image'];
		}
		else
		{
			if(isset($_GET['u_id']))
			{
				unlink("image/".$row['image']);

			}
			$path = "image/".$image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}

		if(isset($_GET['u_id'])) 
		{
			$id = $_GET['u_id'];
			
			$sql= "update demo1 set name='$name', email='$email', password='$password', hobby='$hobby',image='$image' where id = ".$id;
		
		}
		else
		{

			$sql = "insert into demo1(name,email,password,hobby,image)values ('$name','$email','$password','$hobby','$image')";


		}
		mysqli_query($con,$sql);
		header('location:index.php');

	}



	$query = "select * from demo1 ";
	$data = mysqli_query($con, $query);

		if(isset($_GET['d_id']))
		{
			$id = $_GET['d_id'];

			$query = "select * from demo1 where id='$id'";
			$data = mysqli_query($con , $query);
			$row= mysqli_fetch_assoc($data);

			unlink("image/".$row['image']);

			$del_query = "delete from demo1 where id='$id'";
			mysqli_query($con, $del_query);

			header('location:index.php');
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

	<form method="POST" enctype="multipart/form-data">

		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo @$row['name'];?>"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email" value="<?php echo @$row['email'];?>"></td>
			</tr>

			<tr>
				<td>password:</td>
				<td><input type="text" name="password" value="<?php echo @$row['password'];?>"></td>
			</tr>
			<tr>
				<td>hobby:</td>
				<td>
					<input type="checkbox" name="hobby[]" value="cricket">cricket
					<input type="checkbox" name="hobby[]" value="reading">reading
					<input type="checkbox" name="hobby[]" value="camping">camping
				</td>
			</tr>
			<tr>
				<td>image:</td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>

		</table>
		
	</form>
</body>
</html>

<table border="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>hobby</th>
		<th>image</th>
		<th>update</th>
		<th>delete</th>

	</tr>
	<tbody>
	<?php while($row = mysqli_fetch_assoc($data)) { ?>
	
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['hobby']; ?></td>
		<td><img src="image/<?php echo $row['image']; ?>" width="100px" height="100px"></td>
		<td><a href="./index.php?u_id=<?php echo $row['id'];?>">update</a></td>
		<td><a href="./index.php?d_id=<?php echo $row['id'];?>">Delete</a></td>
	</tr>

	<?php } ?>
	</tbody>
</table>