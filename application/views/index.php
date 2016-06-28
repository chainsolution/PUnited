<?php
	
	// class MetaDescription : contain all the meta header and page title array,
	require("php/function/MetaDescription.php");

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
	include "php/includes/header.php";
?>

<!-- svg filter for frosted glass background effect -->
<div style="display:none;">
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
	  <defs>
	    <filter id="frostedGlass">
	      <feGaussianBlur stdDeviation="10" />
	    </filter>
	  </defs>
	</svg>
</div>

<!-- banner -->
<div class="site_banner">
	<div class="banner_inner">
		<ul class="banner_list">

			<li class="banner_item active" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<div>
							<span>新しい、うれしい、おもしろいを</span>
							<span>創りつづける</span>
						</div>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_01.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<div>
							<span>新しい、うれしい、おもしろいを</span>
							<span>創りつづける</span>
						</div>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_02.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<div>
							<span>新しい、うれしい、おもしろいを</span>
							<span>創りつづける</span>
						</div>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_03.png">
					</div>
				</div>
			</li>
		</ul>
		<div class="scroll_bottom">
			<span onclick="PUNITED.useful.SmoothScrollTo('overview');"><img src="assets/img/common/icons/icon_scroll_to_bottom_08.png"></span>
		</div>
	</div>

	<div class="load_banner"></div>
</div>
<!-- /banner -->

<div class="site_container">
	<!-- page content -->
	<div class="page_content">

		<!-- overview -->
		<div id="overview">
			<article>
				<h4>会社統合のごあいさつ</h4>
				<p>2016年4月、新生ビザビがスタートします。</p>
				<p>１社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。もともとの「心はひとつ」です。</p>
				<p>その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。</p>
				<p>この一念を持ち続け、常にお客様のために、自らをS・H・I・N・K・A（賑化・真化・信化・親化・深化・伸化・進化・新化）させてきました。</p>
				<p>この１社体制もS・H・I・N・K・Aの通過点です。</p>
				</p>
				<p>お客様から</p>
				<p>「ビザビ、また新しいことはじめたね！」「ビザビ、うれしいことやってくれるね！」「ビザビ、なんだか面白いことやってるなあ！」</p>
				<p>と言っていただける存在であり続けるために、ビザビ全員で前向きに歩みつづけます。</p>
				<p>ビザビ一人ひとりの成長がお客様の発展につながり地域の元気になる。このような心意気で努力してまいります。</p>
				<p>どうぞ新生ビザビにご期待ください。</p>
				
			</article>
		</div>
		<!-- /overview -->

		<!-- business domain -->
		<div id="business_domain">
			
			<div class="content_inner">
				<!-- headring title -->
				<div class="section_heading">
					<h1>BUSINESS DOMAIN</h1>
					<span>現代のビジネスコンセプト</span>
				</div>
				<!-- /headring title -->

				<!-- business content -->
				<div class="content">

					<!-- first row -->
					<div class="row">
						<div class="canvas_box_container">

							<div class="canvas_box frosted_glass">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_research_04.png">
									</figure>
									<div class="title">
										<h4>研究</h4>
										<span>RESEARCH</span>
									</div>
								</a>
							</div>

							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_area_content_06.png">
									</figure>
									<div class="title">
										<h4>エリアコンテンツ</h4>
										<span>AREA CONTENT</span>
									</div>
								</a>
							</div>
				
							<div class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_advertising_pr_02.png">
									</figure>
									<div class="title">
										<h4>広告 - PR</h4>
										<span>ADVERTISING/PR</span>
									</div>
								</a>
							</div>

							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
					
							<div class="canvas_box frosted_glass">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_recruit_05.png">
									</figure>
									<div class="title">
										<h4>リクルート</h4>
										<span>RECRUIT</span>
									</div>
								</a>
							</div>

							<div class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_event_01.png">
									</figure>
									<div class="title">
										<h4>イベント</h4>
										<span>EVENT</span>
									</div>
								</a>
							</div>

							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>

							<div class="canvas_box frosted_glass float_r_sm">
								<a href="#" class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_internet_03.png">
									</figure>
									<div class="title">
										<h4>インターネット</h4>
										<span>INTERNET</span>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
				<!-- /business content -->
			</div>

		</div>
		<!-- /business domain -->
		
		<!-- works -->
		<!-- last added -->
		<div id="works">
			<div class="content_inner">

				<div class="section_heading">
					<h1>WORKS</h1>
					<span>マイルストーンの作品</span>
					<span>私達は私達の顧客のために行われてきた作品</span>
					
					<a href="#" class="more_btn"> > MORE </a>
					
				</div>

				<div class="content">
					<div class="row">
						<div class="canvas_box_container">

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_01.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_02.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_03.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_04.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_05.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_06.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_07.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_08.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

							<div class="canvas_box striped hide_sm">
								<div class="inner">
									<figure>
										<img src="assets/img/main/works/main_works_img_09.png">
									</figure>
									<div class="title">
										<span>例えば、タイトルコンテンツの No.71</span>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /work -->

		<!-- News -->
		<div id="news">
			<div class="content_inner">

				<div class="section_heading">
					<div class="inner show_sm">
						<h1>NEWS</h1>
						<span>ビジネスマイルストーン</span>
						<span>一時的な記事</span>
					</div>
				</div>

				<div class="content">
					<div class="row">
					
						<div class="left_news_heading hide_sm">
							<div class="news_heading_canvas frosted_glass">
								<div class="inner">
									<h1>NEWS</h1>
									<span>ビジネスマイルストーン</span>
									<span>一時的な記事</span>
									<a href="#" class="more_btn">> MORE</a>
								</div>
							</div>
						</div>

						<div class="canvas_box_container">
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

							<div class="canvas_box frosted_glass">
								<div class="inner">
									<div class="heading">
										<p><span class="date">2016/1/25</span><span class="topic">サンプルタイトル</span></p>
									</div>
									<p class="news_paragraph">
										これは、このウェブサイトのニュースセクションのためだけの一時的なコンテンツの段落があった。
									</p>
								</div>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /News -->

		<!-- Recruit -->
		<div id="recruit">
			<div class="content_inner">
				<div class="section_heading">
					<h1>RECRUIT</h1>
					<span>これは、このウェブサイトのニュ</span>
				</div>

				<div class="content">
					<div class="row">
						<div class="left_box">
							<div class="inner">
								<figure>
									<img src="assets/img/main/recruit/main_recruit_man_img_01.png">
								</figure>
								<div class="box_title">
									<h2>このウサ</h2>
								</div>
							</div>
						</div>
						<div class="right_box">
							<div class="inner">
								<div class="top_img">
									<figure>
										<img src="assets/img/main/recruit/main_recruit_woman_img_02.png">
									</figure>
									<div class="box_title">
										<h2>このウブ</h2>
									</div>
								</div>
								
								<a href="http://facebook.com" class="fb_canvas">
									<div>
										<h2 class="kanji">このウブ</h2>
										<h2 class="en">Facebook</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Recruit -->

	</div>
	<!-- /page content -->
</div>
<!-- /site container -->

<?php include("php/includes/footer.php"); ?>