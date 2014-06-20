<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo base_url();?>styles/main.css" type="text/css" rel="stylesheet">
		<title> CandyStore </title>
	</head>
	<body>
		<div id="main">
			<header>	
				<h1>Registration Succeed!</h1>
				<p> Welcome to our CandyStore </p>
				<div> <?php 
	if($loginName != 'admin')
		echo "<p>" . anchor('base/index','Start Shopping') . "</p>";
	else
		echo "<p>" . anchor('base/admin_main','Start Management Mode') . "</p>";
	
?> </div>
				<div id="image">
					<img src="<?php echo base_url(); ?>images/main_img.jpg"/>
				</div>
				
			</header>
	
		</div>

	</body>
</html>	



