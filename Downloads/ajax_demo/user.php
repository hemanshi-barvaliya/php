<?php 

$con = mysqli_connect('localhost','root','','ajax_demo');

$user_qry = "select * from data";
$data_sql = mysqli_query($con,$user_qry);


?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">

<form method="post" id="userform">
	
	<table>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username" placeholder="Enter username">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="email" placeholder="Enter email">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" placeholder="Enter password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="add" value="Add User">
			</td>
		</tr>
	</table>

</form>

<hr>

<table>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<tbody id="userdata">
		<?php $cnt = 1; while ($data = mysqli_fetch_assoc($data_sql)) { ?>
			<tr>
				<td><?php echo $cnt++; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><button type="button" class="btn btn-primary btnupdate" data-bs-toggle="modal" data-bs-target="#exampleModal" uid="<?php echo $data['id']; ?>">Update</button></td>
				<td><button class="btndelete" did="<?php echo $data['id']; ?>">Delete</button></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<!-- Modal -->
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

<script>
	$(document).on('submit','#userform',function(e){
		var frm = $(this).serialize();
		// console.log(data);
		e.preventDefault() // form not refresh using this function
		$.ajax({
			method:'post',
			url:'formajaxdata.php',
			data: frm,

			success:function(response){
				$('#userdata').html(response)
			}
		})
		$(this)[0].reset(); 
	})

	$(document).on('click','.btndelete',function(){
		var id = $(this).attr('did');
		// alert(id)
		$.ajax({
			method:'get',
			url:'formajaxdata.php',
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
			url:'formajaxdata.php',
			data: frm,

			success:function(response){
				$('#userdata').html(response)
			}
		})
	})
</script>