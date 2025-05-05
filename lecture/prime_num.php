<?php

	$count = 0;
	$n=5;

	for($i=1; $i<=$n; $i++)
	{
		if($n%$i==0)
		{
			$count++;
		}
	}

	if($count==2)
	{
		echo "prime number";
	}
	else
	{
		echo "not prime";
	}


?>
