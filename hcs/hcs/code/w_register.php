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
			background-image: url('back2.jpg');
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
<?php
session_start();
?>   
    <h1 class='my-3' align='center'>Worker Registration</h1>
    <div class="container grid"><div class="container">
<form class='container my-4 w-75' id='myform' action='' method='post'>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" name='name'required placeholder="Enter your Name">
  </div>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" required class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  onkeyup='passwordChanged()' maxlength='15' onblur='removestyle()' required class="form-control" name='password' minlength='8'  id='pass' placeholder="Password">
    <small id='strength'></small>
    <p id='StrengthDisp'></p>
    <label for="psw-repeat">Repeat Password</label>
    <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" required id="psw-repeat">
    <input type="checkbox" onclick='handleshowpass()'/>show password
  </div>
 
  
  <input name='submit' type='submit'  onclick='check()' value='submit'  class="btn btn-primary">

</form></div>

<div class="container">  <br> <br><small class='btn btn-primary my-2'><a  style='color:white' href="register.php">are you a customer?register here</a></small><br><small class='btn btn-primary'><a style='color:white'  href="worker_login.php">already have an account?</a></small></div></div>
<script>
  function check(){
    if(document.getElementById('pass').value!==document.getElementById('psw-repeat').value){
      
      alert('passwords do not match')
event.preventDefault()
    }
  }
</script>
<script language="javascript">
    function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{11,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{10,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("pass");
        if (pwd.value.length == 0) {
            strength.innerHTML = '';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = 'Give atleast 8 Characters';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
            pwd.style.cssText=" box-shadow: 0 1px 5px 0 green"

        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium!A combination of special characters and symbols</span>';
            pwd.style.cssText=" box-shadow:0 1px 5px 0  orange"
            
        } else {
            strength.innerHTML = '<span style="color:red">Weak! Use combination of uppercase letters, lowercase letters, numbers, and symbols</span>';
          pwd.style.cssText=" box-shadow:0 1px 5px 0 red";
        }
    }

    const removestyle=()=>{
    var pwd = document.getElementById("pass");
    pwd.style.cssText=" box-shadow:0 0 white"

  }
 

  function handleshowpass(){
  var x = document.getElementById("pass");
  var x1=document.getElementById("psw-repeat");
  if(x.type==="password"){
    x.type="text";
    x1.type="text";
  }
  else{
    x.type="password";
    x1.type="password";
  }
  }
</script>

<?php

if(isset($_POST['submit'])){

require('../db_connect/database.php');
$uname=$_POST['name'];
$email=$_POST['email'];
$psw=md5($_POST['password']);
if($conn->connect_error)
	  {
  		die("Connection failed:" .$conn->connect_error);
	  }
	else
	  {
		$sql1="SELECT * FROM `registration` where `email`='$email'";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		 
	  echo"<script language='javascript'>
	
	  alert('user already exists');
	  location.href='w_register.php';
</script>";
	  }else{
        $sql2 ="INSERT INTO `registration`( `uname`,`email`,`psw`) VALUES ('$uname','$email','$psw')";
       
        if($conn->query($sql2)===TRUE)
		 { 
      $_SESSION['email']=$email;
      
      echo "<script language='javascript'>
      location.href='w_details.php';
  </script>"; 
     
     }}}}
     ob_flush();
?>

    
</body>
</html>