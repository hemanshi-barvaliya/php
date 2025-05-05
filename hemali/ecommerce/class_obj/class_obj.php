<?php 


	class Demo
	{
		public $a=100;

		function __construct()
		{
			$this->a=500;
			echo "This is Constructor= $this->a <br> ";
		}

		function Fun($a,$b=10)
		{
			echo "THis is a class method";
			echo "<br>A = $a";
			echo "<br>B = $b";
			return $a+$b;
		}
	}


$obj = new Demo();
$x=10;
$ans=$obj->Fun($x,50);

echo "<br>Ans = $ans";

 ?>