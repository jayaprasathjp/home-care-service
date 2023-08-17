<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="styl.css">
  
   
  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Homecleaners</title>
</head>

<body>
<?php
   require('session.php'); 
    ?><nav>
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
  <!-- -----------------------------------------------company------------------------------------------------------------------>

   
<h1 align='center' class='my-4'>  <b>Online Home Services</b></h1>
<div class="company-info container headcont">    
<div class="container content para">
        <b>Online Home services</b> Now day's web services technology is widely used to integrate heteroginious system and develope new applications.
       and here is a website of online booking for servents for domestic house chores and to hire workers so we made our website
    the main objective of this website is to provide the better and easy life for customers to get quick solutions for searching thier day to day services. </div>
    <div class="container content"><img width='560' height='350' src="homeimage.jpg" alt="" /></div>
     </div>
  <!-- ---------------------------------------------------------------------------------------------------------------------- -->
  <!-- ----------------------------------------------------team-------------------------------------------------------------- -->
  <div class='container'>
   <h1 align='center' class='my-4'>   <b>Our Services</b> 
</h1>
    <div class='imgcont'>
    <div  class='mx-2 my-4 img img1' ><br><span class='text'>PAINTER</span></div>
    <div class='mx-2 my-4 img img2'  ><br><span class='text'>ELECTRICIAN</span></div>
    </div>
    <div class='imgcont'>
    <div class='mx-2 my-4 img img3' ><br><span class='text'>COOK</span></div>
    <div class='mx-2  my-4 imgs img img4'><br><span class='text texts'>HOMECLEANER</span></div>
    </div>
  </div>
  <div class='container' align='center'>      
        <br>the website provides the user with the flexibility of accessing the services and facilities.
        <br>the user can able to surf from their comfort place and can book a slot for services and they 
        <br>can provide the timing also even they can order services for their freinds and family members
        <br>if they are not able to get service providers.....
      </div>
    
  <!-- ----------------------------------------footer------------------------------------------ -->
  <footer class='container my-4' align='center'>

      
        <ul class="box">
          <li class="link_name">For More information Contact us</li>
          <li><a target="on_blank" href="tel:+919741132768">+91 9741132768</a></li>
          <li><a target="on_blank" href="mailto:'sandhyasa931@gmail.com'">sandhyasa931@gmail.com</a></li>
        </ul>
        <h1 class="center ">THANK YOU</h1>
        </footer>
    </body>




</html>