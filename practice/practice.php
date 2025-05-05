
<?php 

        $con = mysqli_connect("localhost", "root","","fristdb");

        
    
        if(isset($_POST['submit']))
        {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $gender = $_POST['gender'];
            $hoby_str = implode(",", $_POST['hobby']);
            $city = $_POST['city'];
            $image = $_FILES['image']['name'];

            $path ="image/".$image;

            // move_uploaded_file($_FILES['image']['temp_name'],$path);
            move_uploaded_file($_FILES['image']['tmp_name'], $path);


             $ins = "insert into user1(`name`,`email`,`password`,`contact`,`hobby`,`gender`,`city`,`image`)values('$name','$email','$password','$contact','$hoby_str','$gender','$city','$image')"; // insert data

             mysqli_query($con,$ins); // insert data

        }

        //Pagination variable
            $limit = 5;

            if(isset($_GET['pageno']))
            {
                $pageno = $_GET['pageno'];
            }
            else
            {
                $pageno = 1;
            }

            //Starting value
            $start = $limit * ($pageno-1);

            //Count record
            $total_record_query = mysqli_query($con, "select * from user1");

            $total_record = mysqli_num_rows($total_record_query);

            //Count page;
            $total_page = ceil($total_record / $limit);

            if(isset($_GET['srch']))
            {
                $srch = $_GET['srch'];
            }
            else
            {
                $srch = " ";
            }

           

             $sel = "select * from user1 limit $start, $limit" ; // select all data
             $data = mysqli_query($con,$sel); // select data query

       
       if(isset($_GET['id']))
       {

        $id = $_GET['id'];

        $del = "DELETE FROM `user1` WHERE id = '$id'"; //delete data

        mysqli_query($con, $del);  //delete data

        header("loction:practice.php"); // page location 
       }

                  
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user1</title>
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

        <form method="GET">
            <table>
                <tr>
                    <td>Search Record:</td>
                    <td><input type="text" name="srch"></td>
                    <td><input type="submit" value="search"></td>
                </tr>
            </table>
        </form>
        




     <table border="">
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Hobby</th>
                <th>Gender</th>
                <th>city</th>
                <th>Image</th>
                <th>Delete</th>

                <?php while($row = mysqli_fetch_assoc($data)) {?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['hobby'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['city'];?></td>
                <td> <img src="image/<?php echo $row['image'];?>" width="100px" height="100px"></td>
                <td><a href="practice.php?id=<?php echo $row['id'];?>">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
             </tr>
                 <?php } ?>
               
            
        </table>   
        <?php
            if($pageno > 1)
            {
                echo '<a href="practice.php?pageno='.($pageno-1).'">previous</a>';    
            }
        ?>

        <?php for($i=1;$i<=$total_page;$i++){ ?>
        
            <a href="practice.php?pageno=<?php echo $i; ?>"> <?php echo $i; ?></a> 

        <?php } ?>
        <?php
            if($total_page > $pageno)
            {   
            echo '<a href="practice.php?pageno='.($pageno+1).'">Next</a>';
            }
            ?>

             
</body>
</html>
<br>

