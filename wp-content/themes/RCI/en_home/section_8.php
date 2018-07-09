<?php
/**
 * Template Name: Feed home Template
 */
	include 'config.php';
 ?>
<section>
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-6">
				<h1>RCI's Latest News</h1>
			</div>
			<div class="col-md-6"></div>
		</div>
		<div class="row">
			<div class="col-md-8"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="row wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 3.5s; animation-name: fadeInUp;">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<p class="RCILatestNews" style="text-align: justify;">RCI Selected by High-End Luxury Brand to roll out Oracle Xstore POS solution in 15 countries in Asia Pacific<br>
						2018.03.28</p>
					</div>
				</div><br><hr>
				<div class="row wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<p class="RCILatestNews" style="text-align: justify;">RCI announces the launch of Pandora Japan eCommerce Website with OMS PRO solution<br>
						2018.03.27</p>
					</div>
				</div><br><hr>
				<div class="row wow fadeInUp" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeInUp;">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<p class="RCILatestNews" style="text-align: justify;">RCI announces the opening of new office in Singapore in the run up to its expansion in Southeast Asia 	marketplaces
						2018.02.10</p>
					</div>
				</div><br>
			</div>
		</div>	 -->
	</div>
</section>
<script>	
	wow = new WOW(
	{
		boxClass:     'wow',      
		animateClass: 'animated', 
		offset:       0,          
		mobile:       true,       
		live:         true       
	})
	wow.init();   
		// slide show
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        320:{
		            items:1,
		            nav:true,
		            loop:false
		        },
		        650:{
		            items:3,
		            nav:true,
		            loop:false
		        },
		        1000:{
		            items:4,
		            nav:true,
		            loop:false
		        }
		    }
		});
	</script>