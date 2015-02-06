<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../../inc/header.php'); 
include('../../ctrl/orderController.php');
?>
<form action="confirm.php" method="post">
<div class="row">
	<div class="panel">
		<div class="row">
			<div class="large-12 columns margin_push_bot">
				<span>Please fill out the following information:</span>
			</div>
		</div>
		<div class="row">
			<div class="large-3 columns">
				<input type="text" placeholder="First Name" name="f_name">
				<input type="text" placeholder="Last Name" name="l_name">
				<input type="text" placeholder="Email" name="email">
			</div>
			<div class="large-3 columns">
				<input type="text" placeholder="Store Name" name="s_name">
				<input type="text" placeholder="Store Number" name="s_num">
		        <select name="territory">
		          <option value="fail">Select Territory</option>
		          <option value="south">South</option>
		          <option value="north">North</option>
		          <option value="napa">Napa/Sonoma</option>
		        </select>

			</div>
			<div class="large-3 columns">
				<input type="text" id="datepicker" placeholder="Date" name="date" id="date">
			</div>
			<div class="large-3 columns">
				<textarea placeholder="Special Instructions" name="s_instruct" id="s_instruct"></textarea>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<span>Please click/tap the category you need to order from:</span>
		  	<?php

		  		$order = new Order();
		  		$order->GenerateForm('small_herb', '3.5" Herbs');
		  		$order->GenerateForm('big_herb', 'Quart Herbs');
		  		$order->GenerateForm('small_veg', '806 Pak Veg');
		  		$order->GenerateForm('big_veg', '4" Veg');
		  		$order->GenerateForm('gal_veg', 'Gallon Veg');
		  		$order->GenerateForm('gal_herb', 'Gallon Herb');
		  		$order->GenerateForm('2gal_veg', '2 Gallon Veg');

		  	?>
</div>

<div class="row centered">
	<input type="submit">
</div>
</form>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>

<?php include('../../inc/footer.php') ?>