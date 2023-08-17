<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="cook.css">

  
  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Cook</title>
</head>
<body>   <?php
require('session.php');
?>
<?php
if(isset($_POST['id'])){
 
    $_SESSION['id']=$_POST['id'];
    
}
?>
<nav>
         <label class="logo">Home care Services</label>
         <ul>

         <li><a href="index.php">Home</a></li>

<li><a href="about.php">about</a></li>

            <li>
               <a href="#">Services
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="Painters.php">Painters</a></li>
                  <li><a href="Electrician.php">Electrician</a></li>
                  <li><a href="Cook.php">Cook</a></li>               
                 <li><a href="Homecleaners.php">Homecleaners</a></li>
                 </ul>
                 </li>
                 </li>
                 <li><a href='<?php
                if($_SESSION['user']=='admin'){
                  echo "admin.php";
                }
                 else if(isset($_SESSION['worker']))
                 {echo "services.php"; }
                 else{
                   echo "cust_services.php";} ?>'> status</a></li>
                 <li><a href="logout.php">Logout</a></li>
                 <!-- <li><a href="login.php">login</a></li>
                 <li><a href="register.php">registration</a></li> -->
               <!-- <li><a href="contact.php">Contact</a></li> -->
               </ul>
      </nav>
<div class="container">
<h1 align='center' class='my-2'>Rate this worker</h1> 

<form class='container my-5 w-50' action='rateprocess.php' method='post'>
<div class="form-group">
    <?php
    echo "<input type='text' name='catid' value='".$_SESSION['id']."' style='display:none'></input>"
    ?>
</div>  

  <div class="form-group">
    <label for="exampleInputPassword1">Rate from 1 to 5</label>
    <input type="range" min="0" max="5" class="form-control" name='stars' id="exampleInputPassword1" placeholder="">
  </div>
  <pre>  0          1         2         3         4         5</pre>

  <div class="form-group">
    <label for="exampleInputPassword1">comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name='comment'  placeholder='write about your work and yourself ' required rows="3"></textarea>
  </div>
  <button type="submit" name='submit'  class="btn btn-primary">Submit</button><br>
</form></div>
  
</body>

</html>