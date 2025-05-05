<?php
$con = mysqli_connect('localhost', 'root', '', 'ajax_demo');


$query = "SELECT * FROM user1";
$data = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form method="post" id="userform">
        <table>
            <tr>
                <td>name:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>password</td>
            <td>Update</td>
            <td>delete</td>
        </tr>
        <tbody id="userdata">
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><button class="btndelete" did="<?php echo $row['id']; ?>">delete</button></td>

								

            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        $(document).on('submit', '#userform', function (e) {
            var frm = $(this).serialize();

            e.preventDefault();

            $.ajax({
                method: 'POST',
                url: 'formajaxdata.php',
                data: frm,
              
                 success: function (response) 
                 {
                  $('#userdata').html(response); 
                 }
            });

            $(this)[0].reset(); // Reset the form
        });

        $(document).on('click','.btndelete',function(){
         

        	var id = $(this).attr('did');

        	$.ajax({

        		method:'GET',
        		 url: 'formajaxdata.php',
            data: {'id':id },

            success:function(response)
            {
            	$('#userdata').html(response)
            }        	
        })
      })
    </script>
</body>
</html>
