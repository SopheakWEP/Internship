<?php
/**
 * Template Name: Carrer Custom Page
 */
?>
<?php get_header(); ?>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Career Opportunity</h3>
			<p>
				RCI is an IT consulting firm, which also provides IT solutions for retailers in Asia-Pacific. Acknowledged for its expertise, the company has earned the trust of luxury brands and software product companies. RCI is one of the first European firms to offer personalized IT solutions with added value.
			</p>
			<br>
			<h3>Open Position</h3>
			<p>RCI Camboida is currently seeking for candidate for the following position : </p>
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
							<article class="article-post-career" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
								?>
								<header class="entry-header">
									<ul style="list-style-type: square;">
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									</ul>
								</header>
								<!-- <div class="entry-content">
									<?php the_content(); ?>
								</div> -->
							</article>
							<?php
						endwhile;
					endif;
					?>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<!-- <div class="typeOfJob">
				<ul class="list-group">
					<li class="list-group-item active text-center"><b>Career</b></li>
					<li class="list-group-item">Career Opportunity</li>
					<li class="list-group-item">Internship</li>
				</ul>
			</div> -->
		</div>
	</div>
</div>
<?php get_footer(); ?>