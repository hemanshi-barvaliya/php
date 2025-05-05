<?php 

$con = mysqli_connect('localhost','root','','ajax_demo');

if(isset($_POST['username']))
{

	$user = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$usersql = "insert into user (name,email,password) values ('$user','$email','$password')";
	mysqli_query($con,$usersql);
}

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$delsql = "delete from user where id=$id";
	mysqli_query($con,$delsql);
}

if(isset($_POST['name']))
{
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$updatesql = "update user set email='$email',password='$password' where id='$id'";
	mysqli_query($con,$updatesql);
}

$user_qry = "select * from user";
$data_sql = mysqli_query($con,$user_qry);

 $cnt = 1; 
 while ($data = mysqli_fetch_assoc($data_sql)) { ?>
	<tr>
		<td><?php echo $cnt++; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><button type="button" class="btn btn-primary btnupdate" data-bs-toggle="modal" data-bs-target="#exampleModal" uid="<?php echo $data['id']; ?>">Update</button></td>
		<td><button class="btndelete" did="<?php echo $data['id']; ?>">Delete</button></td>
	</tr>
<?php } ?>