(function windowScroll(){
	var banner = $('.site_banner');
	var bannerInner = banner.find('.banner_inner');
	$(window).resize(function(){
		var winWidth = $(window).width();
		if(winWidth < 500){
			alert(bannerInner.find('img').height());
		}
	});
})();

