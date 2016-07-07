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

	$meta = new MetaDescription('greeting');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
	include(dirname(dirname(__DIR__)).'/php/includes/overlay_banner.php');
?>


<div class="site_md_container">
	
	<!-- Page content -->
	<div class="page_content">

		<!-- Greeting page content wrapper -->
		<div class="greeting">
			<div class="content_inner">

				<!-- Page heading title -->
				<div class="section_heading">
					<h1>ごあいさつ</h1>
					<span class="lang_en">GREETING</span>
				</div>
				<!-- /Page heading title -->

				<!-- Greeting message -->
				<div class="content">
					<article>
						<div class="paragraph">

							<p>
								私たち「ビザビ」は、2014年9月にお陰さまで創業80周年を迎えました。<br>
								これもひとえに地域の多くの皆様方のご支援の賜物と、ここに深謝申し上げます。
							</p>

							<p>
								これからは次の節目であります90周年、さらには100周年に向けて「情報文化の創造を通じて、
								社会を豊かに楽しくする」という企業理念の下、新たなる事業にも積極的にチャレンジし、地
								域活性化の一役を担うべく、全社一丸となって業務に邁進していく所存です。 
							</p>

							<p>
								21世紀に入り、ICTはさらに進化し、コミュニケーション事業を取り巻く環境は大きく変化して参りました。 
								「いつでも、どこでも、何でも、誰でも」ネットワークに接続し情報の受発信ができるユビキタス社会が到来したといっても過言ではないでしょう。
								さらにデバイスの進化や人工知能技術の進化等さらなる技術進化が生まれようとしています。そうした技術の進化の中に合っても、フランス語で「互いが顔を向け合い、見つめ合うこと」を意味します社名「ビザビ」の名のとおり、直接お会いした上での心の通うコミュニケーションを大切にし、地域の方々の価値創造に向けて「新しい、うれしい、面白い」情報や企画をお届けする「クリエイティブ・カンパニー」、地域に根差しながらもグローバルな視点を持つ「スーパーローカル」な存在として取り組みを進めてまいります。
							</p>

						</div>
						<div class="profile">
							<img src="assets/img/about_us/greeting/about_us_en_ceo_profile_03.png">
						</div>
					</article>
				</div>
				<!-- /Greeting message -->
			</div>
		</div>
		<!-- /Greeting page content wrapper -->
	</div>
	<!-- /Page content -->

</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>