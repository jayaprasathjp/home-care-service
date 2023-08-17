<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
      <link rel="stylesheet" href="styl.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
   <?php
require('./session.php');
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
      <section></section>
   </body>
</html>