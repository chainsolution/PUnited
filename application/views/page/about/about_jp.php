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

<div class="site_container">
	<div class="banner_no_navbar">
		<img src="assets/img/about_us/banner/about_us_clear_banner_01.png">
		<div class="overlay_title">
			<sup>`</sup>
			<span>ABOUT US</span>
		</div>
	</div>
</div>

<div class="site_md_container">

	<div class="page_content">
		<div class="about_jp">
			<div class="top_content">

				<div class="language_options">
					<a class="active" href="about_jp">Japanese</a>
					<a href="about_en">English</a>
				</div>

				<article>
					<h1>
						このウェブサイトの約ページ内の記事のタイトルのためだけのダミーコンテンツである、
						会社の会議は2016年6月9日に開催されました
					</h1>
					<p>
						事業の成長のの将来の技術革新について議論します。
					</p>
					<p>
						このウェブサイトの約ページ内の記事のタイトルのためだけのダミーコンテンツである、
						会社の会議は6月9日、2016年の会社の将来についての会議の話に開催し、
						事業の成長のpotentailの将来の技術革新について議論します。
						すべてのスタッフが参加する場合には参考になります事業の成長のの将来の技術革新について議論します。
					</p>
				</article>

				<div class="business_domain_nav">
					
				</div>

				<div class="about_page_nav">

					<div class="page_nav">
						<a href="greeting" class="greeting_nav">
							<img src="assets/img/about_us/jp/about_us_title_greeting_01.png">
							<div class="caption text_left">
								<div>
									<h3>会社の挨拶</h3>
									<span>GREETING</span>
								</div>
							</div>
						</a>
					</div>

					<div class="page_nav">
						<a href="philosophy" class="philosophy_nav">
							<img src="assets/img/about_us/jp/about_us_title_philosophy_02.png">
							<div class="caption text_left">
								<div>
									<h3>企業哲学</h3>
									<span>PHILOSOPHY</span>
								</div>
							</div>
						</a>

						<a href="profile" class="profile_nav">
							<img src="assets/img/about_us/jp/about_us_title_profile_03.png">
							<div class="caption text_left">
								<div>
									<h3>会社概要</h3>
									<span>PROFILE</span>
								</div>
							</div>
						</a>
					</div>

				</div>
				
				<div class="about_page_nav">
					<div class="page_nav">
						<a href="history" class="history_nav">
							<img src="assets/img/about_us/jp/about_us_title_history_04.png">
							<div class="caption text_left">
								<div>
									<h3>会社の歴史</h3>
									<span>HISTORY</span>
								</div>
							</div>
						</a>
					</div>

					<div class="page_nav">
						<a href="privacy" class="privacy_nav">
							<img src="assets/img/about_us/jp/about_us_title_privacypolicy_05.png">
							<div class="caption text_left">
								<div>
									<h3>個人情報保護方針</h3>
									<span>PRIVACY POLICY</span>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>