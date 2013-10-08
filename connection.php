<?php
	if ($_SERVER['HTTP_HOST'] == 'localhost:8888')
	{
		$con = mysql_connect('localhost', 'root', 'root');
		$bd = 'wildhardt';	
	}
	else
	{
		//$con = mysql_connect('hostingmysql116', 'BB94_unikej', 'bB_Uni,Ke');
		//$bd = 'unikejewellery_com_bbsite';
	}
	
	
	if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
	else
	{
		mysql_select_db($bd, $con);
	}
?>