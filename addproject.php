<--<?php include('server.php') ?>-->
<!DOCTYPE html>
<html>
	<header>
		<meta charset="urf-8"/>
		<title>Add_Project</title>
		<link rel="stylesheet"type="text/css" href="style1.css">
	</header>
	<body style="background: #128184 ">
		<div class="header">
			<h2>Admin_Page</h2>
		</div>
		<form method="post" action="adminpage.php">
			<?php include('errors.php'); ?>
			<div class="input">
			<label>Project_Name</label>
			<input type="text" name="project" value="<?php echo $project;?>"/>
			</div>
			<div class="input">
			<label>Project_Description</label>
			<textarea name="Description" rows="5" cols="155" value="<?php echo $description ; ?>" ></textarea>
			</div>
			 <div>
             <button type="submit"class="btn" name="save">Save</button>
		     </div>
		</form>
	</body>
</html>