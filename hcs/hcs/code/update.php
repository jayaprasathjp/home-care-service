<?php
  $state=$_GET['q'];
  $p_id=$_GET['r_id'];
  if($state=='1'){
    $state="accepted";
  }else if($state=='2'){
    $state="rejected";
  }else{
    $state="pending";
  }
  require('../db_connect/database.php');

  $sql1 = "UPDATE `request table` SET `status`='$state' WHERE `request_id`='$p_id'";
  if($conn->query($sql1)===TRUE)
  {
    echo $state; 
}