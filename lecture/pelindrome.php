<?php

$p = 0;
$n = 121;

 $temp= $n;

 while ($n>0) 
 {
 	
 	$i = $n % 10;
 	$P = ($p * 10) + $i ;
 	$n = $n / 10;
 }

 	if($p==$temp)
 	{
 		echo "palindrome";
 	}
 	else
 	{
 		echo " Not palindrome";
 	}

?>