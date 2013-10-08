<?php

include '../connection.php';

$username = ''; // Mysql username 
$password = ''; // Mysql password 

// Define $myusername and $mypassword 
$myusername = $_POST['username']; 
$mypassword = $_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$pass = md5($mypassword);

$sql = "SELECT * FROM User WHERE username = '$myusername' and password = '$pass'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1)
{
	session_start();
	
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['myusername'] = 'myUser';
	$_SESSION['mypassword'] = 'myPass';
 
	header("location:produtos.php");
}
else 
{
	echo "Wrong Username or Password";
}

?>