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
<title>Login</title>
</head>
<body>
<div class="container"><h1 align='center' class='my-2'>WELCOME</h1> 
<h4 align='center'calss='my-3'> Worker Login</h4> 
<div class="container grid">

<form class='container my-5 w-75' action='loginprocess.php' method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name='password' maxlength='15' minlength='8' id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name='submit' class="btn btn-primary">Submit</button><br>


</form>

<div class="container"> <br><br><br><small class='btn btn-primary my-2'><a style='color:white' href="login.php">are you a customer..?login here</a></small> <br>
<small class='btn btn-primary'><a style='color:white' href="w_register.php">new user?register here</a></small></div>
</div>
  
</body>
</html>