<?php
  $p_id=$_GET['r_id'];
  
  require('../db_connect/database.php');

  $sql1 = "DELETE  from `request table` WHERE `request_id`='$p_id'";
  if($conn->query($sql1)===TRUE)
  {

}