<?php include('../../inc/header.php') ?>
	
<div class="row">
	<div class="panel">
		<div class="row">
			<div class="large-12 columns margin_push_bot">
				<span>Please fill out the following information:</span>
			</div>
		</div>
		<div class="row">
			<div class="large-3 columns">
				<input type="text" placeholder="First Name">
				<input type="text" placeholder="Last Name">
				<input type="text" placeholder="Email">
			</div>
			<div class="large-3 columns">
				<input type="text" placeholder="Store Name">
				<input type="text" placeholder="Store Number">
		        <select>
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
				<textarea placeholder="Special Instructions" name="sinstruct" id="sinstruct"></textarea>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<span>Please click/tap the category you need to order from:</span>
		<table>
		  <thead>
		    <tr>
		      <th width="650">Item</th>
		      <th width="175">Rating</th>
		      <th width="175">Qty</th>
		    </tr>
		  </thead>
		  
</div>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>

<?php include('../../inc/footer.php') ?>