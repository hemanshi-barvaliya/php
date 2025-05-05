<?php

    $con = mysqli_connect("localhost","root","","fristdb");

   if(isset($_POST['submit']))
   {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $hoby= $_POST['hobby'];
        $hoby_str = implode(",",$hoby);
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $image = $_FILES['image']['name'];

        $path ="image/".$image;

           
        move_uploaded_file($_FILES['image']['tmp_name'], $path);

        $inst = "insert into user2(`name`,`email`,`password`,`contact`,`hobby`,`gender`,`city`,`image`)values('$name','$email','$password','$contact','$hoby_str','$gender','$city','$image')";


        mysqli_query($con,$inst);

   }

        if(isset($_GET['srch'])){

            $srch = $_GET['srch'];
        }
        else
        {
            $srch =" ";
        }


        //pagination

        $limit = 4;

        if(isset($_GET['pageno']))
        {
            $pageno = $_GET['pageno'];
        }
        else
        {
            $pageno = 1;
        }

        //starting value

         $start = $limit * ($pageno-1);
            
            


         //count record
         $total_record_query = mysqli_query($con , "select * from user2");

         $total_record = mysqli_num_rows($total_record_query);


         //count page

         $total_page = ceil($total_record / $limit);





        $sel = "select * from user2 limit $start,$limit";

        //$sel = "SELECT * FROM user2 WHERE name like '%$srch%'";

        $data = mysqli_query($con,$sel);



        if(isset($_GET['id']))
        {
            $id = $_GET['id'];

            $del = "DELETE FROM user2 WHERE id ='$id'";

            mysqli_query($con,$del);

            header("loction:demo.php");

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
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td><input type="password" name="password"></td>
             </tr>
             <tr>
                 <td>Contact</td>
                 <td><input type="text" name="contact"></td>
             </tr>
             <tr>
                 <td>Hobby</td>
                 <td>
                    <input type="checkbox" name="hobby[]" value="traveling">traveling
                    <input type="checkbox" name="hobby[]" value="cricket">cricket
                    <input type="checkbox" name="hobby[]" value="dancing">dancing
                    <input type="checkbox" name="hobby[]" value="reading">reading
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
                 <td>City</td>
                 <td>
                    <select name="city">
                        <option>-----Select-------</option>
                        <option>surat</option>
                        <option>navsari</option>
                        <option>rajkot</option>
                        <option>ahemdabad</option>
                    </select>
                 </td>
             </tr>
            <tr>
                   <td>Image</td>
                   <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>

    </form>

<br>
<br>

    <form method="GET">

        <table>
            <tr>
                <td>Search Record:</td>
                <td><input type="text" name="srch"></td>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
        
    </form>
<br>
<br>

    <table border="">

        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Contact</td>
            <td>Hobby</td>
            <td>Gender</td>
            <td>City</td>
            <td>image</td>
            <td>Delete</td>

        </tr>
        <?php 
        while($row = mysqli_fetch_assoc($data)) {?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['hobby']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td> <img src="image/<?php echo $row['image'];?>" width="100px" height="100px"></td>       
                <td><a href="demo.php? id= <?php $row['id'];?>">Delete</td>              
            </tr>
        <?php } ?>
    </table>

    <?php

    if($pageno > 1)
    {
        echo '<a href="demo.php?pageno='.($pageno-1).'">Previous</a>';
    }
    ?>

   
    <?php for($i=1; $i<=$total_page; $i++){?>
        <a href="demo.php?pageno=<?php echo $i; ?>"> <?php echo $i; ?>
            
        </a>
    <?php }?>
     <?php

    if($total_page > $pageno)
    {
        echo '<a href="demo.php?pageno='.($pageno+1).'">Next</a>';
    }
    ?>
    


</body>
</html>