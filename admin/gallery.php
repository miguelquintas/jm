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

    if ($_GET['error'] == '1')
    {
        echo '<script type="text/javascript">alert("Please Upload a image with less than 1500px width");</script>';
    }
?>

<div id="header">
	<?php include 'menu.php'; ?>
</div>
<div id="content">
    <br/>
    <br/>
    <form method="POST" action="actionGallery.php">
    <table>
        <tr height="30">
            <td width="100">Current photos: </td>
        </tr>
        <tr>
            <td>
                <table cellspacing="10">
                    <tr>                    
                    <?php
                        $query = mysql_query("SELECT * FROM Gallery ORDER BY id ASC");
                        $count = mysql_num_rows($query);
                        $counter = 0;

                        while ($row = mysql_fetch_array($query))
                        {
                            ?>
                                <td>
                                    <img src=<?php echo '../img/thumb/' . $row['image_name']; ?> width="120"/>
                                    <br/ >
                                    <input type="checkbox" name="option[]" value=<?php echo $row['id']; ?>>&nbsp;Delete<br>
                                </td>
                            <?
                            if ($counter > 0 && $counter % 6 == 0)
                            {
                                ?></tr><tr><?    
                            }
                            $counter++;
                        }
                    ?>
                </table>
            </td>
        </tr>
    </table>
    <input type="submit" name="RemovePhotos" value="Remove Photos" class="submitButton"/>
    </form>
    <br />
    <br />
    <table>
        <form method="POST" action="actionGallery.php" enctype="multipart/form-data">
        <tr height="30">
            <td width="100">Upload new photos: </td>
        </tr>
        <tr>
            <td><input type="file" name="images[]" multiple="multiple"></input><td>            
        </tr>
        <tr height="30">
            <td><a href="main.php" class="cancelButton" class="cancelButton">Cancel</a></td>
            <td><input type="submit" name="InsertPhotos" value="Submit" class="submitButton"/></td>
        </tr>
        </form>
    </table>    	
</div>

<?php include('footer.php'); ?>