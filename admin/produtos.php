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
    
</div>

<?php include('footer.php'); ?>