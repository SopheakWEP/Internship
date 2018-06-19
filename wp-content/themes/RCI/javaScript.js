



/*document.getElementById('ecomemrce_tv1').onclick = tv_ecom1;
document.getElementById('ecomemrce_tv2').onclick = tv_ecom2;
function tv_ecom1() {

	 document.body.style.color = "purple";
}
function tv_ecom2() {
	// body...
}
*/
/* jquery*/

/*$(document).ready(function(){
	$(".dd").hide();
	$(".aa").hide();

    
    
    $(".2button").click(function(){
        
        $(".dd").show(500);
        $(".aa").hide(1000);
        $(".cc").hide();
        
    });
    $(".1button").click(function(){
        $(".aa").show(1000);
        $(".dd").hide(1000); 
        $(".cc").hide();
    });
});
*/
/*var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('.nextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prevbBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});*/
$('.owl-carousel').owlCarousel({
       items:1,
       loop:false,
       center:true,
       margin:10,
       URLhashListener:true,
       autoplayHoverPause:true,
       startPosition: 'URLHash'
   });