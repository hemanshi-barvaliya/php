<?php

		include_once 'db.php';

	$user_qry = "select * from book";
$data_sql = mysqli_query($con, $user_qry);


?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" id="userform">

		<table>
		
			<tr>
				<td>Name:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Hobby:</td>
				<td>
					<input type="checkbox" name="hobby[]" value="travelling">travelling
					<input type="checkbox" name="hobby[]" value="reading">reading
					<input type="checkbox" name="hobby[]" value="cricket">cricket
					<input type="checkbox" name="hobby[]" value="camping">camping
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male">male
					<input type="radio" name="gender" value="female">female
				</td>
			</tr>
			<tr>
				<td>City:</td>
				<td>
					<select name="city">
						<option>---city----</option>
						<option value="Surat">Surat</option>
						<option value="Navsari">Navsari</option>
						<option value="Rajkot">Rajkot</option>
					</select>
				<td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

		</table>
	</form>
<table border="1">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>contact</td>
			<td>email</td>
			<td>password</td>
			<td>hooby</td>
			<td>gender</td>
			<td>city</td>
			
		</tr>
		<tbody id="userdata">
			<?php while ($row = mysqli_fetch_assoc($data_sql)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['hobby']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><button type="button" class="btn btn-primary btnupdate" data-bs-toggle="modal" data-bs-target="#exampleModal" uid="<?php echo $row['id']; ?>">Update</button></td>
        <td><button class="btndelete" did="<?php echo $row['id']; ?>">Delete</button></td>
    </tr>
<?php } ?>

		</tbody>
	</table>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update User Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="formdata">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>

	<script type="text/javascript">
	$(document).on('submit','#userform',function(e){
		var frm = $(this).serialize();
		// console.log(data);
		e.preventDefault() 
		$.ajax({
			method:'post',
			url:'query.php',
			data: frm,

			success:function(response){
				$('#userdata').html(response)
			}
		})
		$(this)[0].reset(); // clear form data using this function
	})
		$(document).on('click','.btndelete',function(){
		var id = $(this).attr('did');
		// alert(id)
		$.ajax({
			method:'get',
			url:'query.php',
			data:{'id':id},

			success:function(response){
				$('#userdata').html(response)
			}
		})
	})

	$(document).on('click','.btnupdate',function() {
		var id = $(this).attr('uid');
		$.ajax({
			method:'get',
			url:'updateform.php',
			data: {'id':id},

			success:function(response){
				$('#formdata').html(response)
			}
		})
	})

	$(document).on('submit','#updateform',function(e){
		var frm = $(this).serialize();
		// console.log(frm);
		e.preventDefault()
		$.ajax({
			method:'POST',
			url:'query.php',
			data: frm,

			success:function(response){
				$('#userdata').html(response)
			}
		})
	})
	</script>

	



