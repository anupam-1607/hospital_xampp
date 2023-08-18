<?php

	include_once '../classis/db_visitor.php';
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
	
	$path = '../../pages/visitor/files/upload/';
	
	if($_POST['action']=='upld')
	{
		$d1 = trim($_POST['pc2']);

		if(!file_exists($path))
		{
			midir($path, 0777);
		}
		$d->select($_POST);
		move_uploaded_file($_FILES['pc1']['tmp_name'], $path.$d1);
	}
	
	
	
?>