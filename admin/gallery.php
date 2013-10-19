<?php
	session_start();
	if(!isset($_SESSION['myusername']))
	{
		header("location:index.php");
	}

    if (isset($_GET['search']))
    {
        $search = $_GET['search'];
        $searchBy = $_GET['searchBy'];
    }

	include 'header.php';
?>

<div id="header">
	<?php include 'menu.php'; ?>
</div>
<div id="content">
    <br/>
    <br/>
    <table>
        <tr>
            <td>Pick photos to show</td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                    <?php
                        $query = mysql_query("SELECT * FROM Gallery ORDER BY id ASC");
                        $count = mysql_num_rows($query);

                        while ($row = mysql_fetch_array($query))
                        {
                            ?>
                                <td>
                                    <img src=<?php echo '../img/thumb/' . $row['image_name']; ?> />
                                </td>
                            <?
                        }
                    ?>
                    </tr>
                </table>
            </td>
        </tr>
        <form method="POST" action="actionGallery.php" enctype="multipart/form-data">
        <tr height="30">
            <td width="100">Upload photos: </td>
        </tr>
        <tr>
            <td><input type="file" name="images[]" multiple="multiple"></input><td>            
        </tr>
        <tr height="30">
            <td><a href="main.php" class="cancelButton">Cancelar</a></td>
            <td><input type="submit" name="InsertPhotos" value="Submit"/></td>
        </tr>
        </form>
    </table>    	
</div>

<?php include('footer.php'); ?>