			wow = new WOW(
			{
					 boxClass:     'wow',      // default
						animateClass: 'animated', // default
					 offset:       0,          // default
					 mobile:       true,       // default
					 live:         true        // default
					}
			)
			wow.init(); 

			/* owl js*/
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
						items:1,
						nav:true,
						loop:false
					}
				}
			});

			$(document).ready(function(){
			    $(".owl-carousel").owlCarousel({
			        items: 1
			    });
			    // tv ecom
			   $('body').on('click','.pre', function(){
			       $('.owl-carousel').trigger('to.owl.carousel', 1);
			   });

			   $('body').on('click','.next', function(){
			        $('.owl-carousel').trigger('to.owl.carousel', 2);
			     });
			});
// javascript test	