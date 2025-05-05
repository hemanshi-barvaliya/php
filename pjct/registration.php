
<?php 
        
        $con = mysqli_connect("localhost","root","","fristdb");

    
        if(isset($_POST['submit']))
        {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $hoby_str = implode(",", $_POST['hobby']);
            $gender = $_POST['gender'];
            $city = $_POST['city'];
            $image = $_FILES['image']['name'];

            $path ="image/".$image;

            move_uploaded_file($_FILES['image']['tmp_name'], $path);


             $ins = "insert into user(`name`,`email`,`password`,`contact`,`hobby`,`gender`,`city`,`image`)values('$name','$email','$password','$contact','$hoby_str','$gender','$city','$image')";

             mysqli_query($con,$ins); 

             header("Location: login.php"); 

        }

       
                  
      
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
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: 
                    </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password: 
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact: 
                    </td>
                    <td>
                        <input type="text" name="contact">
                    </td>
                </tr>
                <tr>
                        <td>
                            Hobby: 
                        </td>
                        <td>
                            <input type="checkbox" value="travelling" name="hobby[]">Travelling
                            <input type="checkbox" value="cricket" name="hobby[]">Cricket
                            <input type="checkbox" value="reading"  name="hobby[]">Reading
                        </td>
                </tr>
                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male    
                        <input type="radio" name="gender" value="female"> Female    
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
                    <td><input type="submit" name="submit"></td>
                </tr>

            </table>
        </form> 

     
        



             
</body>
</html>
<br>

