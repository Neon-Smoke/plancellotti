<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">

<?php wp_head();?>	
		
  <title>Peter Lancellotti - Author</title> 

</head>

<body>
	<div class="container">
		<nav class="navbar">
		    <div class="logo">PETER LANCELLOTTI</div>
			     	<?php 

			     	wp_nav_menu(

			     		array(

			     		'theme_location' => 'navbar',
			     		'menu_class' => 'nav-menu'

			     		)

			     	);

			     	;?> 
   
			<div class="hamburger">
				 	<span class="bar"></span>
				    <span class="bar"></span>
				    <span class="bar"></span>   
			</div>  
		</nav>