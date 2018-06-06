<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<title><?php bloginfo('name') ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="blog-header fixed-top">
		<div class="col-lg-5 col-md-5">
			<h1>RCI Cambodia</h1>
		</div>
		<div class="col-lg-7 col-md-7">	
			<div class="row search-bar">	<!-- search field on the menu -->
				<div class="head-search pull-right">	
					<form class="navbar-form navbar-left" action="">
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
			<nav class="navbar pull-right">
				<!-- <?php //$args = array('theme_location' => 'primary' ); ?>
				<?php //wp_nav_menu($args); ?> -->
				<ul>
					<li>
						<a href="">Home</a>
					</li>
					<li>
						<a href="">Solutions</a>
						<span class="caret"></span>
					</li>
					<li>
						<a href="">Service</a>
					</li>
					<li>
						<a href="">Client</a>
					</li>
					<li>
						<a href="">Company</a>
						<span class="caret"></span>
					</li>
					<li>
						<a href="">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</div>