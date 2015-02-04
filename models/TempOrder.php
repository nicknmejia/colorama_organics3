<?php 
include('../../inc/db.php');

function CreateTempOrder($array)
{
	try {
	  # MySQL with PDO_MYSQL
	  $DBH = new PDO("mysql:host=" . HOST . ";dbname=" . DB . "", USER, PASS);
	  $STH = $DBH->prepare("INSERT INTO orders_temp ( f_name, l_name, email, s_name, s_num, territory, date, s_instruct) 
	  										 values ( $array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7],  )");)

	  

	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}



	# close the connection
	$DBH = null;
}


 ?>