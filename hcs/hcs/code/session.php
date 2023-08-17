<?php
session_start();
if (!isset($_SESSION['user'])) {
   echo "<script language='javascript'>		
        location.href='login.php';
 </script>";	
}
?>