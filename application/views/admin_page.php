<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title> CandyStore</title>
		<link href="<?php echo base_url();?>styles/main.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="main">
			<header>	
				<h1>Candy Store Administrator Page</h1>
				<table>		
					<td>
						<?php echo form_open('base/product_management');?>
						<?php echo form_submit('submit', 'Product Management'); ?>
						<?php echo form_close(); ?>
					</td>
					<td>
						<?php echo form_open('base/display_order'); ?>
						<?php echo form_submit('submit', 'Display Order'); ?>
						<?php echo form_close(); ?>
					</td>		
					<td> 
						<form method="post" name="Form1">
						<input type="submit" value="Delete all info"  onClick="ConfirmDelete();" \>
						</form>
					</td>
							
					<td>
						<form method="post" name="Form1">
						<input type="hidden" name="Delete" value=""\>
						</form>
					</td>
					<td>
						<?php echo form_open('base/logout'); ?>
						<?php echo form_submit('submit', 'Log Out'); ?>
						<?php echo form_close(); ?>
					</td>


				</table>

				<div id="image">
					<img src="<?php echo base_url(); ?>images/main_img.jpg"/>
				</div>
				
			</header>
	
		</div>


		<script>
			function ConfirmDelete(){
				if(confirm(	"Do you really want to delete all user and order information?")){
					document.Form1.Delete.value = 'true';
				}
			}
		</script>


	</body>
</html>	
