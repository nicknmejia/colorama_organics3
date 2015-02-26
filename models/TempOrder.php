<?php 
function CreateTempOrder($array)
{
	try {
	  # MySQL with PDO_MYSQL
	  $DBH = new PDO("mysql:host=" . HOST . ";dbname=" . DB . "", USER, PASS);
	  $STH = $DBH->prepare("INSERT INTO orders_temp ( f_name, l_name, email, s_name, s_num, territory, ship_date, s_instruct, order_date) values ( ?,?,?,?,?,?,?,?,?)");
	  $STH->execute($array);
	  $_SESSION['o_id'] = $DBH->lastInsertId();
	  $DBH = null;

	}
	catch(PDOException $e) {
	    echo $e->getMessage() . "<br/><br/>Something Broke";
	}
}

