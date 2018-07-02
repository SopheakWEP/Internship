<?php session_start();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/RCI-logo-shortcut.jpg" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<!-- animation -->
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<?php 
		if(isset($_GET['lang'])){
			$_SESSION['lang'] = $_GET['lang'];
		}
		if (!isset($_SESSION['lang']) || $_SESSION['lang'] == 'en') {
			/* none */
		}else{
			?>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/khmer_font.css">
			<?php
		}
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<?php wp_head(); ?>
</head>
<body class="font_defualt" <?php body_class();?>>
	<ul class="left_menu_language">
		<li><a title="Khmer Language" href="?lang=kh"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cambodia (1).png" alt=""></a></li>
		<li style="padding-top: 10px;"><a title="English Language" href="?lang=en"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/united-states.png" alt=""></a></li>
	</ul>
	<header class="site-header">
		<nav class="navbar navbar-default navbar-fixed-top" id="mainNavbar">
			<div class="" style="padding: 0px 60px 0px 30px;">
				<a href="<?php echo get_option('siteurl'); ?>" class="navbar-brand">
					<img src="http://rciapac.com/wp-content/uploads/2017/05/cropped-RCI-transparent-logo.png" class="img-responsive custom-logo" style="z-index: 2000; margin-top: 14px;" alt="" itemprop="logo">
				</a>
				<div class="navbar-right" id="myNavbar">
					<div class="row search-bar">	<!-- search field on the menu -->
						<div class="head-search pull-right">
							<ul class="navbar-form navbar-left" style="margin-top: 0px;">
								<li style="background: #F8F8F8;"><a title="Khmer Language" href="?lang=kh"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cambodia (1).png" alt=""></a></li>
								<li style="background: #F8F8F8;"><a title="English Language" href="?lang=en"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/united-states.png" alt=""></a></li>
							</ul>
							<form class="navbar-form navbar-left" style="margin-top: 13px;">
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
					<?php
					function en_menu()
					{
						$args = array('theme_location' => 'primary' ); 
						wp_nav_menu($args);
					}
					function kh_menu()
					{
						$args = array('theme_location' => 'primary_kh' ); 
						wp_nav_menu($args);
					}
					if(isset($_GET['lang'])){
						$_SESSION['lang'] = $_GET['lang'];
					}
					if (!isset($_SESSION['lang']) || $_SESSION['lang'] == 'en') {
						en_menu();
					}else{
						kh_menu();
					}
					?>
				</div>
			</div>
		</nav>
	</header>
	<br>
	<br>
	<br>