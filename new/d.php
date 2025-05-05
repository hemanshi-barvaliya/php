<?php 

class demo 
{
	function get_data($a,$b=0){
		echo $a."<br>".$b;
	}	
}

$db  = new demo();

$db->get_data(10);

 ?>