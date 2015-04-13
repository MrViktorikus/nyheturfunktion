$(function(){

	//Init Navigation
	var nav = $('.swiper-nav').swiper({
		slidesPerView: 'auto',
		freeMode:false,
		freeModeFluid:false,
		onSlideClick: function(nav){
			pages.swipeTo( nav.clickedSlideIndex )
		}
	})

	//Function to Fix Pages Height
	function fixPagesHeight() {
		$('.swiper-pages, swiper-slide').css({
			height: $(window).height()-nav.height
		})
	}
	$(window).on('resize',function(){
		fixPagesHeight()
	})
	fixPagesHeight()

	//Init Pages
	var pages = $('.swiper-pages').swiper()

})