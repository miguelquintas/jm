<?php
	if ($_SERVER['HTTP_HOST'] == 'localhost:8888')
	{
		$con = mysql_connect('localhost', 'root', 'root');
		$bd = 'wildhardt';	
	}
	else
	{
		$con = mysql_connect('db508007135.db.1and1.com:3306', 'dbo508007135', 'Asff123G!');
		$bd = 'db508007135';
			
	}
	
	
	if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
	else
	{
		mysql_select_db($bd, $con);
	}
?>