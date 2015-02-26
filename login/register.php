<?php
//retrieve our data from POST
$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
//test password
if($pass1 != $pass2)
    header('Location: ../register.php');
if(strlen($username) > 30)
    header('Location: ../register.php');
//hash password
$hash = hash('sha256', $pass1);

//creates a 3 character sequence
function createSalt()
{
    $string = md5(uniqid(rand(), true));
    return substr($string, 0, 3);
}
$salt = createSalt();
$hash = hash('sha256', $salt . $hash);
//database sign in
include("database-login.php");
//new user variables
$admin = 0;
//database connect
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname, $conn);
//sanitize username
$username = mysql_real_escape_string($username);

//test if already exists
$query = "SELECT username, email
        FROM users
        WHERE username = '$username';";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1) //no such user exists
{
	$query = "INSERT INTO users ( username, password, salt, email, admin)
        VALUES ( '$username' , '$hash' , '$salt' , '$email' , '$admin' );";	
	mysql_query($query);
    header('Location: ../dashboard.php?success=You have successfully made an account.');
}
else {header('Location: ../dashboard.php?error=That User Already Exists');}
mysql_close();

?>