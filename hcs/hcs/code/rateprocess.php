<?php

if(isset($_POST['submit'])){

require('../db_connect/database.php');
$stars=$_POST['stars'];

$id=$_POST['catid'];
$comment=$_POST['comment'];


if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
        $sql2 ="INSERT INTO `rating_table`( `customer_id`,`reviews`, `ratings`) VALUES ('$id','$comment','$stars')";
        if($conn->query($sql2)===TRUE)
		 {
      echo "<script language='javascript'>
      location.href='index.php';
  </script>";
     }}}
?>