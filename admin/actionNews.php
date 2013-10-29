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
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	
	$query = 'DELETE FROM produto WHERE id = "'.$id.'"';
	
	if (!mysql_query($query, $con))
  	{
  		die('Error: '.mysql_error($con));
  	}
	
	mysql_close($con);
	
	header('location: outfit.php');

}

?>