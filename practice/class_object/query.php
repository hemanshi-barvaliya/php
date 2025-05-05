<?php 

include_once 'db.php';

class database
{
	public $con;

	function __construct()
	{
		$this->con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
	}

	public function Insert($tbl_name, $arr)
	{
		array_pop($arr);
		$column_name = implode(',', array_keys($arr));
		$value = "'".implode("','",array_values($arr))."'";

		mysqli_query($this->con, "insert into $tbl_name($column_name)value($value)");


	}
	public function select($tbl_name, $arr)
	{
		array_pop($arr);
		$column_name = implode(',', array_keys($arr));
		$value = "'".implode("','",array_values($arr))."'";

		mysqli_query($this->con, "select * from $tbl_name";

			$result = mysql_query($sql);
			$assoc_query = mysql_fetch_assoc($result);

	}
}
	$db = new database();


 ?>