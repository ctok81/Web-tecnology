<?php

class Model_Zakaz extends Model
{

	public function get_data()
	{
			$con = mysqli_connect("127.0.0.1","Admin","963258741","Web-tech");
			if(mysqli_multi_query($con,"SELECT name FROM Group_Services WHERE 1"))
			{
				do
				{
					if($result = $con->use_result())
					{
						while($row = $result->fetch_row())
						{
								$array[] = $row[0];
						}
					}
				}
				while (mysqli_more_results($con));
			}
			return $array;

	}

	public function set_data($number, $fio, $chto)
	{
		$con = mysqli_connect("127.0.0.1","Admin","963258741","Web-tech");
	  mysqli_query($con, "INSERT INTO `client` VALUES(default, $number, '$fio', '$chto')");
	}
}
