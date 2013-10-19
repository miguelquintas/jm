<?php

// rearrange image files structure to a more simple one
function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

// get extension of files
function getExtension($str) 
{
	$i = strrpos($str,".");
	
	if (!$i) 
	{ 
		return ""; 
	}
	
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);

	return $ext;
}

?>