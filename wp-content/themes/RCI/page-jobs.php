<?php
/**
 * Template Name: Carrer Custom Page
 */
?>
<?php get_header(); ?>
<br>
<br>
<div class="container">
	<!-- declaration description content  -->
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<?php 
			if (have_posts()) :
				while ( have_posts()) : the_post() ; 
					?>
					<article class="post-page-career text-center">
						<h3 style="font-size: 300%;"><b><?php the_title(); ?></b></h3>
						<hr>
						<p><?php the_content(); ?></p>
					</article>
					<?php 
				endwhile;
			endif;
			?>
		</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
	</div>
	<div class="row">
		<!-- on the left side  -->
		<!-- dashboard list all position need to hire -->
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="typeOfJob">
				<ul>
					<li class="list-group-item text-center" style="background-color: #103852; color: #fff"><b>All positions</b></li>
					<?php
					$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'career',
						'posts_per_page' => 5,
						'paged' => $paged,
					);
					$arr_posts = new WP_Query( $args );
					if ( $arr_posts->have_posts() ) :
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							<article class="article-post-career" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
								?>
								<a class="list-group-item" href="#<?php the_ID(); ?>"><?php the_title(); ?></a>
								<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
			<!-- contain position and decrtion and requirement -->
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="list-carre">
					<?php
					$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'career',
						'posts_per_page' => 5,
						'paged' => $paged,
					);
					$arr_posts = new WP_Query( $args );
					if ( $arr_posts->have_posts() ) :
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							<article class="article-post-career container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
								?>
								<div id="<?php the_ID(); ?>" style="height: 123px;" ></div>
								<header class="entry-header">
									<!-- title position -->
									<h1 title="<?php the_title_attribute(); ?>" style="margin-top: 20px;border-left: 3px solid #1e5073 ; background-color: #e6e6e6">&nbsp;<?php the_title(); ?></h1>
								</header>
								<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
										<div class="entry-content">
											<!-- requirement and job decription -->
											<?php the_content(); ?>
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
								</div>
								<hr>
							</article>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>