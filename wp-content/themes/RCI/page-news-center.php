<?php 
get_header();
	if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
			<article class="post page">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<h2><?php the_title() ?></h2>
							<p><?php the_content() ?></p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
						<br>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">		
						<hr style="border: 1px solid #1E5073;">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
					</div>
				</div>
			</article>
		<?php		
		endwhile;
	else: 
		echo "<p>No post found </p>";
	endif;
 get_footer(); 
 ?>