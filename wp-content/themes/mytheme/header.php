<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>
	<?php wp_head();?>
</head>
<body>


<header>
	

	<div class="container">
		<?php 
		wp_nav_menu(
			array(
				'theme location' => 'top-menu',
				// 'menu' => 'Top Bar',
				'menu-class' => 'top-bar'
			)
		);
		 ?>

	</div>
</header>