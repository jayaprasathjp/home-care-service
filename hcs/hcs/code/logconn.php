<?php
include('../db_connect/database.php');
$username=$_POST['username'];
$psw=$_POST['psw'];
$sql="insert into login values('$username','$psw')";
mysqli_query($conn,$sql);
?>
<script>
    alert('inserted...');
</script>