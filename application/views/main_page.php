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
				<h1> <?php echo 'Welcome, <span style="color:blue;text-transform: uppercase;"> ' .  $userInfo['first'] . ' ' . $userInfo['last'] . '!</span>'; ?> </h1>
				<table>		
					<td><?php 
						echo form_open('base/shopping_cart_main');
						echo form_submit('submit', 'Shopping Cart');
						echo form_close(); ?>
					</td>
					<td>
						<?php echo form_open('base/logout'); ?>
						<?php echo form_submit('submit', 'Log Out'); ?>
						<?php echo form_close(); ?>
					</td>
				</table>

				<h2>Candy Inventory</h2> 
				<?php
					if(isset($exists))
						echo "<p style=\"color: red\">" . $exists . "</p>";
	
					echo "<table style='border:1px solid black; border-collapse:collapse;'>";
					echo "<tr style='border:1px solid black; border-collapse:collapse;'>
					<th>Name</th> <th>Price</th> <th>Photo</th><th></th></tr>";
 		
					foreach ($products as $product) {
						echo "<tr style='border:1px solid black; border-collapse:collapse;'>";
						echo "<td>" . $product->name . "</td>";
						echo "<td>" . $product->price . "</td>";
						echo "<td><img src='" . base_url() . "images/product/" . $product->photo_url . "'width='100px' height='100px' /></td>";
						echo "<td>" . anchor("base/add_shoppin sg_cart/$product->id",'Add to shopping cart') . "</td>";				
						echo "</tr>";
					}
					echo "<table>";
				?>	
				<div id="image">
					<img src="<?php echo base_url(); ?>images/main_img.jpg"/>
				</div>

			</header>
		</div>

	</body>
</html>	