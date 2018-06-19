<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> - Retail Consulting and IT Innovation</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>.owl-nav{display:none;}
	</style>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/RCI-logo-shortcut.jpg" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- 	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style-service.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<!-- animation -->
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
	<header class="site-header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
				<a href="#" class="navbar-brand">
					<img src="http://rciapac.com/wp-content/uploads/2017/05/cropped-RCI-transparent-logo.png" class="img-responsive custom-logo" style="z-index: 1000;" alt="" itemprop="logo">
				</a>
			<div class="navbar-right" id="myNavbar">
				
				<div class="row search-bar">	<!-- search field on the menu -->
					<div class="head-search pull-right">	
						<form class="navbar-form navbar-left">
							<div class="input-group">
								<input type="text" class="form-control input-search" placeholder="Search...">
								<div class="input-group-btn">
									<button class="btn btn-default icon-search" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br>
				<?php $args = array('theme_location' => 'primary' ); ?>
				<?php wp_nav_menu($args); ?>
			</div>
		</div>
	</nav>
</header>
<br>
<br>
<br><br>