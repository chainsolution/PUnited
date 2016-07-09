/** Banner slide **/
/*************/
var animateSlide;
animateSlide = function() {
    var current, next;
    // Time for opacity to appear the image in milisecond
    var fadeinTime = 3000;
    // Time to show the image in milisecond
    var appearTime = 6000;
    // Time to disappear the image with opacity in milisecond
    var fadeoutTime = 900;
    // atfer 1s removed the loading gif image.
    setTimeout(function() {
        $(".site_banner .load_banner").removeClass("loading");
    }, 1000);

    // funtion to swicth the banner image.
    (function switchImg() {

        // Query the document to get the first,next image
        current = $(".site_banner .banner_item.active");
        next = current.next();
        console.log(next.length);

        // check whether it's the last image.
        if (!next.length) {
            next = $(".site_banner .banner_item:first");
            current.find(".item_img").addClass("img_scale");
            current.css("z-index", "1");
            current.animate({
                opacity: 1.0
            }, 3000, function() {
                current.animate({
                    opacity: 0.99
                }, 6000, function() {
                    next.addClass("active");
                    current.removeClass("active");
                    current.find(".item_img").removeClass("img_scale");
                    current.animate({
                        opacity: 0
                    }, 900, function() {
                        current.css("z-index", "0");
                    });
                    switchImg();
                });
            });

        } else {
            // if it's not the last imgae, execute the following
            current.find(".item_img").addClass("img_scale");
            current.css("z-index", "1");
            current.animate({
                opacity: 1.0
            }, 3000, function() {
                current.animate({
                    opacity: 0.99
                }, 6000, function() {
                    next.addClass("active");
                    current.removeClass("active");
                    current.find(".item_img").removeClass("img_scale");
                    current.animate({
                        opacity: 0
                    }, 900, function() {
                        current.css("z-index", "0");
                    });
                    switchImg();
                });
            });
        }
    })();

}

/** initialized the slide banner when page first loaded **/
/****************************************************/
var bannerInitialize;
bannerInitialize = function() {
    $('.site_banner .load_banner').addClass('loading');
}

/** Synchronize mouse scroll with moving object **/
/***********************************************/
var windowScroll;
windowScroll = function() {

    /* Query for header */
    var headbar = $('.site_header');

    /* Query for all objects from doc */
    var tr_obj = $('#triangle_object');
    var cir_obj1 = $('#circle_object');
    var cir_obj2 = $('#cricle_bottom');
    var blue_obj = $('#blue_shape');
    var stick_obj = $('#stick_object');

    /* Find the offset top of each objects */
    var tr_obj_top = tr_obj.offset().top;
    var cir_obj1_top = cir_obj1.offset().top;
    var cir_obj2_top = cir_obj2.offset().top;
    var blue_obj_top = blue_obj.offset().top;
    var stick_obj_top = stick_obj.offset().top;

    /**/
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        var Winheight = $(window).height;

        /** Working with moving objects **/
          /****************************/
        if(scrollTop > (tr_obj_top / 2)){
          tr_obj.css('top', (scrollTop / 2) + 'px');
        }

        if(scrollTop > (stick_obj_top / 2 )){
          stick_obj.css('top', (scrollTop / 2) + 'px');
        }

        if(scrollTop > (cir_obj1_top / 2)){
          cir_obj1.css('top', (scrollTop / 2) + 'px');
        }

        if(scrollTop > (cir_obj2_top / 2)){
          cir_obj2.css('top', (scrollTop / 2) + 'px');
        }

        if(scrollTop > (blue_obj_top / 2)){
          blue_obj.css('top', (scrollTop / 2) + 'px');
        }

        /** Set border bottom of header when scroll, and remove when scroll top = 0 **/
          /************************************************************************/

        if (scrollTop > 0) {
            headbar.css("border-bottom", "1px solid #f5f5f5");
        } else {
            headbar.css("border-bottom", "0px");
        }

    });
}


/** Resize the height of banner slide, when window width get resize smaller **/
/***********************************************************************/
var resizeBannerHeight;
resizeBannerHeight = function() {
    var banner, bannerWidth, bannerHeight, bannerRatio, winWidth;

    banner = $('.banner_inner');
    /* Function to resize the height of banner to the right aspect ratio */
    (function() {

        bannerWidth = banner.width();
        bannerHeight = banner.height();
        bannerRatio = 1300 / 600;
        banner.css("height", (bannerWidth / bannerRatio) + "px");
        $(window).resize(function() {
            winWidth = $(window).width();
            bannerWidth = banner.width();
            if (winWidth < 900) {
                banner.css({
                    "height": (bannerWidth / (bannerRatio * 1.1)) + "px"
                });
            } else {
                banner.css({
                    "height": (bannerWidth / bannerRatio) + "px"
                });
            }

        });
    })();

}

/** Check user-agent : mobile or computer **/
/**************************************/
/*
    #Benefit : do somthing for only mobile
*/

var checkUserAgent = function() {
    if (navigator.userAgent.match(/Mobi/)) {
        $('head').append('<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">');
        return ('ontouchstart' in document.documentElement);
    }
}

$(window).load(function() {
    checkUserAgent();
});

$(document).ready(function() {
    bannerInitialize();
    animateSlide();
    windowScroll();
    resizeBannerHeight();
});
