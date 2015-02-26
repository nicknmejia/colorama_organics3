<?php 
include('../../inc/db.php');
include('../../models/Items.php');
include('../../models/TempOrder.php');
class Order{

	private function array_push_assoc($array, $key, $value)
	{
		$array[$key] = $value;
		return $array;
	}

	public function GenerateForm($table, $name)
	{
		Items($table, $name);
	}

	public function SubmitOrderTemp()
	{
		//1. Gather order information
			$info_key = ['f_name','l_name','email','s_name','s_num','territory','date','s_instruct'];
			$order_info = [];
			foreach ($info_key as $key => $value) {
				array_push($order_info, $_POST[$value]);
			}
			array_push($order_info, date("m/d/Y h:i"));
		//2.1 Create temporary order in DB & select auto increment ID
		//2.2 Select Items from each category
			CreateTempOrder($order_info);
			$temp_items = [];
			foreach ($_SESSION['items'] as $key => $value) {
				if($_POST[$value] != 0)
				{
					$temp_items = $this->array_push_assoc($temp_items, $value, $_POST[$value]);
				}
			}
			var_dump($temp_items);



		

		//4. Use previous query to select all item input

		//5. Deposit input to temporary product database

		//6. Return data to confirm.php page and display to user

	}

	public function SubmitOrder()
	{

	}
}

 ?>