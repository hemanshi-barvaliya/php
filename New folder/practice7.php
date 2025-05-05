
<?php 

 $con = mysqli_connect('localhost','root','','project');


	

	if(isset($_GET['u_id']))
	{
		$u_id = $_GET['u_id'];
		$sql_select = "select * from demo where id=".$u_id;
		$data=mysqli_query($con,$sql_select);
		$res=mysqli_fetch_assoc($data);

		$hobby_arr = explode(',', $res['hobby']);
		// print_r($hobby_arr);

	}

	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =$_POST['password'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		$hobby = implode(',', $_POST['hobby']);
		$image = $_FILES['image']['name'];

		if($image == "")
		{
			$image = $res['image'];
		}
		else
		{
			if(isset($_GET['u_id']))
			{
				unlink("image/".$res['image']);

			}
			$path = "image/".$image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}

		if(isset($_GET['u_id'])) 
		{
			$id = $_GET['u_id'];
			
			$sql= "update demo set name='$name', email='$email', password='$password', gender='$gender', city='$city', hobby='$hobby',image='$image' where id = ".$id;
		
		}
		else
		{

			$sql = "insert into demo(name,email,password,gender,city,hobby,image)values ('$name','$email','$password','$gender','$city','$hobby','$image')";


		}
		mysqli_query($con,$sql);
		header('location:practice7.php');

	}
	
	if(isset($_GET['d_id'])){
		$id = $_GET['d_id'];

		$sql_select = "select * from demo where id = '$id'";
		$data = mysqli_query($con,$sql_select);
		$sel_res = mysqli_fetch_assoc($data);

		unlink("image/".$sel_res['image']);
		$sql_delete = "delete from demo where id =".$id;
		mysqli_query($con,$sql_delete);
		header('location:practice7.php');
	}


 ?>


<form method="POST" enctype="multipart/form-data">
	
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" value="<?php echo @$res['name']; ?>"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email" value="<?php echo @$res['email']; ?>"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="Password" name="password" value="<?php echo  @$res['password']; ?>"></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td>
			<input type="radio" name="gender" value="male" <?php if(@$res['gender']=='male'){echo "checked";} ?>>male
			<input type="radio" name="gender" value="female" <?php if(@$res['gender']=='female'){echo "checked";} ?>>female
		</td>
	</tr>
	<tr>
		<td>City:</td>
		<td>
			<select name="city">
				<option>select city</option>
				<option value="AA" <?php if(@$res['city']=='AA'){echo "selected";} ?>>AA</option>
				<option value="BB" <?php if(@$res['city']=='BB'){echo "selected";} ?>>BB</option>
				<option value="CC" <?php if(@$res['city']=='CC'){echo "selected";} ?>>CC</option>
				<option value="DD" <?php if(@$res['city']=='DD'){echo "selected";} ?>>DD</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Hobby:</td>
		<td>
			<input type="checkbox" name="hobby[]" value="aa" <?php if(isset($_GET['u_id'])){
				if(in_array('aa', @$hobby_arr)){echo "checked";}} ?>>aa
			<input type="checkbox" name="hobby[]" value="bb" <?php if (isset($_GET['u_id'])) {
				if(in_array('bb', @$hobby_arr)){echo "checked";}} ?>>bb
			<input type="checkbox" name="hobby[]" value="cc" <?php if (isset($_GET['u_id'])) {
				if (in_array('cc', @$hobby_arr)) {echo "checked";}} ?>>cc
			<input type="checkbox" name="hobby[]" value="dd" <?php if(isset($_GET['u_id'])){
				if(in_array('dd', @$hobby_arr)){echo "checked";}} ?>>dd
			<input type="checkbox" name="hobby[]" value="ee" <?php if(isset($_GET['u_id'])){
				if(in_array('ee', @$hobby_arr)){echo "checked";}} ?>>ee
		</td>
	</tr>
	<tr>
		<td>Image:</td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save"></td>
	</tr>
</table>

</form>

<?php
$select = "select *from demo";
$data = mysqli_query($con,$select);

 ?>

 <table border=""> 
 	<th>Id</th>
 	<th>Name</th>                                                            
	<th>Email</th>
	<th>password</th>
	<th>gender</th>
	<th>city</th>
	<th>hobby</th>
	<th>image</th>
	<th>update</th>
	<th>delete</th>

	<pre>
		<?php while($res = mysqli_fetch_assoc($data)){ ?>
			<tr>
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><?php echo $res['password']; ?></td>
				<td><?php echo $res['gender']; ?></td>
				<td><?php echo $res['city']; ?></td>
				<td><?php echo $res['hobby']; ?></td>
				<td><img src="image/<?php echo $res['image']; ?>" width="100px"></td>
				<td><a href="practice7.php?u_id=<?php echo $res['id']; ?>">Update</a></td>
				<td><a href="practice7.php?d_id=<?php echo $res['id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</pre>

 </table>

 <button><a href="logout.php">Logout</a></button>