<?php 

include_once 'db.php';

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$selsql = "select * from book where id=$id";
	$data = mysqli_query($con,$selsql);
	$rec = mysqli_fetch_assoc($data);

}

?>

<form method="post" id="updateform">
	
			<table>
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $rec['id']; ?>" >
						<input type="text" name="name" readonly value="<?php echo $rec['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>contact</td>
					<td>
						<input type="contact" name="contact" placeholder="Enter contact" value="<?php echo $rec['contact']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" name="email" placeholder="Enter email" value="<?php echo $rec['email']; ?>">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" placeholder="Enter password" value="<?php echo $rec['password']; ?>">
					</td>
				</tr>
									<tr>
				<td>Hobby:</td>
				<td>
					<input type="checkbox" value="travelling" name="hobby[]" <?php if (in_array('travelling', explode(',', $rec['hobby']))) echo 'checked'; ?>> Travelling
                    <input type="checkbox" value="cricket" name="hobby[]" <?php if (in_array('cricket', explode(',', $rec['hobby']))) echo 'checked'; ?>> Cricket
                    <input type="checkbox" value="reading" name="hobby[]" <?php if (in_array('reading', explode(',', $rec['hobby']))) echo 'checked'; ?>> Reading
					<input type="checkbox" name="hobby[]" 
					 <?php if (in_array('camping', explode(',', $rec['hobby']))) echo 'checked'; ?>> camping
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
                        <input type="radio" name="gender" value="male" <?php if ($rec['gender'] == 'male') echo 'checked'; ?>> male    
                        <input type="radio" name="gender" value="female" <?php if ($rec['gender'] == 'female') echo 'checked'; ?>> female     
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
					<td colspan="2">
						<input type="submit" name="update" value="Update User" data-bs-dismiss="modal">
					</td>
				</tr>

			</table>

		</form>