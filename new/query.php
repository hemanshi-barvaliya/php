<?php 

	include_once 'config.php';

	
	class database 
	{
		public $con;
		function __construct()
		{
			 $this->con(HOSTNAME,USERNAME,PASSWORD,DATABASE);
		}

		function Insert($tbl_name,$arr)
		{
			array_pop($arr);
			 $column = implode(',', array_keys($arr));
			 $value = array_values($arr);
			 $v = "" ;

				  foreach ($value as  $value) {
				  	 $v .="'".$value."',";
				  }
				  $v = substr($v,0,strlen($v)-1);

				mysqli_query($this->con, "INSERT INTO $tbl_name ($column) VALUES ($v)");
		}
	}

 ?>