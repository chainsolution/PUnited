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

	$meta = new MetaDescription('about');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
?>

<div class="fluid_container">
	<div class="banner_no_navbar">
		<img src="public_html/img/about_us/banner/about_us_clear_banner_01.png">
		<div class="overlay_title">
			<sup>`</sup>
			<span>ABOUT US</span>
		</div>
	</div>
</div>

<div class="site_md_container">
	
	<!-- Page content -->
	<div class="page_content">
		<div class="about_jp">
			<div class="top_content">

				<div class="language_options">
					<a class="active" href="about_jp">Japanese</a>
					<a href="about_en">English</a>
				</div>
				
				<!-- Top first row -->
				<div class="row">

					<article>
						<h1>
							株式会社ビザビは2016年4月に1社体制となりました。<br>
							グループ各社が持っていた専門能力を一つに集中させ、 人と人とをつなぐコミュニケーションのお手伝いをしています。
						</h1>
						<p>
							ビザビは、昭和9年の創業からこれまでの間、岡山を中心とした地域の皆様とともに歩んでまいりました。
							調査、広告・PR、地域コンテンツ、人材・採用、イベント、インターネットという、それぞれに専門的な能力を持っています。
							広告の制作やイベントの開催だけではではなく、調査×広告や、イベント×インターネットなど、各専門領域を複合的に組み合わせた新しい価値や、ビジネスの問題解決に必要な多様な領域を、ワンストップでご提供いたします。
						</p>
					</article>

					<div class="business_domain_nav">

						<div class="wrap_content">
							<img src="public_html/img/about_us/jp/about_us_jp_business_domain_nav.png">
						</div>

					</div>

				</div>
				<!-- /Top first row -->

				<!-- Navigation images / Row 1 -->
				<div class="about_page_nav">
					<div class="page_nav">
						<a href="greeting" class="greeting_nav">
							<figure>
								<img src="public_html/img/about_us/jp/about_us_title_greeting_01.png">
							</figure>
							<div class="caption text_left">
								<div class="inner">
									<h3 class="lang_jp">ごあいさつ</h3>
									<span class="lang_en">GREETING</span>
								</div>
							</div>
						</a>
					</div>

					<div class="page_nav">
						<a href="philosophy" class="philosophy_nav">
							<figure>
								<img src="public_html/img/about_us/jp/about_us_title_philosophy_02.png">
							</figure>
							<div class="caption text_left">
								<div class="inner">
									<h3 class="lang_jp">企業理念</h3>
									<span class="lang_en">PHILOSOPHY</span>
								</div>
							</div>
						</a>

						<a href="profile" class="profile_nav">
							<figure>
								<img src="public_html/img/about_us/jp/about_us_title_profile_03.png">
							</figure>
							<div class="caption text_left">
								<div class="inner">
									<h3 class="lang_jp">会社概要</h3>
									<span class="lang_en">PROFILE</span>
								</div>
							</div>
						</a>
					</div>

				</div>
				<!-- /Navigation images / Row 1-->
				
				<!-- Navigation images / Row 2 -->
				<div class="about_page_nav">
					<div class="page_nav">
						
						<a href="history" class="history_nav">
							<figure>
								<img src="public_html/img/about_us/jp/about_us_title_history_04.png">
							</figure>
							<div class="caption text_left">
								<div class="inner">
									<h3 class="lang_jp">沿革</h3>
									<span class="lang_en">HISTORY</span>
								</div>
							</div>
						</a>
					</div>

					<div class="page_nav">
						
						<a href="privacy" class="privacy_nav">
							<figure>
								<img src="public_html/img/about_us/jp/about_us_title_privacypolicy_05.png">
							</figure>
							<div class="caption text_left">
								<div class="inner">
									<h3 class="lang_jp">プライバシーポリシー</h3>
									<span class="lang_en">PRIVACY POLICY</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- /Navigation images / Row 2 -->

			</div>
		</div>
	</div>
	<!-- Page content -->

</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>