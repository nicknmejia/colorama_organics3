<?php include('../../inc/header.php');
include('../../ctrl/orderController.php');
$order_temp = new Order();
$order_temp->SubmitOrderTemp();
?>
	

<?php include('../../inc/footer.php') ?>