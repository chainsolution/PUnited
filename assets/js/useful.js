/* -------------------------------------------------------------------------

	PUNITED.useful
	
	
------------------------------------------------------------------------- */

var PUNITED;
if (!PUNITED) PUNITED = {}; 
if (!PUNITED.useful) PUNITED.useful = {}; 

(function (){

	var ns = PUNITED.useful;
	
	/** Smooth scroll to the top **/
	   /***********************/
	ns.jumpToPageTop = function() {
		$('html,body').stop().animate({ scrollTop: 0 }, 1000);
		return false;
	}

	/** Smooth scroll to anchor in page **/
	  /********************************/
	/* 
		#usage : calling function => 
		PUNITED.useful.SmoothScrollTo("element id");
		use with event onClick(), onMouseover() etc.
	*/

	ns.SmoothScrollTo = function(id){
		var top = $('#'+id).offset().top - 60;
		$('#mobile_global_nav').slideUp();
		$('html,body').stop().animate({ scrollTop: top },900,'swing');
		return false;
	}

	/** Toggle navigation bar in mobile or smaller screen **/
	  /**************************************************/
	/* 
		#usage : calling function => 
		PUNITED.useful.toggleMenu("class/id name with . or #");
		use with event onClick(), onMouseover() etc.
	*/
	ns.toggleMenu = function(target, extra){
		var extra = typeof extra !== 'undefined' ? extra : false;
		if(extra !== false){
			if(extra=='noscroll'){
				$('body').toggleClass('mobile_nav_open');
			}else{
				$(extra).fadeOut(100);
				$('body').toggleClass('mobile_nav_open');
			}
		}

		$(target).slideToggle(500);
	}
	
})();



