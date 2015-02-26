<?php 

$_SESSION['items'] = [];
$path = "../../";
include('../../inc/header.php');
include('../../login/member-only.php');
include('../../ctrl/orderController.php');
$order_temp = new Order();
$order_temp->SubmitOrderTemp();
?>
	

<?php include('../../inc/footer.php') ?>