

<?php 


include_once 'query.php';

if(isset($_POST['submit']))
{

	$db->insert("data",$_POST);

}


 ?>



<form method="POST">
	
	<input type="text" name="name"><br>
	<input type="email" name="email"><br>
	<input type="password" name="password"><br>
	<input type="checkbox" name="hobby[]" value="aa">aa
	<input type="checkbox" name="hobby[]" value="bb">bb
	<input type="checkbox" name="hobby[]" value="cc">cc
	<input type="checkbox" name="hobby[]" value="dd">dd

	<input type="submit" name="submit">


</form>