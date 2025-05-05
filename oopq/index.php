<?php 

include_once 'db.php';

if (isset($_POST['save'])) {

	if (isset($_GET['u_id'])) {
		$id = $_GET['u_id'];

		$update_data = array('name' =>$_POST['name'],'email'=>$_POST['email'],'password'=>$_POST['password'] , 'condition'=>array('where id'=>$id));

		$db->update("data",$update_data);

	}else{
		$db->Insert("data",$_POST);	
	}

	header('location:index.php');
}

if (isset($_GET['d_id'])) {

	$id = $_GET['d_id'];
	$db->delete("data",array('id'=>$id));
	header('location:index.php');
}

if (isset($_GET['u_id'])) {

	$id = $_GET['u_id'];
	$data1 = $db->select("data",array('id'=>$id));

}


$data = $db->select("data");

 ?>

<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo @$data1['name']; ?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value="<?php echo @$data1['email']; ?>"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="<?php echo @$data1['password']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>

<table border="">
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Password</th>
	<th>Delete</th>
	<th>Update</th>

	<?php while($row=mysqli_fetch_assoc($data)) { ?>

		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><a href="index.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
			<td><a href="index.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
			
		</tr>

	<?php } ?>
</table>