<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Rigesteration Form</title>
    <link rel="stylesheet" type="text/css" href="style1.css"> 
	
</head>
<body style="background: #128184 ">

    <div class="header">
		<h2> Register</h2>
	</div>

    <form method="post" action="Register.php">
        <?php include('errors.php'); ?>
         <div class="input">
        <label>Full Name</label>
			<input type="text" name="name"  value="<?php echo $name?>">
            </div>
        <div class="input">
        <label>User Name</label>
			<input type="text" name="username"  value="<?php echo $username?>">
            </div>
		 <div class="input">
			<label>Email</label>
			<input type="email" name="email"  value="<?php echo $email?>">
        </div>
              <div class="input">
        <label>Password</label>
			<input type="password" name="password_1"  value="<?php echo $password?>">
      </div>
                   <div class="input">
		<label>Confirmation Password</label>
			<input type="password" name="password_2" >
        </div>
        <div>
        <button type="submit"class="btn" name="reg_user">Register</button>
		</div>
			   do you have an account? <a href="index.php">Login</a>
		<p>
		</p>
	</form>
</body>
</html>