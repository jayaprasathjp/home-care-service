<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
//form variables
$uname=$_POST['email'];
$pswd=$_POST['password'];

//db connection
require('../db_connect/database.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	
		$sql1="SELECT `psw`,`regid` FROM `registration` where `email`='$uname'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row

	  while($row = $result->fetch_assoc())
	   {
		$pass=$row['psw'];
        $worker_id=$row['regid'];
	   }
	  
		if($pass==md5($pswd)){
			session_start();
	
			$_SESSION['user'] = $pass;
			$_SESSION['worker']= $worker_id;
		
			echo"<script language='javascript'>
	
			window.location.href ='services.php';
	 </script>";
		}
		else{
			echo "<script language='javascript'>
	        
			alert('wrong password');
			location.href='login.php';
	 </script>";
		}
	   }else{
		echo "<script language='javascript'>
	        
			alert('user do not exist');
			location.href='login.php';
	 </script>";
	   }
	 
  }
	
}
?>