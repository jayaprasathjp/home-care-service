<?php
  $p_id=$_POST['w_id'];
  
  require('../db_connect/database.php');

  $sql1 = "DELETE  from `worker` WHERE `worker_id`='$p_id'";
  $sql2 = "DELETE  from `registration` WHERE `regid`='$p_id'";
 
  if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE)
  {
    echo "<script language='javascript'>	       
			location.href='admin.php';
	 </script>";
}
?>