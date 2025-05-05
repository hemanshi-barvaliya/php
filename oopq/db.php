<?php 

include_once 'config.php';

class databse 
{
	public $con;

	function __construct()
	{
		$this->con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
	}

	function Insert($tbl_name,$arr)
	{
		array_pop($arr);

		$column = implode(',',array_keys($arr));
		$values = array_values($arr);
		$v = "";

		foreach ($values as $value) 
		{
			$v .= "'".$value."',";
		}

		$v = substr($v,0,strlen($v)-1);
	
		mysqli_query($this->con,"insert into $tbl_name($column)values($v)");

	}

	function select($tbl_name,$arr=0)
	{
		$query = "";

		if(is_array($arr))
		{
			foreach ($arr as $key => $value) {

				if (!is_array($value)) {
					$query .= "where ".$key."='".$value."'";
				}
			}
		}

		$data = mysqli_query($this->con,"select * from tbl_name $query");
		
		if (is_array($arr)) {
			$row = mysqli_fetch_assoc($data);
			return $row;
		}else{
			return $data;
		}
	}

	function delete($tbl_name,$arr)
	{

		$query = "";

		foreach ($arr as $key => $value) {

			if (!is_array($value)) {
				$query .= $key."='".$value."'";
			}else{

				foreach ($value as $key => $v) {
					$query .= " ".$key."='".$v."'";
				}
			}
		}
		mysqli_query($this->con,"delete from $tbl_name where $query");
	}

	function update($tbl_name,$arr)
	{

		$query = "";
		foreach ($arr as $key => $value) {
	
			if (!is_array($value)) {
				$query .= $key."='".$value."',";
			}
			else
			{
				$query = substr($query,0,strlen($query)-1);

				foreach ($value as $key => $val) {
					
					$query .= " ".$key."='".$val."',";
				}

			}
		}
				$query = substr($query,0,strlen($query)-1);
				// echo "update $tbl_name set $query";
		mysqli_query($this->con,"update $tbl_name set $query");
	}
}

$db = new databse;

 ?>