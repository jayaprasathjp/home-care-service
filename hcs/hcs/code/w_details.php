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
    <title>Portfolio</title>
    <style>
		body{
			background-image: url('back4.jpg');
            background-repeat: no-repeat;
            background-size: cover;
		}

	</style>
</head>
<body>  
<?php
session_start();
?>     
+    <h1 class='my-3' align='center'>Worker Portfolio</h1>
<form class='container my-4 w-50' id='myform' action='' method='post'>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" name='name'required placeholder="Enter your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Experience</label>
    <input type="number" name='exp' class="form-control"  minlength=10 placeholder="Enter your experience in years" required>
</div>
<div class=" my-2">
 <div class="form-group"> Choose who you are </div>
  <select  name='cat' class='dropdown form-control' aria-labelledby="dropdownMenu2">
    <option class="dropdown-item" value='1' type="button">Painter</option>
    <option class="dropdown-item" value='2' type="button">Electrician</option>  
    <option class="dropdown-item" value='3' type="button">cook</option>
    <option class="dropdown-item" value='4' type="button">homecleaners</option>
  </select>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input type="tel" name='Phone_no' class="form-control"  pattern="^\d{10}$"  placeholder="Enter your phone number" required>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Expertise</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" required name='expertise'  placeholder='write about your work and yourself ' required rows="3"></textarea>
  </div>
  
 
  
  <input name='submit' type='submit' value='submit'  class="btn btn-primary">
</form>
  
</body>
<?php

if(isset($_POST['submit'])){

require('../db_connect/database.php');
$uname=$_POST['name'];
$exp=$_POST['exp'];
$contact=$_POST['Phone_no'];
$cat=$_POST['cat'];
$expertise=$_POST['expertise'];

if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
      $email = $_SESSION['email'];
      $sql1="SELECT `regid` FROM `registration` where `email`='$email'";
      $result = $conn->query($sql1);
       if($result->num_rows>0)//when db records are found store in associative array...
          {
        // output data of each row
  
      while($row = $result->fetch_assoc())
       {
          $worker_id=$row['regid'];
       }}

        $sql2 ="INSERT INTO `worker`( `worker_id`,`worker_name`,`phone`, `worker_exp`, `worker_expertise`, `worker_cat`) VALUES ('$worker_id','$uname','$contact','$exp','$expertise','$cat')";
        if($conn->query($sql2)===TRUE)
		 {
      echo "<script language='javascript'>
      location.href='worker_login.php';
  </script>";
     }}}
?>

    

</html>