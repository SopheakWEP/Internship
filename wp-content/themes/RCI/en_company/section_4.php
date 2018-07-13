<?php 
include 'config.php';
?>
<!-- .client say about us -->
<div class="wrap-2" style="background: #1e5073">
	<div class="container">	
		<div class="row title-description">
			<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8">
				<h1 class="text-center title-head wow slideInUp font_title" data-wow-duration="1s" data-wow-delay="0.2s" style="color: #fff; font-family: Ang Tasom">What our Clients say about us</h1>
			</div>
			<div class="col-lg-2 col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4"></div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
				<img width="170" height="170" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/company_images/rain_lau.jpg" class="attachment-170x170 size-170x170 wp-post-image" alt="" sizes="(max-width: 170px) 100vw, 170px" style="border-radius: 50%">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4"></div>
		</div>
		<div class="row client-speech">
			<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8">
				<div class="description">
					<div class="span">		
						<p class=" font_content" style="text-align: justify;color: white;">
							“Jean Luc is such a good leader, who can lead his team to provide the professional services. He is always well prepared. This is very helpful to increase the flexible on every critical work. His details oriented characteristic can gain the trust from people easily. Enriched business knowledge also makes the communication between operation and technical go smooth and simple. With the fruitful experience to work with him and his team. I am sure they can keep growing and success in future”.
						</p>
					</div>
					<div class="span-client-head">
						<h2 class="text-center span-client-name font_title">Rain Lau</h2>
						<h3 class="text-center span-client-position font_title">Business Analyst at Kering</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2"></div>
		</div>
		<div class="row"></div>
	</div>
</div>
<script>
	$('.owl-carousel').owlCarousel({
		loop:false,
		nav:true,
		items:1
	});
</script>
<!-- footer -->