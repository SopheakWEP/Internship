<article class="article-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ):
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
</article>