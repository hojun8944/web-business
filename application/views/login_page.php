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
				<h1>CSC309 Candy Store</h1>
					<table align="center">
						<?php echo form_open_multipart('login/loginCheck'); ?>
						<td style="display:run-in; ">
							<?php if(isset($error)) echo '<th><a class="error">' . $error . '</a></th>'; ?>
						</td>
						<td>
							<a> <?php echo form_label('Login Name');?> </a>
							<?php echo form_input('loginName',set_value('loginName'),"required"); ?>
						</td>
						<td>
							<a> <?php echo form_label('Password'); ?> </a>
							<?php echo form_password('password',set_value("password"),"required"); ?> 
						</td>
						<td>
							<a> <?php echo form_submit('submit', 'Login'); ?> </a>
							<?php echo form_close(); ?>
						</td>
						<td>
							<a><?php
									 echo form_open('login/registerForm');
									 echo form_submit('submit', 'Register'); 
									 echo form_close(); ?>
							</a>
						</td>

					</table>
				<div id="image">
					<img src="<?php echo base_url(); ?>images/main_img.jpg"/>
				</div>
				
			</header>
	
		</div>

	</body>
</html>	

