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
    <title>Admin Login</title>
	<style>
		body{
			background-image: url('back3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
		}

	</style>
</head>
<body>
<div class="w-50 container">
<h1 align='center' class='my-2'>WELCOME</h1>
<h3 align='center'>Admin</h3>  
  <div    class=" form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='pass' id="pass" placeholder="Password">
 
    </div>
  <button onclick='adlog()'  name='submit' class="btn btn-primary">Submit</button><br>
 </div> 
<script>
    const adlog=()=>{
        let pass=document.getElementById('pass').value
        if(pass=='root'){
            location.href='admin.php'
        }else{
            alert('wrong password')
        }
    }
</script>
</body>  

</html>