<?php 


class Query
{
	public $connect;
	function __construct()
	{
		$this->connect = mysqli_connect("localhost","root","","ecom");
	}


	function insert($tbl_name,$arr)
	{

		array_pop($arr);
		$keys = implode(',', array_keys($arr)) ;

		$values = array_values($arr);

		// print_r($values);

		$ans="";
		foreach ($values as $key => $value) {
			

			if(is_array($value))
			{
				$value = implode(',',$value);
			}
			$ans.= "'".$value."'," ;

		}

		$ans = substr($ans, 0,strlen($ans)-1);

		mysqli_query($this->connect,"insert into $tbl_name ($keys) values ($ans)");

	}
}


$db = new Query();

// $arr = array("name" => "abc", "email"=>"abc@gmail.com", "password"=> "123");

// $db->insert("data",$arr);


 ?>


