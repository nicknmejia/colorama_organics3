<?php
function logout()
{
    $_SESSION = array(); //destroy all of the session variables
    session_destroy();
}
function isLoggedIn()
{
    if(isset($_SESSION['valid']) && $_SESSION['valid'])
        return true;
    return false;
}

session_start();
//if the user has not logged in
if(!isLoggedIn())
{
    header('Location: ../dashboard.php');
    die();
}
//page content follows

logout();
header('Location: ../dashboard.php');
?>