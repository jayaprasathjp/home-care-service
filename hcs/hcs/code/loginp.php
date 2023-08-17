
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <input type="checkbox" id="show">
    <label for="show" class="show-btn-worker">Worker LOG IN   > </label>
    <label for="show" class="show-btn"> LOG IN   > </label>
   

    <div class="container">
        <label for="show" class="close-btn" title="close"></label>
        <h1>Welcome</h1>
        <form action="logconn.php" method="post">
            <label for="username"><b>Email,User name or Phone</b></label>
            <input type="text" placeholder="Enter Email,User or Phone" name="username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="psw" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

            <a href="#">Forgot Password?</a>
           <button>Submit</button>
            
            
        </form></div>

        
 

</body>
</html>
