<?php
/**
 * Template Name: Category Custom Page
 */
?>
<?php get_header(); ?>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'wordpress',
						'posts_per_page' => 5,
						'paged' => $paged,
					);
					$arr_posts = new WP_Query( $args );
					if ( $arr_posts->have_posts() ) :
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							<br>
							<article class="article-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
								?>
								<header class="entry-header">
									<h1 class="entry-title" id="the-title-post"><?php the_title(); ?></h1>
								</header>
								<p class="post-meta">
									Date : <?php the_time('F jS, Y'); ?> | Author : <?php the_author(); ?>
								</p>
								<div class="entry-content">
									<?php the_content(); ?>
								</div>
								<?php get_the_author(); ?>
							</article>
							<br>
							<?php
						endwhile;
					endif;
					?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
	</div>
</div>
<?php get_footer(); ?>