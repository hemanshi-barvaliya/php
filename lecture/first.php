<?php

// $p = 0;
// $n = 111;

//  $temp= $n;

//  while ($n) 
//  {
 	
//  	$i = $n % 10;
//  	$P =($p * 10) + $i ;
//  	$n = $n /10;
//  }

//  	if($p==$temp)
//  	{
//  		echo "pelindrome";
//  	}
//  	else
//  	{
//  		echo " Not pelindrome";
//  	}


// $nam = array("one","two","three","four","fifth");

// echo($nam[0]);

// foreach ($nam as $ky => $pt) {
// 	echo $ky.":".$pt;
// }

	// for ($i=0; $i <count($nam) ; $i++) { 
		
	// 	echo "$nam[$i]";
	// }

// $name=Array(array("1","Ravi"), array("2","Raj"));
// echo "<br>".$name[0][0];

function a()
{ 
	$num=func_num_args();

	$array=func_get_args();
	
for($i=0; $i<$num; $i++)
{ 
	echo $array[$i];
}
} a(40,50,60); 












?>
