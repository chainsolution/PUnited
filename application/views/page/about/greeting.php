<?php
	
	// class MetaDescription : contain all the meta header and page title array,
	// require "../../php/function/MetaDescription.php";

	require(dirname(dirname(__DIR__)).'/php/function/MetaDescription.php');

	// to get the meta header of a specific page
	// have to instanciate an object of class MetaDescription and construct with following exact string parameter:
	// @string 'home' => return meta header and title of home page.
	// @string 'about' => return meta header and title of about us page.
	// @string 'philosophy' => return meta header and title of philosophy page.
	// @string 'history' => return meta header and title of history page.
	// @string 'greeting' => return meta header and title of greeting page.
	// @string 'contact' => return meta header and title of contact page.
	// @string 'profile' => return meta header and title of profile page.
	// @string 'privacy' => return meta header and title of privacy page.

	$meta = new MetaDescription('home');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
?>

<div class="site_container">
	<div class="overlay_banner">
		<img src="assets/img/about_us/banner/about_us_clear_banner_01.png">
		<div class="overlay_navigation">
			<ul class="overlay_nav">
				<li><a href="#">ごあいさつ</a></li>
				<li><a href="#">企業理念</a></li>
				<li><a href="#">会社概要</a></li>
				<li><a href="#">沿革</a></li>
				<li><a href="#">プライバシーポリシー</a></li>
			</ul>
		</div>
		<div class="overlay_title">
			<span>ABOUT US</span>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>