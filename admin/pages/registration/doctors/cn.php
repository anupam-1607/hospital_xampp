<?php

$db = mysqli_connect("localhost","root","",""); 
  
    if(!$db)
      echo "complete"; 
    else
        echo "Database Connection Successfully.";
		mysqli_select_db($db,"shoot_my_day");
?>