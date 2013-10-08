<?php
	session_start();
	if(!isset($_SESSION['myusername']))
	{
		header("location:index.php");
	}

	include 'header.php';	
?>
<script type="text/javascript">

    $(document).ready(function()
    {
        $('#referencia').change(function()
        {
            var reference = $('#referencia').val();

            $.ajax({
                type: "POST",
                url: "getRepeated.php?reference="+reference,
                success: function(result)
                {
                    if (result == "existe")
                    {
                        alert("Já existe um produto com esta referência!");
                    }
                }
            });
        });
    });

</script>

<div id="header">
	<?php include 'menu.php'; ?>
</div>
<div id="content">
	<form method="POST" action="actionProduct.php" enctype="multipart/form-data">
    <table>
    	<tr height="30">
        	<td width="100">Categoria: </td>
            <td>
            	<select name="id_cat">
                	<?php 	
						$result = mysql_query("SELECT * FROM categoria ORDER BY id ASC ");

						while($row = mysql_fetch_array($result))
  						{
						?>
  							<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                        <?php
						}
						?>
				</select>
          	</td>
        </tr>
        <tr height="30">
        	<td width="100">Coleccao: </td>
            <td>
            	<select name="id_col">
                	<?php 	
						$result = mysql_query("SELECT * FROM coleccao ORDER BY id ASC ");

						while($row = mysql_fetch_array($result))
  						{
						?>
  							<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                        <?php
						}
						?>
				</select>
          	</td>
        </tr>
        <tr height="30">
        	<td>Nome: </td>
            <td><input type="text" name="nome" /></td>
        </tr>
        <tr height="30">
            <td>Nome (aka): </td>
            <td><input type="text" name="nome_aka" /></td>
        </tr>
        <tr height="30">
        	<td>Descrição: </td>
            <td><textarea name="descricao"></textarea></td>
        </tr>
        <tr height="30">
        	<td>Referencia: </td>
            <td><input type="text" name="referencia" id="referencia"/></td>
        </tr>
        <tr height="30">
        	<td>Preço: </td>
            <td><input type="text" name="preco" /></td>
        </tr>
        <tr height="30">
        	<td>Material: </td>
            <td><input type="text" name="material"/></td>
        </tr>
        <tr height="30">
        	<td>Imagem: </td>
            <td><input type="file" name="imagem" /></td>
        </tr>
        <tr height="30">
            <td>Imagem c/ zoom: </td>
            <td><input type="file" name="imagemZoom" /></td>
        </tr>
        <tr height="30">
        	<td><a href="produtos.php" class="cancelButton">Cancelar</a></td>
            <td><input type="submit" name="AddProduct" value="Submit" class="submitButton" /></td>
        </tr>
    </table>
    </form>
</div>

<?php include('footer.php'); ?>