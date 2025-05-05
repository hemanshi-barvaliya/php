<?php
	
	include_once 'db.php';

	if(isset($_POST['username']))
	{
		$name = $_POST['username'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hoby = $_POST['hobby'];
		$hobby = implode(',', $hoby);
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		


		$query = "INSERT INTO `book` (username, contact, email, password, hobby, gender, city) 
          	VALUES ('$name', '$contact', '$email', '$password', '$hobby', '$gender', '$city')";
			




		mysqli_query($con, $query);

	}

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$delsql = "delete from book where id='$id'";
	mysqli_query($con,$delsql);
}

if(isset($_POST['name']))
{
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$updatesql = "update book set email='$email',password='$password' where id='$id'";
	mysqli_query($con,$updatesql);
}

$user_qry = "select * from book";
$data_sql = mysqli_query($con,$user_qry);

 $cnt = 1; 
 while($row = mysqli_fetch_assoc($data_sql)) { ?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['hobby']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['city']; ?></td>

					<td><button type="button" class="btn btn-primary btnupdate" data-bs-toggle="modal" data-bs-target="#exampleModal" uid="<?php echo $data['id']; ?>">Update</button></td>
					<td><button class="btndelete" did="<?php echo $data['id']; ?>">Delete</button></td>
			</tr>
				</tr>

			<?php } ?>