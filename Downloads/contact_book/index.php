<?php

include_once 'db.php';

	$query = "SELECT * FROM `book`";

	$data = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" id="userform">

		<table>
		
			<tr>
				<td>Name:</td>
				<td><input type="text" name="username"></td>
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
				<td><select name="city">
					    <option>---city----</option>
					    <option value="Surat">Surat</option>
					    <option value="Navsari">Navsari</option>
					    <option value="Rajkot">Rajkot</option>
					</select></td>

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
	<table border="1">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>contact</td>
			<td>email</td>
			<td>password</td>
			<td>hooby</td>
			<td>gender</td>
			<td>city</td>
			<td>image</td>
		</tr>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($data)) { ?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['hobby']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['city']; ?></td>
					<td><img src="image/<?php echo $row['image'];?>" height="30px" width="30px"></td>
				</tr>

			<?php } ?>
		</tbody>
	</table>


	<script type="text/javascript">
        $(document).on('submit', '#userform', function(e) {
            var frm = $(this).serialize();

            e.preventDefault();

            $.ajax({
                method: 'post',
                url: 'query.php',
                data: frm,
                success: function(response) {
                    $('#userdata').html(response);
                }
            });
        });
    </script>
