<?php 
	
	define("HOSTNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DATABASE", "project2");


	$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	session_start();

 ?>