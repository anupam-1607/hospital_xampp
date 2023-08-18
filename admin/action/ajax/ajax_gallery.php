<?php

	include_once '../classis/db_gallery.php';
	$d=new demo();
	if($_POST['action']=='up')
	{
		$d->up($_POST);
	}
	
	if($_POST['action']=='del')
	{
		
		$d->del($_POST);
	}
	if($_POST['action']=='ins')
	{
		
		$d->ins($_POST);
	}
	
	
	
?>