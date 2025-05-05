<?php

	
	include_once 'db.php';

	$id= $_GET['u_id'];

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
		
		
		if($image != "")
		{
			
			$path = "image/".$image;
			$file = $_FILES['image']['tmp_name'];
			move_uploaded_file($file, $path);
		}

		else
		{

				$query = "SELECT * FROM `exam` WHERE `id`='$id'"; 
				$data = mysqli_query($con, $query);
				$row = mysqli_fetch_assoc($data);
				$path = $row['image'];

		}

		


		$update_query = "UPDATE `exam` SET 
	                     `name`='$name', 
	                     `email`='$email', 
	                     `password`='$password', 
	                     `contact`='$contact', 
	                     `hobby`='$hobby', 
	                     `gender`='$gender', 
	                     `city`='$city', 
	                     `image`='$path' 
	                     WHERE `id`='$id'";

			mysqli_query ($con, $update_query);
			header("location:form.php");

	}

	

	$query = "SELECT * FROM `exam` WHERE `id`='$id'"; 
	$data = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User Information</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $row['password']; ?>"></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="contact" value="<?php echo $row['contact']; ?>"></td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="cricket" <?php echo in_array('cricket', explode(',', $row['hobby'])) ? 'checked' : ''; ?>>cricket
                    <input type="checkbox" name="hobby[]" value="camping" <?php echo in_array('camping', explode(',', $row['hobby'])) ? 'checked' : ''; ?>>camping
                    <input type="checkbox" name="hobby[]" value="reading" <?php echo in_array('reading', explode(',', $row['hobby'])) ? 'checked' : ''; ?>>reading
                    <input type="checkbox" name="hobby[]" value="travelling" <?php echo in_array('travelling', explode(',', $row['hobby'])) ? 'checked' : ''; ?>>travelling
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php echo $row['gender'] == 'male' ? 'checked' : ''; ?>>male
                    <input type="radio" name="gender" value="female" <?php echo $row['gender'] == 'female' ? 'checked' : ''; ?>>female
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <select name="city">
                        <option>------</option>
                        <option value="surat" <?php echo $row['city'] == 'surat' ? 'selected' : ''; ?>>surat</option>
                        <option value="navsari" <?php echo $row['city'] == 'navsari' ? 'selected' : ''; ?>>navsari</option>
                        <option value="ahmedabad" <?php echo $row['city'] == 'ahmedabad' ? 'selected' : ''; ?>>ahmedabad</option>
                        <option value="rajkot" <?php echo $row['city'] == 'rajkot' ? 'selected' : ''; ?>>rajkot</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>








