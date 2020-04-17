<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forum_Page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body style="margin: 0px;">
		<div id="header_area" class="menu">
			<img src="ups" style="float: left" height="100">
		<form method="post" action="index.php" id="form">
			<?php include('errors.php');?>
		<div>
			<ul>
				<li style="float: right; color: white;">
                 		 <div class="input">
        				 <label><strong>Username</strong></label>
						 <input type="text" name="username" value="<?php echo $username; ?>">
            			 </div>
		
             			 <div class="input">
        				 <label><strong>Password</strong></label>
						 <input type="password" name="password" value="<?php echo $password;?>">
      					 </div>
                  
       					 <button type="submit" class="btn" name="login">Login</button>
		
        				<a href="" style="color: white">Forgotten account?</a> 
				</li>
			</ul>
		</div>
	</form>
		</div>
		
	<div id="contenu">
		<center>
		<form style="margin-block-star: 0px;" method="post" action="index.php" id="reg">
			<?php include('errors.php');?>
		<div>
                 		<strong style="color: white">
                 		 <div class="input">
        				 <label>Full_Name</label>
						 <input type="text" name="name" value="<?php echo $name; ?>">
            			 </div>
            			 <div class="input">
        				 <label>Username</label>
						 <input type="text" name="username" value="<?php echo $username; ?>">
            			 </div>
            			 <div class="input">
        				 <label>E_mail</label>
						 <input type="email" placeholder="Facultatif" name="email" value="<?php echo $email; ?>">
            			 </div>
		
             			 <div class="input">
        				 <label>Password</label>
						 <input type="password" name="password_1" value="<?php echo $password;?>">
      					 </div>
      					 <div class="input">
        				 <label>Confirmation Password</label>
						 <input type="password" name="password_2">
            			 </div>
                  
       					 <button type="submit" class="btn" name="reg_user">Registre</button>
		</strong>
		</div>
		</form>
	</center>
	</div>
		<div id="footer" class="menu">
				<ul style="
    
    margin-block-start: 0px;
    margin-block-end: 0px;
">
					<li ><a href="*">Contact us</a></li>
					<li><a href="*">About us</a></li>
					<li><a href="*">Services</a></li>
				</ul>
				<p>UPS Ⓒ 2020</p>
		</div>
	</body>
</html>