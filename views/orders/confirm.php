<?php include('../../inc/header.php');
include('../../ctrl/orderController.php');
$order_temp = new Order();

var_dump($order_temp->SubmitOrderTemp());
?>
	

<?php include('../../inc/footer.php') ?>