<?php
//if the user has not logged in
if(!isLoggedIn())
{
	header('Location: ' . $path . 'dashboard.php');
}
?>