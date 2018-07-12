<?php 
get_header();
?>
<br>
<?php
while (have_posts()) :
	the_post();
	?>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<div class="meta-info">
							<h1 class="text-center" style="border-bottom: 2px solid #1e5073;"><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
					</header>
				</article>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
	</div>
	<?php
endwhile;
get_footer();
?>