<html>
<head>
	<title><?php echo $page_title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php 
		// loop through array keys, value of meta description
		foreach($meta_content as $name => $content) {
			echo '<meta name="'.$name.'" content="'.$content.'">';
		} 
	?>
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="index" href="../[SITE_MAP_PATH]">
	<link rel="start" href="../[SITE_URL]" title="Home">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js-src/libs/jquery3.min.js"><\/script>')</script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js-src/useful.js"></script>
	<script src="assets/js-src/common.js"></script>
	<!--[if lt IE 9]>
	<script src="../../js/html5shiv-printshiv.js"></script>
	<script src="../../js/selectivizr-min.js"></script>
	<![endif]-->
</head>
<body>

<!-- header -->
<div class="site_header">
	<div class="site_container">
		<div class="site_logo">
			<img src="assets/img/common/logo/site_header_logo.png" height="42" width="158">
		</div>
		<nav class="global_nav">
			<ul>
				<li class="relative"><a href="page/about_us.php">ABOUT US</a>
					<ul>
						<li><a href="page/about/greeting.php">GREETING</a></li>
						<li><a href="page/about/philosophy.php">PHILOSOPHY</a></li>
						<li><a href="page/about/profile.php">COMPANY PROFILE</a></li>
						<li><a href="page/about/history.php">HISTORY</a></li>
						<li><a href="page/about/privacy.php">PRIVACY &amp; POLICY</a></li>
						<li><a href="page/about/en/about_us.php">ABOUT US (EN)</a></li>
					</ul>
				</li>
				<li><a href="#business_domain">BUSINESS DOMAIN</a></li>
				<li><a href="#works">WORKS</a></li>
				<li><a href="#news">NEWS</a></li>
				<li><a href="#recruit">RECRUIT</a></li>
				<li class="over_black"><a href="page/contact.php">CONTACT</a></li>
			</ul>
		</nav>
	</div>
</div>
<!-- /header -->