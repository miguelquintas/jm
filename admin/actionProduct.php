<?php

include '../connection.php';
include('simpleImage.php');

define ("MAX_SIZE","10000");

error_reporting(E_ALL);
ini_set('display_errors','On');

if (isset($_POST['AddProduct']))
{
	$id_cat = $_POST['id_cat'];
	$id_col = $_POST['id_col'];
	$nome = $_POST['nome'];
	$nome_aka = $_POST['nome_aka'];
	$descricao = $_POST['descricao']; 
	$referencia = $_POST['referencia'];
	$preco = $_POST['preco'];
	$material = $_POST['material'];
	$imagem = upload_image('imagem', $nome);
	$imagemZoom = upload_image('imagemZoom', $nome);

	if ($imagemZoom == null && $imagem != null)
	{
		$imagemZoom = cropImage($_FILES['imagem']['tmp_name'], $nome);
	}

	if ($imagem != null && $imagemZoom != null)
	{
		$query = 'INSERT INTO produto (id_cat, id_col, nome, nome_aka, descricao, referencia, preco, material, imagem, imagem_zoom) VALUES ("'.$id_cat.'", "'.$id_col.'", "'.$nome.'", "'.$nome_aka.'", "'.$descricao.'","'.$referencia.'","'.$preco.'","'.$material.'", "'.$imagem.'", "'.$imagemZoom.'")';
	}
	else if ($imagem != null && $imagemZoom == null)
	{
		$query = 'INSERT INTO produto (id_cat, id_col, nome, nome_aka, descricao, referencia, preco, material, imagem) VALUES ("'.$id_cat.'", "'.$id_col.'", "'.$nome.'", "'.$nome_aka.'", "'.$descricao.'","'.$referencia.'","'.$preco.'","'.$material.'", "'.$imagem.'")';
	}
	else if ($imagem == null && $imagemZoom != null)
	{
		$query = 'INSERT INTO produto (id_cat, id_col, nome, nome_aka, descricao, referencia, preco, material, imagem_zoom) VALUES ("'.$id_cat.'", "'.$id_col.'", "'.$nome.'", "'.$nome_aka.'", "'.$descricao.'","'.$referencia.'","'.$preco.'","'.$material.'", "'.$imagem.'", "'.$imagemZoom.'")';
	}
	else
	{
		$query = 'INSERT INTO produto (id_cat, id_col, nome, nome_aka, descricao, referencia, preco, material) VALUES ("'.$id_cat.'", "'.$id_col.'", "'.$nome.'", "'.$nome_aka.'", "'.$descricao.'","'.$referencia.'","'.$preco.'","'.$material.'")';
	}
	
	if (!mysql_query($query, $con))
  	{
  		die('Error: '.mysql_error($con));
  	}
	
	mysql_close($con);
	
	header('location: produtos.php');
}

if (isset($_POST['EditProduct']))
{
	$id = $_POST['id'];
	$id_cat = $_POST['id_cat'];
	$id_col = $_POST['id_col'];
	$nome = $_POST['nome'];
	$nome_aka = $_POST['nome_aka'];
	$descricao = $_POST['descricao'];
	$referencia = $_POST['referencia'];
	$preco = $_POST['preco'];
	$material = $_POST['material'];
	$imagem = upload_image('imagem', $nome);
	$imagemZoom = upload_image('imagemZoom', $nome);

	if ($imagemZoom == null && $imagem != null)
	{
		$imagemZoom = cropImage($_FILES['imagem']['tmp_name'], $nome);
	}
	
	if ($imagem != null && $imagemZoom != null)
	{
		$query = 'UPDATE produto SET id_cat = "'.$id_cat.'", id_col = "'.$id_col.'", nome = "'.$nome.'", nome_aka = "'.$nome_aka.'", descricao = "'.$descricao.'", referencia = "'.$referencia.'", preco = "'.$preco.'", material = "'.$material.'", imagem = "'.$imagem.'", imagem_zoom = "'.$imagemZoom.'" WHERE id = "'.$id.'"';
	}
	else if ($imagem != null && $imagemZoom == null)
	{
		$query = 'UPDATE produto SET id_cat = "'.$id_cat.'", id_col = "'.$id_col.'", nome = "'.$nome.'", nome_aka = "'.$nome_aka.'", descricao = "'.$descricao.'", referencia = "'.$referencia.'", preco = "'.$preco.'", material = "'.$material.'", imagem = "'.$imagem.'", WHERE id = "'.$id.'"';
	}
	else if ($imagem == null && $imagemZoom != null)
	{
		$query = 'UPDATE produto SET id_cat = "'.$id_cat.'", id_col = "'.$id_col.'", nome = "'.$nome.'", nome_aka = "'.$nome_aka.'", descricao = "'.$descricao.'", referencia = "'.$referencia.'", preco = "'.$preco.'", material = "'.$material.'", imagem_zoom = "'.$imagemZoom.'" WHERE id = "'.$id.'"';
	}
	else
	{
		$query = 'UPDATE produto SET id_cat = "'.$id_cat.'", id_col = "'.$id_col.'", nome = "'.$nome.'", nome_aka = "'.$nome_aka.'", descricao = "'.$descricao.'", referencia = "'.$referencia.'", preco = "'.$preco.'", material = "'.$material.'" WHERE id = "'.$id.'"';
	}

	
	if (!mysql_query($query, $con))
  	{
  		die('Error: '.mysql_error($con));
  	}
	
	mysql_close($con);
	
	header('location: produtos.php');
}

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	
	$query = 'DELETE FROM produto WHERE id = "'.$id.'"';
	
	if (!mysql_query($query, $con))
  	{
  		die('Error: '.mysql_error($con));
  	}
	
	mysql_close($con);
	
	header('location: produtos.php');

}

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

function upload_image($imageName, $nome)
{
	$image = $_FILES[$imageName]['name'];

	//Verifica se existe alguma imagem para ser importada
	if($image)//Existe uma imagem para ser importada
	{
		//Retira os elementos "/"
		$filename = stripslashes($_FILES[$imageName]['name']);
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
			$size=filesize($_FILES[$imageName]['tmp_name']);
			//Verifica se o tamanho é superior a 100kb
			if ($size > MAX_SIZE*1024)//tamanho superior
			{
					//echo "A imagem nao pode execer o tamanho de 1000kb";
			}
			else//tamanho inferior
			{
				if ($imageName == 'imagem')
				{
					//Gera um nome para a imagem
					$image_name = $nome.time().'.'.$extension;
					$image_name = str_replace(" ", "", $image_name);
					
					//Directoria para a qual a imagem será enviada
					$newname = "../imagens/".$image_name;
					$newnameThumb = "../imagens/thumb-".$image_name; 
					
					//Efectua o upload da imagem para a directoria
					$image = new SimpleImage();
					$image->load($_FILES[$imageName]['tmp_name']);
					$image->resize(500,500);
					$image->save($newname);
				}
				else
				{
					//Gera um nome para a imagem
					$image_name = $nome.time().'-zoom.'.$extension;
					$image_name = str_replace(" ", "", $image_name);
					
					//Directoria para a qual a imagem será enviada
					$newname = "../imagens/".$image_name;
					$newnameThumb = "../imagens/thumb-".$image_name; 
					
					//Efectua o upload da imagem para a directoria
					$image = new SimpleImage();
					$image->load($_FILES[$imageName]['tmp_name']);
					$image->resize(500,500);
					$image->save($newname);
				}

				return $image_name;
			}
		}
	}
	else //Não existe nenhuma imagem para ser importada 
	{
		return null;
	}
}

function cropImage($imageSrc, $nome)
{
	$image = imagecreatefromjpeg($imageSrc);

	$size = getimagesize($imageSrc);

	$thumb_width = 500;
	$thumb_height = 500;

	$thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

	// Resize and crop
	imagecopy($thumb,
	          $image,
	          0, // Center the image horizontally
	          0, // Center the image vertically
	          (($size[0] - $thumb_width) / 2), (($size[1] - $thumb_height) / 2),
	          500, 500);

	$image_name = $nome.time().'-zoom.jpg';
	$image_name = str_replace(" ", "", $image_name);

	imagejpeg($thumb, '../imagens/'.$image_name, 80);

	return $image_name;	
}

?>