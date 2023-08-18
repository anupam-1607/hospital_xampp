<!-- Connect Database-->
        <?php include('cn.php'); ?>
<!--END# Connect Database-->

<?php
if(isset($_GET['id']))
{
	$sql = "DELETE from user where id = ".$_GET['id'];
	if(mysqli_query($db, $sql))
	{
		header('location:user.php');
	}
	else
	{
		echo "Error ".mysqli_error($db);
	}
}
?>