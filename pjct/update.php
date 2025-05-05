<?php 

        $con = mysqli_connect("localhost", "root","","fristdb");

        $id = $_GET['id'];
    
        if(isset($_POST['save']))
        {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $gender = $_POST['gender'];
            //$hobby = $_POST['hobby'];
            // $hoby_str = implode(",", $_POST['hobby']);
            $hobby = implode(",",$_POST['hobby']);
            $city = $_POST['city'];
            $image = $_FILES['image']['name'];

            if($image != "")
            {
                $path ="image/".$image;
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


            $sql = "update user set `name`='$name', `email` = '$email', `password` = '$password', `contact` = '$contact', `hobby` = '$hobby',`gender`='$gender',`city`='$city',`image`='$path' where id='$id'";

             // $ins = "insert into user(`name`,`email`,`password`,`contact`,`hobby`,`gender`,`city`,`image`)values('$name','$email','$password','$contact','$hoby_str','$gender','$city','$image')"; 

              mysqli_query($con,$sql); 
              header('location:form.php');

        }

            

            $sel = "select * from user where id=$id";

            $data = mysqli_query($con,$sel);
            $row = mysqli_fetch_assoc($data);

         



  
                  
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
        <form method="POST" enctype="multipart/form-data">
            <table>
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
                        <input type="text" name="contact" value=<?php echo $row['contact'];?>>
                    </td>
                </tr>
                <tr>
                        <td>
                            Hobby: 
                        </td>
                        <td>
                            <input type="checkbox" value="travelling" name="hobby[]" <?php if (in_array('travelling', explode(',', $row['hobby']))) echo 'checked'; ?>> Travelling
                            <input type="checkbox" value="cricket" name="hobby[]" <?php if (in_array('cricket', explode(',', $row['hobby']))) echo 'checked'; ?>> Cricket
                            <input type="checkbox" value="reading" name="hobby[]" <?php if (in_array('reading', explode(',', $row['hobby']))) echo 'checked'; ?>> Reading
                        </td>
                </tr>
                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male    
                        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female     
                    </td>
                </tr>
                <tr>
                    <td>
                        City: 
                    </td>
                    <td>
                        <select name="city">
                          <option>--Select City--</option>
                          <option value="surat">Surat</option>
                          <option value="ahmedabad">Ahmedabad</option>
                          <option value="rajkot">Rajkot</option>
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
                    <td><input type="submit" name="save"></td>
                </tr>

            </table>
        </form> 
