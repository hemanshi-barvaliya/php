
<?php 

        include_once 'db.php';

        $id = $_GET['u_id'];
    
        if(isset($_POST['update']))
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

            if($image != "")
            {
                $path ="image/";
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
            }
            else
            {
                $sql = "SELECT image FROM user WHERE id=$id";
                $data = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($data);
                $path =$row['image'];
            }


           
            move_uploaded_file($_FILES['image']['tmp_name'], $path);


            $update_sql = "update user set `name`='$name', `email` = '$email', `password` = '$password', `number` = '$number', `hobby` = '$hobby_str',`gender`='$gender',`city`='$city',`image`='$path' where id='$id'";

              mysqli_query($con,$update_sql); 

              header('location:registration.php');

        }

            

            $query = "select * from user where id=$id";

            $data = mysqli_query($con,$query);

            $row = mysqli_fetch_assoc($data);




                  
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <style>

</style>
</head>

<body>
        <form method="POST" enctype="multipart/form-data">
            <table class="box">
                <tr>
                    <td>
                        Name: 
                    </td>
                    <td>
                        <input type="text" name="name" value=<?php echo $row['name']; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                    </td>
                    <td>
                        <input type="email" name="email" value=<?php echo $row['email']; ?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password: 
                    </td>
                    <td>
                        <input type="password" name="password" value=<?php echo $row['password'];?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact: 
                    </td>
                    <td>
                        <input type="text" name="number" value=<?php echo $row['number'];?>>
                    </td>
                </tr>
                <tr>
                        <td>
                            Hobby: 
                        </td>
                        <td>
                            <input type="checkbox" value="Cricket" name="hobby[]" <?php if (in_array('Cricket', explode(',', $row['hobby']))) echo 'checked'; ?>> 
                            Cricket
                            <input type="checkbox" value="Reading" name="hobby[]" <?php if (in_array('Reading', explode(',', $row['hobby']))) echo 'checked'; ?>> 
                            Reading
                            <input type="checkbox" value="Dancing" name="hobby[]" <?php if (in_array('Dancing', explode(',', $row['hobby']))) echo 'checked'; ?>> 
                            Dancing
                            <input type="checkbox" value="Camping" name="hobby[]" <?php if (in_array('Camping', explode(',', $row['hobby']))) echo 'checked'; ?>> 
                            Camping
                        </td>
                </tr>
                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" 
                        <?php if ($row['gender'] == "male") echo 'checked'; ?>> male    
                        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == "female") echo 'checked'; ?>> female     
                    </td>
                </tr>
                <tr>
                    <td>
                        City: 
                    </td>
                    <td>
                        <select name="city">
                        <option value="Navsari" <?php echo ($row['city'] == 'Navsari') ? 'selected' : ''; ?>>Navsari</option>
                        <option value="Surat" <?php echo ($row['city'] == 'Surat') ? 'selected' : ''; ?>>Surat</option>
                        <option value="Rajkot" <?php echo ($row['city'] == 'Rajkot') ? 'selected' : ''; ?>>Rajkot</option>
                        <option value="Ahmedabad" <?php echo ($row['city'] == 'Ahmedabad') ? 'selected' : ''; ?>>Ahmedabad</option>
                    </select>
                    </td>
                </tr>


                 <tr>
                    <td>
                        Image: 
                    </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="update"></td>
                </tr>

            </table>
        </form> 
    </body>
</html>


