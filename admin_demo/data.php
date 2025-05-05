<?php

     //    session_start();

     // include_once 'db.php';


     //    if(isset($_POST['submit']))
     //    {
     //        $email = $_POST['email'];
     //        $password = $_POST['password'];

          
     //      $query = "INSERT INTO `data` (`email`,`password`) VALUES ('$email','$password')";

     //      mysqli_query($con, $query);
     //    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
        <title>user</title>
    </head>
    <body>
        <table id="myTable" class="display" border="1">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    </body>
</html>