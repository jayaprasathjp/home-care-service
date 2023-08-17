<?php

if(isset($_POST['submit'])){
session_start();
require('../db_connect/database.php');
$id=$_POST['w_id'];
$cust_id=$_SESSION['cust_id'];
$cat=$_POST['w_cat'];
$work=$_POST['work'];
$date=date("Y-m-d");

if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
        $sql2 ="INSERT INTO `request table`( `customer_id`,`worker_id`, `request_date`,`description`,`work_cat`) VALUES ('$cust_id','$id','$date','$work','$cat')";
        if($conn->query($sql2)===TRUE)
		 {
      echo "<script language='javascript'>
      location.href='index.php';
  </script>";
     }}}
?>