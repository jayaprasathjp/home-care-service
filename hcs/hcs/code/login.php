<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Login</title>
	<style>
		body{
			background-image: url('back3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
		}
		.grid{
			display:grid;
			grid-template-columns: 2fr 1fr;

		}
	


	</style>
</head>
<body>
<h1 align='center' class='my-5'>WELCOME</h1> 
<div class="container grid">	
<div class="container">
<form class='container  w-75 ' action='' method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='pass' maxlength='15' minlength='8' id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name='submit' class="btn btn-primary">Submit</button><br>
 
</form></div> 
<div class="container  py-5" style='float:right'>
	
<button class='btn btn-primary' style='float:right'><a style='color:white' href="adminlogin.php">Admin login</a></button> <br> <br>
<button class='btn btn-primary' style='float:right'> <a  style='color:white' href="register.php">new user?register here</a></button> <br> <br>
 <button class='btn btn-primary' style='float:right'><a style='color:white'	 href="worker_login.php">are you a worker..?login here</a></button> <br> <br>
	</div>
</div>


</body>  
<?php
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
//form variables
$uname=$_POST['email'];
$pswd=$_POST['pass'];

//db connection
require('/db_connect/database.php');
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
	
		$sql1="SELECT `customer_pass`,`customer_id` FROM `customer` where `customer_mail`='$uname'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row

	  while($row = $result->fetch_assoc())
	   {
		$pass=$row['customer_pass'];
		$cust_id=$row['customer_id'];

	   }
		if($pass==md5($pswd)){
			session_start();
			$_SESSION['user'] = $pass; 
			$_SESSION['cust_id']=$cust_id;
		
			echo"<script language='javascript'>
	
			window.location.href ='index.php';
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
  exit();	
}
?>
</html>