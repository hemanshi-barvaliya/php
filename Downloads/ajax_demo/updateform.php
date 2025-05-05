<?php 

$con = mysqli_connect('localhost','root','','ajax_demo');

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$selsql = "select * from user where id=$id";
	$data = mysqli_query($con,$selsql);
	$row = mysqli_fetch_assoc($data);

}

?>

<form method="post" id="updateform">
	
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
						<input type="text" name="name" readonly value="<?php echo $row['name']; ?>">
					</td>
				</tr>
				<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact" value=<?php echo $row['contact']; ?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=<?php echo $row['email']; ?>></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value=<?php echo $row['password']; ?>></td>
			</tr>
			<tr>
				<td>Hobby:</td>
				<td>
					<input type="checkbox" value="travelling" name="hobby[]" <?php if (in_array('travelling', explode(',', $row['hobby']))) echo 'checked'; ?>> Travelling
                    <input type="checkbox" value="cricket" name="hobby[]" <?php if (in_array('cricket', explode(',', $row['hobby']))) echo 'checked'; ?>> Cricket
                    <input type="checkbox" value="reading" name="hobby[]" <?php if (in_array('reading', explode(',', $row['hobby']))) echo 'checked'; ?>> Reading
					<input type="checkbox" name="hobby[]" 
					 <?php if (in_array('camping', explode(',', $row['hobby']))) echo 'checked'; ?>> camping
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
                        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male    
                        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female     
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
				<td>Image</td>
				<td><input type="file" name="image"></td>
			</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="update" value="Update User" data-bs-dismiss="modal">
					</td>
				</tr>
			</table>

		</form>