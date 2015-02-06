<?php 
include('../../inc/db.php');
include('../../models/Items.php');
include('../../models/TempOrder.php');
class Order{

	public function GenerateForm($table, $name)
	{
		Items($table, $name);
	}

	public function SubmitOrderTemp()
	{
			$order_id;
		//1. Gather order information
			$info_key = ['f_name','l_name','email','s_name','s_num','territory','date','s_instruct'];
			$order_info = [];
			foreach ($info_key as $key => $value) {
				array_push($order_info, $_POST[$value]);
			}
		//2. Create temporary order in DB & select auto increment ID

			CreateTempOrder($order_info);
			$id = $pdo->lastInsertId();
		//3. Select Items from each category

		//4. Use previous query to select all item input

		//5. Deposit input to temporary product database

		//6. Return data to confirm.php page and display to user

	}

	public function SubmitOrder()
	{

	}
}

 ?>