<?php

class query
	{
		public  $connect;
		function __construct()
		{

			$this->connect=mysqli_connect("localhost","root","","ecom");
		}

		function insert($table,$array)
		{
			$keys = implode(',', array_keys($array));

			$values= array_values($array);

			$result="";

			foreach ($values as $key => $value) 
			{

				if (is_array($value)) 
				{
					$value = implode(',',$value);
				}
				$result.="'".$value."',";

			}

			$result = substr($result,0 , strlen($result)-1); 
			// echo "insert into $table($keys) values ($result)";    --> for printing query
			mysqli_query($this->connect,"insert into $table ($keys) values ($result)");
			// mysqli_query($this->connect,"insert into $tbl_name ($keys) values ($ans)");
		}

		function select($table)
		{
			$select = "select * from $table";

			$res_sel = mysqli_query($this->connect, $select);

			return $res_sel; // to return selected data in form file
		}

		function update($table,$array,$id = null)
		{
			// $set=[];
			// foreach ($array as $key => $value) 
			// {
			// 	$set = "$key = '".mysqli_real_escape_string(this->connect,$value)."'";
			// }

			// $setstring = implode(",", $set);

			// $sel_update = "update $table set $setstring where $condition";

			// $update = mysqli_query(this->connect,$sel_update);

			if ($id) 
			{
				$str="";
				foreach($array as $key => $value)
				{
					if(is_array($value))
					{
						$value=implode(",",$value);
					}
					$str .= "$key='$value',";
				}

				$str = substr($str,0 , strlen($str)-1);  // TO REMOVE LAST COMMA FROM STRING
				mysqli_query($this->connect,"update $table set $str where id=$id");
			}
			else
			{
				echo "Error: No ID provided for update.";
			}
		}

    	function delete($table,$id)
		{
			$delete = "delete from function where id=$id";
			mysqli_query($this->connect,$delete);

 		}

	}

	$db = new query();
	 



 ?>