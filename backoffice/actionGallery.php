<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors','On');

include ('../connection.php');
include ('simpleImage.php');
include ('utils.php');

define ("MAX_SIZE","10000");

// insert photos
if (isset($_POST['InsertPhotos']))
{
	$images = $_FILES['images'];
	$title= $_POST['title'];

	if ($images != null)
	{
		$imagesReArray = reArrayFiles($images);	
    	
    	$imagesReturn = upload_images($imagesReArray);

		if ($imagesReturn != null)
		{
			foreach ($imagesReturn as $image) 
			{
				$query = 'INSERT INTO Gallery (image_name, description) VALUES ("'.$image.'", "'.$title.'")';
			
				if (!mysql_query($query, $con))
			  	{
			  		die('Error: '.mysql_error($con));
			  	}

			  	$query = null;
			}

			mysql_close($con);
				
			header('location:gallery.php');
		}
	}
}

 // remove selected photos
        if (isset($_POST['RemovePhotos']))
        {
                if (isset($_POST['option']))
                {
                        foreach ($_POST['option'] as $option) 
                        {
                                $query = mysql_query('SELECT image_name FROM Gallery WHERE id = "'.$option.'"');
                                $queryDelete = 'DELETE FROM Gallery WHERE id = "'.$option.'"';
                                
                                while ($row = mysql_fetch_array($query))
                                {
                                        // delete image from filesystem
                                        $filename = "../img/" . $row['image_name'];
                                        $filenameThumb = "../img/thumb/" . $row['image_name']; 
                                        
                                        unlink($filename);
                                        unlink($filenameThumb);
                                }

                                if (!mysql_query($queryDelete, $con))
                                {
                                        die('Error: '.mysql_error($con));
                                }
                        }
                        
                        mysql_close($con);
                        
                        header('location: gallery.php');
                }
                else
                {
                        header('location: gallery.php');
                }        
        }

function upload_images($arrayOfImages)
{
	$numberOfImages = sizeof($arrayOfImages);
	$uploadedImages = new ArrayObject();
	
	$counter = 0;

	foreach ($arrayOfImages as $image) 
	{
		//Verifica se existe alguma imagem para ser importada
		if($image)//Existe uma imagem para ser importada
		{
			//Retira os elementos "/"
			$filename = stripslashes($image['name']);
			//Verifica qual a extensão do ficheiro
			$extension = getExtension($filename);
			//Coloca todos os caracteres da extensão com letra minuscula
			$extension = strtolower($extension);
			//Verifica os formatos de imagem que podem ser importados
			
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "gif") && ($extension != "png"))//Formato diferente dos permitidos 
			{
				//print error message
				//echo $extension." <strong>Imagem:</strong> Este formato não pode ser importado! Utilize o formato jpg ou gif";
			}
			else//Formato permitido
			{	
				//Verifica qual o tamanho da imagem seleccionada
				$size = $image['size'];
				//Verifica se o tamanho é superior a 10000kb
				if ($size > MAX_SIZE * 1024)//tamanho superior
				{
					//echo "A imagem nao pode execer o tamanho de 10000kb <br/>";
				}
				else//tamanho inferior
				{
					//Gera um nome para a imagem
					$image_name = $counter . time().'.'.$extension;
					$image_name = str_replace(" ", "", $image_name);
					
					//Directoria para a qual a imagem será enviada
					$newname = "../img/" . $image_name;
					$newnameThumb = "../img/thumb/" . $image_name; 
					
					//Efectua o upload da imagem para a directoria
					$simpleImage = new SimpleImage();
					$simpleImage->load($image['tmp_name']);
					$simpleImage->resize(700,500);
					$simpleImage->save($newname);
					$simpleImage->resize(200,200);
					$simpleImage->save($newnameThumb);

					$counter++;
					$uploadedImages->append($image_name);				
				}
			}
		}
	}

	return $uploadedImages;
}

?>