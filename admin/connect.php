<?php

//hostpapa root名和密码 和数据库名字
 // $db_user='root';
 // $db_pass='';
$db_user='lingd074_root';  //username
$db_pass='5888208';  //password
$dbname=lingd074_portfolio
   
   try {$conn = new PDO("mysql:host=localhost;dbname=db_portfolio", "$db_user", "$db_pass");
		
	  
  } catch(PDOException $exception) {
      echo'connect Error!'.$exception->getMessage();
  }
?>
