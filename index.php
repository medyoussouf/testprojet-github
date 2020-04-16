<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background: #128184 ">
	<div class="header">
		<h2>Login Page</h2>
	</div>

    <form method="post" action="index.php">
       <?php include('errors.php'); ?>
        
        <div class="input">
        <label>Username</label>
			<input type="text" name="username"  value="<?php echo $username; ?>">
            </div>
		
              <div class="input">
        <label>Password</label>
			<input type="password" name="password"  value="<?php echo $password; ?>">
      </div>
                  
        <button type="submit" class="btn" name="login">Login</button>
		
        <p>
			   don't you have an account? <a href="Register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>
