<?php
require_once('../connection/cn.php');
session_start();
	if(isset($_POST['Login']))
	{
		if(empty($_POST['email']) || empty($_POST['pass']))
		{
			header("location:login.php?Empty= Please fill in the blanks");
		}
		else
		{
			$sql="select * from admin where email='".$_POST['email']."' and pass='".$_POST['pass']."'";
			$result=mysqli_query($db, $sql);
			
			if(mysqli_fetch_assoc($result))
			{
	
				$_SESSION['User']=$_POST['email'];
				
				
				header("location:index.php");
			}
			else
			{
				echo '<br><b>Incorrect User Name or Paasowrd..';
			}
		}
	}
	else
	{
		echo 'Not Working';
	}
?>