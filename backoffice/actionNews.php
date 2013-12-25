<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors','On');

include ('../connection.php');
include ('utils.php');

// insert photos
if (isset($_POST['InsertNews']))
{
	$title = $_POST['title'];
	$text = $_POST['text'];

	if ($title != NULL && $text != NULL)
	{
		$query = 'INSERT INTO News (title, text) VALUES ("'.$title.'", "'.$text.'")';
				
		if (!mysql_query($query, $con))
		{
			die('Error: '.mysql_error($con));
		}
	}

	mysql_close($con);
				
	header('location: news.php');
}

// remove selected news
if (isset($_POST['RemoveNews']))
{
	if (isset($_POST['option']))
	{
		foreach ($_POST['option'] as $option) 
		{
			$query = 'DELETE FROM News WHERE id = "'.$option.'"';
	
			if (!mysql_query($query, $con))
	  		{
	  			die('Error: '.mysql_error($con));
	  		}
		}
		
		mysql_close($con);
		
		header('location: news.php');
	}
	else
	{
		header('location: news.php');
	}	
}

?>