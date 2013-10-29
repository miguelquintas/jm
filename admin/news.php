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
            <td>News:</td>
        </tr>
        <tr>
            <td>
                <table cellspacing="10">
                    <?php
                        $query = mysql_query("SELECT * FROM News ORDER BY id ASC");
                        $count = mysql_num_rows($query);

                        while ($row = mysql_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td>
                                    <li>
                                    <b><?php echo $row['title']; ?></b>
                                    <br />
                                    <?php echo $row['text']; ?>
                                    </li>
                                </td>
                            </tr>
                            <?
                        }
                    ?>
                </table>
            </td>
        </tr>
        <form method="POST" action="actionNews.php">
        <tr height="30">
            <td width="100">Add News: </td>
        </tr>
        <tr>
            <td>
                Title:<br/>
                <input type="text" name="title"></input>
            <td>            
        </tr>
        <tr>
            <td>
                Text:<br/>
                <textarea name="text" cols="30" rows="10"></textarea>
            <td>            
        </tr>
        <tr height="30">
            <td><a href="main.php" class="cancelButton">Cancelar</a></td>
            <td><input type="submit" name="InsertNews" value="Submit"/></td>
        </tr>
        </form>
    </table>    	
</div>

<?php include('footer.php'); ?>