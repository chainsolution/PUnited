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

	ns.SmoothScrollTo = function(id){

		var top = $('#'+id).offset().top - 70;
		$('html,body').stop().animate({ scrollTop: top },900,'swing');
		return false;
	}
	
})();



