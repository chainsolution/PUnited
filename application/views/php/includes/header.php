<html>
<head>
	<title><?php echo $page_title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php 
		// loop through array keys, value of meta description
		foreach($meta_content as $name => $content) {
			echo '<meta name="'.$name.'" content="'.$content.'">';
		} 
	?>
	
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="assets/img/favicon/manifest.json">
	<link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js-src/libs/jquery3.min.js"><\/script>')</script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/useful.js"></script>
	<script src="assets/js/common.js"></script>
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv-printshiv.js"></script>
	<script src="assets/js/selectivizr-min.js"></script>
	<![endif]-->
</head>
<body>

<!-- header -->
<div class="site_header">
	<div class="site_md_container">
		<div class="site_logo">
			<div class="logo_inner">
				<a href="index.php"><img src="assets/img/common/logo/site_header_logo.png"></a>
			</div>
		</div>
		<nav class="global_nav">
			<ul>
				<li class="relative"><a href="about_jp">ABOUT US</a>
					<ul>
						<li><a href="greeting">ごあいさつ</a></li>
						<li><a href="philosophy">企業理念</a></li>
						<li><a href="profile">会社概要</a></li>
						<li><a href="history">沿革</a></li>
						<li><a href="privacy">プライバシーポリシー</a></li>
						
					</ul>
				</li>
				<li><a onclick="PUNITED.useful.SmoothScrollTo('business_domain');" href="#">BUSINESS DOMAIN</a></li>
				<li><a onclick="PUNITED.useful.SmoothScrollTo('works');" href="#">WORKS</a></li>
				<li><a onclick="PUNITED.useful.SmoothScrollTo('news');" href="#">NEWS</a></li>
				<li><a onclick="PUNITED.useful.SmoothScrollTo('recruit');" href="#">RECRUIT</a></li>
				<li class="over_black"><a href="page/contact.php">CONTACT</a></li>
			</ul>
		</nav>
		<div class="toggle_menu">
			<button onclick="PUNITED.useful.toggleMenu('#mobile_global_nav');">&#9776;</button>
		</div>
	</div>
</div>
<!-- /header -->

<!-- mobile global navigation -->
<nav id="mobile_global_nav">
	<div class="button_outer">
		<button onclick="PUNITED.useful.toggleMenu('#mobile_global_nav','#dropdown_ul');">X</button>
	</div>
	<ul>
		<li class="toggle_about_nav" onclick="PUNITED.useful.toggleMenu('#dropdown_ul');">ABOUT US <span><img src="assets/img/common/icons/icon_arrow_down_10.png"></span></li>
		<li>
			<ul id="dropdown_ul">
				<li><a href="about_jp">ABOUT US トップ</a></li>
				<li><a href="greeting">ごあいさつ</a></li>
				<li><a href="philosophy">企業理念</a></li>
				<li><a href="profile">会社概要</a></li>
				<li><a href="history">沿革</a></li>
				<li><a href="privacy">プライバシーポリシー</a></li>
			</ul>
		</li>
		<li><a onclick="PUNITED.useful.SmoothScrollTo('business_domain');" href="#">BUSINESS DOMAIN</a></li>
		<li><a onclick="PUNITED.useful.SmoothScrollTo('works');" href="#">WORKS</a></li>
		<li><a onclick="PUNITED.useful.SmoothScrollTo('news');" href="#">NEWS</a></li>
		<li><a onclick="PUNITED.useful.SmoothScrollTo('recruit');" href="#">RECRUIT</a></li>
		<li class="over_black"><a href="page/contact.php">CONTACT</a></li>
	</ul>
</nav>
<!-- /mobile global navigation -->