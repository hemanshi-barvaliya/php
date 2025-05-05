<?php

include_once 'query.php';

if(isset($_POST['submit']))
{
	$db->Insert("project",$_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>Class Object</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">

		<table>
	
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
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>


	<form method="GET">
		<table>
			<tr>
				<td><input type="text" name="srch"></td>
				<td><input type="submit" value="srch"></td>
			</tr>
		</table>
		
	</form>

	<!-- <table>
		<?php foreach ($assoc_query as $value) { ?>

		<tr>
			<td>id</td>
			<td>Name</td>
			<td>email</td>
			<td>password</td>
			<td>conact</td>
			<td>hobby</td>
			<td>gender</td>
			<td>city</td>
		</tr>
		<tr>
			<td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['hobby'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['city'];?></td>

	    </tr>
	</table> -->
	</body>
	</html>