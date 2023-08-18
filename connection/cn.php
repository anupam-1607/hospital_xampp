<?php
$db = mysqli_connect("localhost","root","",""); 
  
    if(!$db)
      echo "complete"; 
    else
        echo "Database Connection Successfully.";


mysqli_select_db($db,"hospital");
// $sql= "INSERT INTO user(fname, email, username, password) VALUES('abc', 'abc@gmail.com', 'abc', '123')";
// if (mysqli_query($db,$sql))
// {
// 	echo"Record Created Success!!";
// }
// else
// {
// 	echo"Error.." . $sql . "<br>" . mysqli_error($db);
// }



?>
