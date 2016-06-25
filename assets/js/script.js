
/** Banner slide **/
  /*************/
var animateSlide;
  animateSlide = function (){
    var current,next;
    // Time for opacity to appear the image in milisecond
    var fadeinTime = 3000;
    // Time to show the image in milisecond
    var appearTime = 6000;
    // Time to disappear the image with opacity in milisecond
    var fadeoutTime = 900;
    // atfer 1s removed the loading gif image.
    setTimeout(function(){
      $(".site_banner .load_banner").removeClass("loading");
    },1000);

    // funtion to swicth the banner image.
    (function switchImg(){

      // Query the document to get the first,next image
      current = $(".site_banner .banner_item.active");
      next = current.next();
      console.log(next.length);

      // check whether it's the last image.
      if(!next.length){
        next = $(".site_banner .banner_item:first");
        current.find(".item_img").addClass("img_scale");
        current.css("z-index","1");
        current.animate({opacity:1.0},3000,function(){
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
        current.css("z-index","1");
        current.animate({opacity:1.0},3000,function(){
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
      }
    })();

  }

/** initialized the slide banner when page first loaded **/
  /****************************************************/
var bannerInitialize;
bannerInitialize = function(){
  $('.site_banner .load_banner').addClass('loading');
}


/** Set border bottom for global nav when scroll down, and remove when at the top **/
  /*****************************************************************************/
var setNavBarBorder;
setNavBarBorder = function(){
  var headbar = $('.site_header');
  $(window).scroll(function(){
    var scrolltop = $(window).scrollTop();
    if(scrolltop>0){
      headbar.css("border-bottom","1px solid #f5f5f5");
    }else{
      headbar.css("border-bottom","0px");
    }
  });
}

/** Resize the height of banner slide, when window width get resize smaller **/
  /***********************************************************************/
  var resizeBannerHeight;
  resizeBannerHeight = function(){
    var banner, bannerWidth, bannerHeight, bannerRatio, winWidth;

    banner = $('.banner_inner');
    /* Function to resize the height of banner to the right aspect ratio */ 
    (function(){
      
      bannerWidth = banner.width();
      bannerHeight = banner.height();
      bannerRatio = 1300 / 600;
      $(window).resize(function(){
        winWidth = $(window).width();
        bannerWidth = banner.width();
        if(winWidth < 900){
          banner.css({"height": (bannerWidth / (bannerRatio * 1.2))+"px"});
        }else{
          banner.css({"height": (bannerWidth / bannerRatio)+"px"});
        }
        
      });
    })();

  }

$(document).ready(function(){
  bannerInitialize();
  animateSlide();
  setNavBarBorder();
  resizeBannerHeight();
});

