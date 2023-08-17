<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="service.css">
  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Services</title>
</head>
<body>    
 
  <?php
   require('session.php'); 
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
                 <li><a href="logout.php">Logout</a></li>
                 <!-- <li><a href="login.php">login</a></li>
                 <li><a href="register.php">registration</a></li> -->
               <!-- <li><a href="contact.php">Contact</a></li> -->
               </ul>
      </nav>
    <div class='painter'>
        
   <h1 align='center' class='py-5 head' >
  <span style='color: blue'>W</span>
  <span style='color: red'>O</span>
  <span style='color: yellow'>R</span>
  <span style='color: blue'>K</span>
  <span style='color: red'>E</span>
  <span style='color: yellow'>R</span>


</h1>
    </div>
    <div class='table my-5'>
   

        <?php
        require('../db_connect/database.php');
        
        $sql="SELECT * FROM `request table` where `customer_id`=".$_SESSION['cust_id']." order by `request_date`;";

        $result = $conn->query($sql);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row
      $rownum=0;
       echo "<table class='container tabl'  border='1px' >";
      echo "<th colspan='8' style='border-bottom:solid 1px;'> <h3 align='center'><b>        <h3 align='center'>The services requested</h3>
      </b></h3></th>";   
  echo '<div class="row"> ';
	  while($row = $result->fetch_assoc())
	   {
$rownum+=1;
        $sql="SELECT * FROM `worker` where `worker_id`=".$row['worker_id'];
        $result1 =$conn->query($sql);
        if($result->num_rows>0)//when db records are found store in associative array...
          {
        while($row1= $result1->fetch_assoc()){
          $cust_name=$row1['worker_name'];
          $contact=$row1['phone'];
        
        }}
        echo "<tr>";
        echo "<td>".$rownum."</td>";
  echo '<div class="col-md-4">   <div class=" -5" style="width: 18rem;">
      <div class="-body">
     <td> <h6 class="text-disabled" id="btns">'.$row['status'].'</h6></td>
     <td>   <h5 class="card-title">'.$cust_name.'</h5></td>
     <td>  <img src="icon.png" width="30px" height="30px"/><a href="tel:'.$contact.'" class="card-link"> '.$contact.'</a></td>
       
        <td>   <p class="card-text">'.$row['description'].'</p></td>

        <td>  <h6 class="card-title"> was requested on '.$row['request_date'].'</h6></td>
      </div>
      <td>    <button onclick="update('.$row['request_id'].')" type="submit" class="btn btn-danger my-2">Delete request</button>  
      </div> </td>
    </div>';       echo "</tr>";

	   }
    echo "</div><table>";
    }

   
        ?>
        <script>
             function update(r_id){
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                location.reload();
            }
        };
        xmlhttp.open("GET", "delete_req.php?&r_id=" + r_id, true);
        xmlhttp.send();
    }
        </script>
    </div>
</body>
</html>