<?php

function validateUser($admin, $userid, $usernum)
{
    session_regenerate_id (); //this is a security measure
    $_SESSION['valid'] = 1;
    $_SESSION['userid'] = $userid;
	$_SESSION['admin'] = $admin;
    $_SESSION['usernum'] = $usernum;
}

session_start(); //must call session_start before using any $_SESSION variables
$username = $_POST['username'];
$password = $_POST['password'];
//connect to the database here
include("database-login.php");
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);

$username = mysql_real_escape_string($username);
$query = "SELECT id, password, salt, admin
        FROM users
        WHERE username = '$username';";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1) //no such user exists
{
    header('Location: ../dashboard.php');
    die();
}
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password']) //incorrect password
{
    header('Location: ../dashboard.php');
    die();
}
else
{
	$userid = $username;
	$admin = $userData['admin'];
    $usernum = $userData['id'];
	echo $userData['admin'];
    validateUser( $admin, $userid, $usernum ); //sets the session data for this user
}
//redirect to another page or display "login success" message
	
header('Location: ../dashboard.php');
