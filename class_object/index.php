<?php 
include_once 'query.php';
// $result = []; 
// if(isset($_POST['submit']))
// {
// 	$db->Insert("project",$_POST);
// }

if(isset($_POST['submit']))
{
	if(isset($_GET['u_id']))
	{
		$id= $_GET['u_id'];
	

		$updata_data = array('name'=>$_POST['name'],
							'contact'=>$_POST['contact'],
							'email'=>$_POST['email'],
							'password'=>$_POST['password'],
							// 'hobby'=>$_POST['hobby'],
							'hobby'=>implode(",", $_POST['hobby']),
							'gender'=>$_POST['gender'],
							'city'=>$_POST['city'], 
							'condition'=>array('where id'=>$id));

		$db->update("project",$updata_data);


	}
	else
	{
		$hobby = implode(',',$_POST['hobby']);
		$_POST['hobby']=$hobby;
		$db->Insert("project",$_POST);
	}
	header('location:index.php');
}


if(isset($_GET['d_id']))
{
	$id= $_GET['d_id'];
	$db->delete("project",array('id'=>$id));
	header("location:index.php");
}

if(isset($_GET['u_id']))
{
	$id = $_GET['u_id'];
	$data1 = $db->select("project",array('id'=>$id));
}
	$data = $db->select("project");

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
				<td><input type="text" name="name" value="<?php echo @$data1['name']; ?>"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact" value="<?php echo @$data1['contact']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo @$data1['email']; ?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?php echo @$data1['password']; ?>"></td>
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
			</tr>
		   <tr>
                <td>
                    Image: 
                </td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>

		</table>
	</form>
	

	<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Contact</th>
        <th>Hobby</th>
        <th>Gender</th>
        <th>City</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['hobby']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><a href="index.php?d_id=<?php echo $row['id'];?> ">Delete</a></td>
        <td><a href="index.php?u_id=<?php echo $row['id'];?> ">Update</a></td> 

    </tr>
    <?php } ?>
</table>
	
	</body>
	</html>

