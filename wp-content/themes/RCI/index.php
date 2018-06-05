<?php get_header(); ?>
<div class="wrap">
	<div class="container">
		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post">
						<h2><a id="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>