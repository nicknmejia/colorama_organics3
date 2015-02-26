<?php 
function Items($table, $name)
{
	try {
	  # MySQL with PDO_MYSQL
	  $DBH = new PDO("mysql:host=" . HOST . ";dbname=" . DB . "", USER, PASS);
	  $query = $DBH->query('SELECT * FROM ' . $table . ' WHERE avail != 0');
	  $query->setFetchMode(PDO::FETCH_ASSOC);
	  echo "
	    <div class='row panel'>
	    <div id='$table'>$name</div>
	  	<table id='$table-click' class='table'>
		  <thead>
		    <tr>
		      <th width='650'>Item</th>
		      <th width='175'>Rating</th>
		      <th width='175'>Qty</th>
		    </tr>
		  </thead>
		  <tbody>
		";

	  while($row = $query->fetch()) {
	    echo "<tr><td>" . $row['item_name'] . "</td>";
	    echo "<td>" . $row['id'] . "</td>";
	    echo "<td><input type='number' name='" . $table . $row['id'] . "'></td></tr>";
	    array_push($_SESSION['items'], $table . $row['id']);
		}

	  echo "
	  	</tbody>
		</table>
		</div>
		";

	}
	catch(PDOException $e) {
	    echo $e->getMessage();
	}



	# close the connection
	$DBH = null;
}

?>