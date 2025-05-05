<?php

	$con= mysqli_connect("localhost","root","","fristdb");
	$id= $_GET['id'];

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
		$image = $_POST['image'];
	
		
		if($image != "")
		{
			$path = "image/".$image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}

		else
		{

				$sel = "select * from contactbook where id='$id'"; 
				$data = mysqli_query($con, $sel);
				$row = mysqli_fetch_assoc($data);
				 $path =$row['image'];
		}

		


		$update = "update contactbook set
					`name`='$name', `contact`='$contact', `email`='$email', `password`='$password', 
					`hobby`='$hoby_str', `gender`='$gender', `city`='$city',`image`='$path' 
					where  `id` = '$id'";

			mysqli_query ($con, $update);
			header("location:index.php");

	}

	

	$sel = "select * from contactbook where id='$id'"; 
	$data = mysqli_query($con, $sel);
	$row = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" enctype="multipart/form-data">
	<title></title>
</head>
<body>
	<form method="POST" content="width=device-width, initial-scale=1.0">

		<table>

			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value=<?php echo $row['name']; ?>></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact" value=<?php echo $row['contact']; ?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=<?php echo $row['email']; ?>></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value=<?php echo $row['password']; ?>></td>
			</tr>
			<tr>
				<td>Hobby:</td>
				<td>
					<input type="checkbox" value="travelling" name="hobby[]" <?php if (in_array('travelling', explode(',', $row['hobby']))) echo 'checked'; ?>> Travelling
                    <input type="checkbox" value="cricket" name="hobby[]" <?php if (in_array('cricket', explode(',', $row['hobby']))) echo 'checked'; ?>> Cricket
                    <input type="checkbox" value="reading" name="hobby[]" <?php if (in_array('reading', explode(',', $row['hobby']))) echo 'checked'; ?>> Reading
					<input type="checkbox" name="hobby[]" 
					 <?php if (in_array('camping', explode(',', $row['hobby']))) echo 'checked'; ?>> camping
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
                        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male    
                        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female     
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



	</table>

</body>
</html>