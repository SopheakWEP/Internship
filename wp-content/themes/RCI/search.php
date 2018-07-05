<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-sm-10 col-xs-12">
			<?php 
				if (have_posts()) :
					while (have_posts()) : the_post();
						?>
							<?php get_template_part('content', 'search'); ?>
						<?php
					endwhile;
				endif;
			 ?>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-12"></div>
	</div>
</div>
<?php get_footer(); ?>