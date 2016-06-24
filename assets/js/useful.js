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
		$('html,body').stop().animate({ scrollTop: 0 }, 1200);
	}

	ns.SmoothScrollTo = function(id){
		$('html,body').stop().animate({ scrollTop: $('#'+id).offset().top - 70 },1000);
	}
	
})();



