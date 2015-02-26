<?php
//if the user has not logged in
if(!isLoggedIn())
{
	header('Location: ' . $path . 'dashboard.php?fail=You need to login or need to acquire access.');
}
?>