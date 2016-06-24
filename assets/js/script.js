
/** Banner slide **/
  /*************/
var animateSlide;
  animateSlide = function (){
      // Time for opacity to appear the image in milisecond
      var fadeinTime = 3000;
      // Time to show the image in milisecond
      var appearTime = 6000;
      // Time to disappear the image with opacity in milisecond
      var fadeoutTime = 900;
      // atfer 1s removed the loading gif image.

      // Query the document to get the first,next image

    // funtion to swicth the banner image.
    (function switchImg(){
      var current = $(".site_banner .banner_item.active");
      var next = current.next();
      // check whether it's the last image.
      if(!next.length){
        next = $(".site_banner .banner_item:first");
        current.find(".item_img").addClass("img_scale");
        current.css("z-index","1").animate({opacity:1.0},3000,function(){
          current.animate({opacity:0.99},6000,function(){
            next.addClass("active");
            current.removeClass("active");
            current.find(".item_img").removeClass("img_scale");
            current.animate({opacity:0},900,function(){
              
              current.css("z-index","0");
            });
            switchImg();
          });
        });

      }else{
        // if it's not the last imgae, execute the following
        current.find(".item_img").addClass("img_scale");
        current.css("z-index","1").animate({opacity:1.0},3000,function(){
          current.animate({opacity:0.99},6000,function(){
            next.addClass("active");
            current.removeClass("active");
            current.find(".item_img").removeClass("img_scale");
            current.animate({opacity:0},900,function(){
              
              current.css("z-index","0");
            });
            switchImg();
          });
        });

  };

/** initialized the slide banner when page first loaded **/
  /****************************************************/
var bannerInitialize;
bannerInitialize = function(){
  $('.site_banner .load_banner').addClass('loading');
};

/* ---------------------------------------------------------
  Set the height of banner to expand
  entire window height, when document has loaded
  ---------------------------------------------------------- */
var setBannerHeight;
setBannerHeight = function(){
  var winHeight = $(window).height();
  $('.site_banner .banner_inner').css("height",winHeight+"px");
};

$(document).ready(function(){
  animateSlide();
});

