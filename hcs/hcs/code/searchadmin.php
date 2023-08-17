<?php
require('../db_connect/database.php');
        $str=$_GET['q'];
		$sql1="SELECT * FROM `worker` where `worker_name` like'$str%' ";
		$result = $conn->query($sql1);
		 if($result->num_rows>0)//when db records are found store in associative array...
        {
		  // output data of each row
    $rownum=0;
    echo "<table class='container tabl'  border='1px' >";
  echo '<div class="row"> ';
	  while($row = $result->fetch_assoc())
	   {
      $rownum+=1;
      $sql="SELECT `ratings` FROM `rating_table` where `customer_id`=".$row['worker_id'];
      $result1 =$conn->query($sql);
      $count=0;
      $sum=0;
      $star=0;
      if($result->num_rows>0)//when db records are found store in associative array...
        {
      while($row1= $result1->fetch_assoc()){
        $sum+=$row1['ratings'];
        $count=$count+1;
      }
    if($count>0){
      $star=$sum/$count;
      $star=round($star,1);
      $star=$star." star worker";
     }
     else{
      $star="no reviews yet";
     }
}
echo "<tr>";
echo "<td>".$rownum."</td>";
  echo '<div class="col-md-4">   <div class="" style="width: 18rem;">
      <div class="-body">
       <td> <h5 class="card-title">'.$row['worker_name'].'</h5> </td>
       <td>    <h6  style="color:#D7BE69" class="card-subtitle mb-2 ">'.$star.' </h6></td>
       <td>  <h6 class="card-subtitle mb-2 text-muted">'.$row['worker_exp'].' years experience</h6> </td>
       <td>   <p class="card-text">'.$row['worker_expertise'].'</p> </td>
       <td class="phone">   <img src="icon.png" width="30px" height="30px"/><a href="tel:'.$row['phone'].'" class="card-link phone"> '.$row['phone'].'</a></td>
      <br>';
      if(!isset($_SESSION['worker']))
      { 
      echo ' <small><td><form action="rate.php" method="post">
      <input name="id" value='.$row['worker_id'].' style="display:none">
      <input type="submit" name="submit" value="Rate this worker" class="btn-primary btn my-2">
      </form></td>
      <td><form action="request.php" method="post">
      <input name="w_id" value='.$row['worker_id'].' style="display:none">
      <input name="w_cat" value='.$row['worker_cat'].' style="display:none">
      <input type="submit" name="submit1" value="Request service" class="btn-primary btn my-2">
      </form></td></small>';
      }
      
      echo '  
      </div></div>
    </div>';
    echo "</tr>";
	   }
    echo "</div><table>";
    }

   ?>