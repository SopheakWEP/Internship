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
	<!-- end declaration description -->
	<div class="row">
		<!-- table list position on the left side  -->
		<!--  list all position need to hire on left side -->
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
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
								<a class="list-group-item" target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div> <!-- end of table list position on the left side -->
			<!-- contain position and descrption and requirement -->
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<?php get_footer(); ?>