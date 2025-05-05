<?php
include_once 'db.php';

	if (isset($_POST['submit']))
	 {
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $password = $_POST['password'];
	    $number = $_POST['number'];
	    $gender = $_POST['gender'];
	    $hobby = $_POST['hobby'];
	    $hobby_str = implode(',', $hobby);
	    $city = $_POST['city'];

	    $image = $_FILES['image']['name'];

	    $path = "image/" . $image;

	     $file = $_FILES['image']['tmp_name'];

	    move_uploaded_file($file, $path);
	      
	    $sql = "INSERT INTO `user` (`name`, `email`, `password`, `number`, `gender`, `hobby`, `city`, `image`) VALUES 
	    	('$name', '$email', '$password', '$number', '$gender', '$hobby_str', '$city', '$image')";

	            mysqli_query($con, $sql);
	        
	    
	    
	}

		if (isset($_GET['srch'])) {

		    $srch = $_GET['srch'];

		} else {

		    $srch = "";
		}

		$query = "SELECT * FROM `user` WHERE name LIKE '%$srch%'";

		$data = mysqli_query($con, $query);

		if (isset($_GET['d_id'])) {
		    $id = $_GET['d_id'];

		    $del_sql = "DELETE FROM `user` WHERE `id` = '$id'";
		    mysqli_query($con, $del_sql);

		    header('Location: registration.php');
		}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <style type="text/css">
    	.box {
  			
  			
		}
		input[type=submit]
		{
			background-color:darkgray;
			border: none;
		}
		a{
			background-color:darkgray;
			padding: 5px 15px;
			color: black;
			text-decoration: none;
		}

    </style>
</head>
<body>
	<h1>Registration form</h1>
    <form method="post" enctype="multipart/form-data">
        <table  class="box" border="1">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="number"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male"> male
                    <input type="radio" name="gender" value="female"> female
                </td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="Cricket"> Cricket
                    <input type="checkbox" name="hobby[]" value="Reading"> Reading
                    <input type="checkbox" name="hobby[]" value="Dancing"> Dancing
                    <input type="checkbox" name="hobby[]" value="Camping"> Camping
                </td>
            </tr>
            <tr>
                <td>City:</td>
                <td>
                    <select name="city">
                        <option value="Navsari">Navsari</option>
                        <option value="Surat">Surat</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    
    <form method="get">
        <table>
            <tr>
                <td><input type="text" name="srch"></td>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
    </form>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Phone No.</td>
            <td>Gender</td>
            <td>Hobby</td>
            <td>City</td>
            <td>Image</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['hobby']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><img src="image/<?php echo $row['image']; ?>" width="100px" height="100px"></td>
                <td><a href="update.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                <td><a href="registration.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
