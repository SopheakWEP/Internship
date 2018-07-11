<!-- php -->
<?php 
	include 'config.php';
?>
	<div class="footer"  style="background: #103852;">		
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="footer-selection">
								<h2 class="widget-title font_title">
									<?php echo $lang['footer1.1']; ?>
									</h2>
								<div class="textwidget">
									<p class="footer-text-1 font_content">
										<?php echo $lang['footer1.2']; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="footer-selection">
								<h2 class="widget-title font_title"><?php echo $lang['footer2.1']; ?></h2>
								<div class="textwidget">
									<strong class="footer-text-2">Headquaters</strong>
									<p class="footer-text-2 font_content">
										<?php echo $lang['footer2.2']; ?>
									</p>
									<p class="footer-text-2">
										<strong class="footer-text-2 font_content"><?php echo $lang['footer2.3']; ?></strong>
										: contact@rciapac.com
									</p>
									<p class="footer-text-2">
										<strong class="footer-text-2 font_content"><?php echo $lang['footer2.4']; ?></strong>
										: (+855) 96 445 2656
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="footer-selection">
								<h2 class="widget-title font_title"><?php echo $lang['footer3.1']; ?></h2>
								<div class="textwidget">
									<div class="footer-text-3 font_content"><?php echo $lang['footer3.2']; ?></div>
									<br>
									<div class="newsletter-bar">	<!-- sign up field on the footer -->
										<div class="footer-input">
										<?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
										</div>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-5 col-xs-5"></div>
									<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4">
										<div class="rci-social">
											<a href="https://www.facebook.com/rciapac/">
												<i class="fab fa-facebook fa-2x"></i>
											</a>
											<a href="https://www.linkedin.com/company/rci-asia-pacific-ltd">
												<i class="fab fa-linkedin fa-2x"></i>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-5 col-xs-5"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row rci_info"><br><br><br>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<a class="footer-info font_content" href="http://rciapac.com/">©2017 RCI Global Services</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		wow = new WOW(
			{
				boxClass:     'wow',
				animateClass: 'animated',
				offset:       0,
				mobile:       true, 
				live:         true 
			}
    	)
		wow.init();
		// slide show
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:4,
					nav:true,
					loop:false
				}
			}
		})
		// $(function(){
		// // $('#<?php the_ID(); ?>').click(function(){
		// $('#<?php the_ID(); ?>').css('margin-top','300px');
		// // $('#<?php the_ID(); ?>').css('height','100px');
		// // });
		// });
	</script>
	<?php wp_footer(); ?>
</body>
</html>