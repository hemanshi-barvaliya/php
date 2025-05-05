<?php 


include_once 'query_demo.php';


if (isset($_GET['u_id']))  //for update query
	{
		$u_id = $_GET['u_id'];
		$sel_update = "select * from function where id =$u_id";
		$select = mysqli_query($db->connect,$sel_update);
		$sel_data = mysqli_fetch_assoc($select);
		$hobby_arr = explode(",", $sel_data["hobby"]); //to convert hobby array into string
	}

if(isset($_POST['submit']))  //for insert query
{

	unset($_POST['submit']);
	if (isset($_GET['u_id']))  //for update query
	{
		$db->update("function",$_POST,$_GET['u_id']);
	}
	else
	{		
		$db->insert("function",$_POST);
	
	}	
	header("location:form_demo.php");

}

$res_sel = $db->select("function"); // for select and print query (from query file)

if (isset($_GET['d_id']))
{
	    $db->delete("function",$_GET['d_id']);
	header("location:form_demo.php");
	    
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <form method="POST" datatype="multipart/form-data">
        <table align="center" border="2" cellpadding="5px" cellspacing="0px">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo @$sel_data['name'];  ?>"></td>
            </tr>
            <tr>
                <td>Education</td>
                <td>
                    <select name="education">
                        <option selected>Select Qualification</option>
                        <option value="S.S.C." <?php  if(@$sel_data['education']=="S.S.C.") {echo "selected";} ?>>S.S.C.
                        </option>
                        <!-- //@ IN PLACE OF ISSET -->
                        <option value="H.S.C." <?php  if(@$sel_data['education']=="H.S.C.") {echo "selected";} ?>>H.S.C.
                        </option>
                        <option value="Graduate" <?php  if(@$sel_data['education']=="Graduate") {echo "selected";} ?>>
                            Graduate</option>
                        <option value="Post-graduate"
                            <?php  if(@$sel_data['education']=="Post-graduate") {echo "selected";}  ?>>Post-graduate
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Birth date</td>
                <td><input type="date" name="dob" value="<?php echo @$sel_data['dob']; ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" value="<?php echo @$sel_data['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo @$sel_data['password']; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="female"
                        <?php  if(@$sel_data['gender']=="female") {echo "checked";} ?>>Female
                    <input type="radio" name="gender" value="male"
                        <?php  if(@$sel_data['gender']=="male") {echo "checked";} ?>>Male
                    <input type="radio" name="gender" value="other"
                        <?php  if(@$sel_data['gender']=="other") {echo "checked";} ?>>Other
                </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="reading"
                        <?php if (isset($_GET['u_id'])) {if(in_array("reading", $hobby_arr)) {echo "checked";}}?>>Reading
                    <input type="checkbox" name="hobby[]" value="singing"
                        <?php if (isset($_GET['u_id'])) {if(in_array("singing", $hobby_arr)) {echo "checked";}}?>>Singing
                    <input type="checkbox" name="hobby[]" value="dancing"
                        <?php if (isset($_GET['u_id'])) {if(in_array("dancing", $hobby_arr)) {echo "checked";}}?>>Dancing
                    <input type="checkbox" name="hobby[]" value="cricket"
                        <?php if (isset($_GET['u_id'])) {if(in_array("cricket", $hobby_arr)) {echo "checked";}}?>>Cricket
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>


    <table align="center" border="2" cellpadding="5px" cellspacing="0px">
        <tr>
            <td>ID </td>
            <td>Name </td>
            <td>Education </td>
            <td>Birth Date</td>
            <td>Email </td>
            <td>Password </td>
            <td>Gender </td>
            <td>Hobby </td>
            <td>Update </td>
            <td>Delete </td>
        </tr>
        <?php while ($sel_result=mysqli_fetch_assoc($res_sel)) {?>
        <tr>
            <td><?php echo $sel_result['id']; ?></td>
            <td><?php echo $sel_result['name']; ?></td>
            <td><?php echo $sel_result['education']; ?></td>
            <td><?php echo $sel_result['dob']; ?></td>
            <td><?php echo $sel_result['email']; ?></td>
            <td><?php echo $sel_result['password']; ?></td>
            <td><?php echo $sel_result['gender']; ?></td>
            <td><?php echo $sel_result['hobby']; ?></td>
            <td><a href="form_demo.php?u_id=<?php echo $sel_result['id']; ?>">Update</a></td>
            <td><a href="form_demo.php?d_id=<?php echo $sel_result['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <?php mysqli_free_result($res_sel); ?>
    <!-- // to free result from qurey(select query) -->
</body>

</html>