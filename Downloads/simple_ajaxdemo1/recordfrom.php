<?php

if(isset($_POST['name']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];

	 echo "name:".$name.'<br>email:'.$email;
	// echo '<h2>Name = '.$name.'<br>Email = '.$email;
}


?>