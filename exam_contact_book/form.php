<?php

include_once 'db.php';

session_start();

if(!isset($_SESSION['user_id']))
{
	header('location:login.php');
}

	if(isset($_GET['u_id']))
	{
		$id = $_GET['u_id'];

		$query = "SELECT * FROM `exam` WHERE `id`='$id'"; 

		$data = mysqli_query($con, $query);

		$row = mysqli_fetch_assoc($data);

		$hobby = explode(',', $row['hobby']);

	}
	


if (isset($_POST['submit'])) 
	{

	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $password = $_POST['password'];
	    $contact = $_POST['contact'];
	    $hoby = $_POST['hobby'];
	    $hobby = implode(',', $hoby); 
	    $gender = $_POST['gender'];
	    $city = $_POST['city'];
	   	$image = $_FILES['image']['name'];

		
    if ($image == "")
    {
        
        $image = $row['image'];  
    }
     
     else
    {
        
        if (isset($_GET['u_id'])) 
        {
            unlink("image/" . $row['image']);  
        }

        
        $path = "image/" . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }

    if (isset($_GET['u_id'])) {

        $id = $_GET['u_id'];
        
        $sql = "UPDATE `exam` SET 
                `name`='$name', 
                `email`='$email', 
                `password`='$password', 
                `contact`='$contact', 
                `hobby`='$hobby', 
                `gender`='$gender', 
                `city`='$city', 
                `image`='$image' 
                WHERE `id`='$id'";
    } 
    else
     {
        
        $sql = "INSERT INTO `exam`(`name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) 
                VALUES ('$name','$email','$password','$contact','$hobby','$gender','$city','$image')";
    }

    mysqli_query($con, $sql);
    header('location:form.php');
}
	

	if(isset($_GET['srch']))
	{
		$srch = $_GET['srch'];
	}
	else
	{
		$srch = '';
	}

	$query = "SELECT * FROM `exam` WHERE name LIKE '%$srch%'";

	$data = mysqli_query($con, $query);



if(isset($_GET['d_id']))
{
	$id = $_GET['d_id'];

	$query = "SELECT * FROM `exam` WHERE `id`='$id'";
	$data = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($data);

	unlink("image/".$row['image']);

	$del_sql = "DELETE FROM `exam` WHERE `id` = '$id'";

	mysqli_query($con, $del_sql);

	header('location:form.php');
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
        <table>
        	<tr><a href="logout.php">Logout</a></tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo @$row['name']; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo @$row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo @$row['password']; ?>"></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="contact" value="<?php echo @$row['contact']; ?>"></td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="cricket" <?php echo in_array('cricket', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>cricket
                    <input type="checkbox" name="hobby[]" value="camping" <?php echo in_array('camping', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>camping
                    <input type="checkbox" name="hobby[]" value="reading" <?php echo in_array('reading', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>reading
                    <input type="checkbox" name="hobby[]" value="travelling" <?php echo in_array('travelling', explode(',', @$row['hobby'])) ? 'checked' : ''; ?>>travelling
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php echo @$row['gender'] == 'male' ? 'checked' : ''; ?>>male
                    <input type="radio" name="gender" value="female" <?php echo @$row['gender'] == 'female' ? 'checked' : ''; ?>>female
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <select name="city">
                        <option>------</option>
                        <option value="surat" <?php echo @$row['city'] == 'surat' ? 'selected' : ''; ?>>surat</option>
                        <option value="navsari" <?php echo @$row['city'] == 'navsari' ? 'selected' : ''; ?>>navsari</option>
                        <option value="ahmedabad" <?php echo @$row['city'] == 'ahmedabad' ? 'selected' : ''; ?>>ahmedabad</option>
                        <option value="rajkot" <?php echo @$row['city'] == 'rajkot' ? 'selected' : ''; ?>>rajkot</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

	<form method="GET">
		<table>
			<tr>
				<td><input type="text" name="srch"></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>

	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Contact</td>
			<td>Hobby</td>
			<td>Gender</td>
			<td>City</td>
			<td>Image</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>
		<?php  $cnt=1; While($row = mysqli_fetch_assoc($data)) {?>
			<tr>
				<td><?php echo $cnt++; ?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['contact'];?></td>
				<td><?php echo $row['hobby'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['city'];?></td>
				<td><img src="image/<?php echo $row['image']; ?>" alt="Image" width="100" height="100"/></td>
				<td><a href="./form.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
				<td><a href="./form.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
