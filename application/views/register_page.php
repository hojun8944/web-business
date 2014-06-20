<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<link href="<?php echo base_url();?>styles/main.css" type="text/css" rel="stylesheet">
		<title> CandyStore </title>
	</head>
	<body>
		<div id="reg">
			<div><h1 style="text-align:center; font-size:40px;">Registeration</h1></div>
			<?php echo form_open_multipart('register/registerCheck'); ?>
				<table style="width:250px; padding: 3%; margin-top: 50px;">
					<tr>
						<td><a>
							<?php echo form_label('First Name'); ?>
						</a></td>
						<td>
							<?php echo form_input('first',set_value('first'),"required");?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('first', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

					<tr>
						<td><a>
							<?php echo form_label('Last Name'); ?>
						</a></td>
						<td>
							<?php echo form_input('last',set_value('last'),"required"); ?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('last', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

					<tr>
						<td><a>
							<?php echo form_label('Login Name'); ?>
						</a></td>
						<td>
							<?php echo form_input('loginName',set_value('loginName'),"required");?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('loginName', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

					<tr>
						<td><a>
							<?php echo form_label('Password'); ?>
						</a></td>
						<td>
							<?php echo form_input('password',set_value('password'),"required");?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('password', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

					<tr>
						<td><a>
							<?php echo form_label('Confirm Password'); ?>
						</a></td>
						<td>
							<?php echo form_input('confPwd',set_value('confPwd'),"required");?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('confPwd', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

					<tr>
						<td>
							<a><?php echo form_label('Email'); ?></a>
						</td>
						<td>
							<?php echo form_input('email',set_value('email'),"required");?>
						</td>	
					</tr>

					<tr>
						<td>
							<?php echo form_error('email', '<a class="reg_error"> ','</a>');?>
						</td>
					</tr>

				</table>
				<div>
				<?php echo form_submit('submit', 'Register');?>
				<?php echo form_close();?>
				</div>
				<div style ="float:right; font-size:20px;"> 
					<?php echo anchor('login/index','Back to Main Page'); ?>
				</div>
				<div id="image">
					<img src="<?php echo base_url(); ?>images/main_img.jpg"/>
				</div>

		</div>

	</body>
</html>	



