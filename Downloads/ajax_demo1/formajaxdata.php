<?php

	$con = mysqli_connect('localhost','root','','ajax_demo');


		if (isset($_POST['username'])) {
		    $name = $_POST['username'];
		    $email = $_POST['email'];
		    $password = $_POST['password'];


		    $inst_query = "INSERT INTO user1 (username, email, password) VALUES ('$name', '$email', '$password')";
		    mysqli_query($con, $inst_query);
		}

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];

			$del_sql = "delete from user1 where id = '$id'";
			mysqli_query($con,$del_sql);
		}


		$query = "select * from user1";

		$data = mysqli_query($con,$query);

 while($row = mysqli_fetch_assoc($data)) { ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
		</tr>
	<?php } ?>