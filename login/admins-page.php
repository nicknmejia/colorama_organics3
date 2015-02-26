<?php
function isLoggedIn()
{
    if(isset($_SESSION['valid']) && $_SESSION['valid'])
	{
		if($_SESSION['admin'] == 1)
        {return true;}
		else{return false;}
	}
    else{return false;}
}
function logout()
{
    $_SESSION = array(); //destroy all of the session variables
    session_destroy();
}
session_start();
?>