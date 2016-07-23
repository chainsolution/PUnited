//@prepros-append main.js
//@prepros-append useful.js
//@prepros-append common.js
//@prepros-append analytics.js

;/** Banner slide **/
/*************/
var animateSlide;animateSlide=function(){var current,next;
// atfer 1s removed the loading gif image.
setTimeout(function(){$(".site_banner .load_banner").removeClass("loading")},1e3),
// funtion to swicth the banner image.
function switchImg(){current=$(".site_banner .banner_item.active"),next=current.next(),next.length?(current.find(".item_img").addClass("img_scale"),current.css("z-index","1"),current.animate({opacity:1},3e3,function(){current.animate({opacity:.99},6e3,function(){next.addClass("active"),current.removeClass("active"),current.find(".item_img").removeClass("img_scale"),current.animate({opacity:0},900,function(){current.css("z-index","0")}),switchImg()})})):(next=$(".site_banner .banner_item:first"),current.find(".item_img").addClass("img_scale"),current.css("z-index","1"),current.animate({opacity:1},3e3,function(){current.animate({opacity:.99},6e3,function(){next.addClass("active"),current.removeClass("active"),current.find(".item_img").removeClass("img_scale"),current.animate({opacity:0},900,function(){current.css("z-index","0")}),switchImg()})}))}()};/** initialized the slide banner when page first loaded **/
/****************************************************/
var bannerInitialize;bannerInitialize=function(){$(".site_banner .load_banner").addClass("loading")};/** Synchronize mouse scroll with moving object **/
/***********************************************/
var windowScroll;windowScroll=function(){/* Query for header */
var headbar=$(".site_header"),tr_obj=$("#triangle_object"),cir_obj1=$("#circle_object"),cir_obj2=$("#cricle_bottom"),stick_obj=$("#stick_object"),blue_shape=$("#blue_shape"),tr_obj_top=($(tr_obj).offset()||{top:NaN}).top,cir_obj1_top=($(cir_obj1).offset()||{top:NaN}).top,cir_obj2_top=($(cir_obj2).offset()||{top:NaN}).top,stick_obj_top=($(stick_obj).offset()||{top:NaN}).top,blue_shape_top=($(blue_shape).offset()||{top:NaN}).top;/**/
$(window).scroll(function(){var scrollTop=$(window).scrollTop();$(window).height;/** Working with moving objects **/
/****************************/
isNaN(tr_obj_top)||scrollTop>tr_obj_top/2&&tr_obj.css("top",scrollTop/2.3+"px"),isNaN(cir_obj1_top)||scrollTop>cir_obj1_top/2&&cir_obj1.css("top",scrollTop/9+"px"),isNaN(cir_obj2_top)||scrollTop>cir_obj2_top/2&&cir_obj2.css("top",scrollTop/2.1+"px"),isNaN(stick_obj_top)||scrollTop>stick_obj_top/1.4&&stick_obj.css("top",scrollTop/2.6+"px"),isNaN(blue_shape_top)||scrollTop>blue_shape_top/1.1&&blue_shape.css("top",scrollTop/3.5*.5+"px"),/** Set border bottom of header when scroll, and remove when scroll top = 0 **/
/************************************************************************/
scrollTop>0?headbar.css("border-bottom","1px solid #f5f5f5"):headbar.css("border-bottom","0px")})};/** Resize the height of banner slide, when window width get resize smaller **/
/***********************************************************************/
var resizeBannerHeight;resizeBannerHeight=function(){var banner,bannerWidth,bannerHeight,bannerRatio,winWidth;banner=$(".banner_inner"),function(){bannerWidth=banner.width(),bannerHeight=banner.height(),bannerRatio=1300/600,banner.css("height",bannerWidth/bannerRatio+"px"),$(window).resize(function(){winWidth=$(window).width(),bannerWidth=banner.width(),900>winWidth?banner.css({height:bannerWidth/(1.1*bannerRatio)+"px"}):banner.css({height:bannerWidth/bannerRatio+"px"}),winWidth>768&&($("#mobile_global_nav").fadeOut(300),$("#dropdown_ul").fadeOut(300))})}()};/** Animation for overlay hover **/
/****************************/
var overlayAnimation;overlayAnimation=function(){$("#business_domain .frosted_glass").mouseenter(function(){$(this).find(".overlay_caption").fadeIn(180),$(this).find("figure").addClass("img_scale")}).mouseleave(function(){$(this).find(".overlay_caption").fadeOut(180),$(this).find("figure").removeClass("img_scale")}),$("#works .canvas_box").mouseenter(function(){$(this).find(".overlay_caption").fadeIn(180),$(this).find("figure").addClass("img_scale")}).mouseleave(function(){$(this).find(".overlay_caption").fadeOut(180),$(this).find("figure").removeClass("img_scale")})};/** Check user-agent : mobile or computer **/
/**************************************/
/*
    #Benefit : do somthing for only mobile
*/
var checkUserAgent=function(){return navigator.userAgent.match(/Mobi/)?($("head").append('<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">'),"ontouchstart"in document.documentElement):void 0};$(window).load(function(){checkUserAgent()}),$(document).ready(function(){bannerInitialize(),animateSlide(),resizeBannerHeight(),overlayAnimation(),windowScroll()});
/* -------------------------------------------------------------------------

	PUNITED.useful
	
	
------------------------------------------------------------------------- */
var PUNITED;PUNITED||(PUNITED={}),PUNITED.useful||(PUNITED.useful={}),function(){var ns=PUNITED.useful;/** Smooth scroll to the top **/
/***********************/
ns.jumpToPageTop=function(){return $("html,body").stop().animate({scrollTop:0},1e3),!1},/** Smooth scroll to anchor in page **/
/********************************/
/* 
		#usage : calling function => 
		PUNITED.useful.SmoothScrollTo("element id");
		use with event onClick(), onMouseover() etc.
	*/
ns.SmoothScrollTo=function(id){var top=$("#"+id).offset().top-60;return $("#mobile_global_nav").slideUp(),$("html,body").stop().animate({scrollTop:top},900,"swing"),!1},/** Toggle navigation bar in mobile or smaller screen **/
/**************************************************/
/* 
		#usage : calling function => 
		PUNITED.useful.toggleMenu("class/id name with . or #");
		use with event onClick(), onMouseover() etc.
	*/
ns.toggleMenu=function(target,extra){var extra="undefined"!=typeof extra?extra:!1;extra!==!1&&("noscroll"==extra?$("body").toggleClass("mobile_nav_open"):"toggleicon"==extra?$(".dropdown_icon").toggleClass("hide"):($(extra).fadeOut(100),$("body").toggleClass("mobile_nav_open"))),$(target).slideToggle(500)}}();
/* -------------------------------------------------------------------------
	
------------------------------------------------------------------------- */
var PUNITED;PUNITED||(PUNITED={}),PUNITED.common||(PUNITED.common={}),function(){var ns=PUNITED.common;ns.functionName=function(){}}(),$(function(){});
/* -----------------------------------------------------

	analytics.js
	Google Analytics用コード
	
----------------------------------------------------- */

