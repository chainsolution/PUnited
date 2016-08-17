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
	      <feGaussianBlur stdDeviation="6" />
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
							<img src="public_html/img/main/banner/main_banner_title_04.png">
						</div>
					</div>
					<div class="item_img">
						<img src="public_html/img/main/banner/main_banner_01.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<div>
							<img src="public_html/img/main/banner/main_banner_title_04.png">
						</div>
					</div>
					<div class="item_img">
						<img src="public_html/img/main/banner/main_banner_02.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<div>
							<img src="public_html/img/main/banner/main_banner_title_04.png">
						</div>
					</div>
					<div class="item_img">
						<img src="public_html/img/main/banner/main_banner_03.png">
					</div>
				</div>
			</li>
		</ul>
		<div class="scroll_bottom">
			<span onclick="PUNITED.useful.SmoothScrollTo('.overview');"><img src="public_html/img/common/icons/icon_scroll_to_bottom_08.png"></span>
		</div>
	</div>

	<div class="load_banner"></div>
</div>
<!-- /banner -->



<!-- page content -->
<div class="page_content">

	<div class="site_md_container">
		<!-- overview -->
		<div class="overview">
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
			<img class="signature" src="public_html/img/main/overview/main_overview_signature_01.png">
			<!-- Triangle Moving Object -->
			<div id="triangle_object">
				<img src="public_html/img/common/objects/floating_triangle_object_04.png">
			</div>
			<!-- Triangle Moving Object -->
		</div>
		<!-- /overview -->
	</div>

	<div class="fluid_container">
		<!-- business domain -->
		<div class="business_domain">

			<div class="content_inner">

				<!-- Circle Moving Object -->
				<div id="circle_object">
					<img src="public_html/img/common/objects/floating_small_yellow_squere_object_02.png">
				</div>
				<!-- Circle Moving Object -->

				<!-- Big squere Moving -->
				<div id="cricle_bottom">
					<img src="public_html/img/common/objects/floating_large_yellow_squere_object_01.png">
				</div>
				<!-- Big squere Moving -->

				<!-- heading title -->
				<div class="section_heading">
					<h1 class="lang_en">BUSINESS DOMAIN</h1>
					<span class="lang_jp">人と人をつなぐコミュニケーションのお手伝い</span>
				</div>
				<!-- /heading title -->

				<!-- business content -->
				<div class="content">

					<!-- first row -->
					<div class="row">
						<div class="canvas_box_container">
							
							<a href="" class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_research_04.png">
									</figure>
									<div class="title">
										<h4>調査</h4>
										<span>RESEARCH</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>独自のリサーチ&データ管理から地域活性化事業のご提案まで、数多くのデータを分析・検証・加工し、有益な情報として提供します。</span>
									</div>
								</div>
							</a>

							<a href="" class="canvas_box">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box frosted_glass">
								<div href="#" class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_area_content_06.png">
									</figure>
									<div class="title">
										<h4>地域コンテンツ</h4>
										<span>AREA CONTENT</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>岡山を元気にする”をキーワードに、独自の媒体、独自の企画をアグレッシブに展開しています。</span>
									</div>
								</div>
							</a>
				
							<a href="" class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box frosted_glass">
								<div href="#" class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_advertising_pr_02.png">
									</figure>
									<div class="title">
										<h4>広告・PR</h4>
										<span>ADVERTISING/PR</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>企画から構成、運営、広告展開まで、トータルなプロモーションで高い成果をあげています。</span>
									</div>
								</div>
							</a>

							<a href="" class="canvas_box">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box">
								<div class="inner">
									
								</div>
							</a>
					
							<a href="" class="canvas_box frosted_glass">
								<div href="#" class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_recruit_05.png">
									</figure>
									<div class="title">
										<h4>人材・採用</h4>
										<span>RECRUIT</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>私たちがご提案したいのは、人材活用のためのトータルソリューションです。</span>
									</div>
								</div>
							</a>

							<a href="" class="canvas_box hide_sm">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box frosted_glass">
								<div href="#" class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_event_01.png">
									</figure>
									<div class="title">
										<h4>イベント</h4>
										<span>EVENT</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>確固たるコンセプトを構築し、あらゆる要件を充たしたインパクトあるイベントを実現します。</span>
									</div>
								</div>
							</a>

							<a href="" class="canvas_box">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box show_sm">
								<div class="inner">
									
								</div>
							</a>

							<a href="" class="canvas_box frosted_glass float_r_sm">
								<div class="inner">
									<figure>
										<img src="public_html/img/common/icons/icon_internet_03.png">
									</figure>
									<div class="title">
										<h4>インターネット</h4>
										<span>INTERNET</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<span>ICTを活かす。それがこれからのコミュニケーションだと考えます。</span>
									</div>
								</div>
							</a>

						</div>
					</div>
				</div>
				<!-- /business content -->
			</div>

		</div>
		<!-- /business domain -->
	</div>

	<div class="site_md_container">
		<!-- works -->
		<div class="works">

			<div class="content_inner">

				<!-- Blue Shape Moving -->
				<div id="blue_shape">
					<img src="public_html/img/common/objects/floating_blue_object_05.png">
				</div>
				<!-- Blue Shape Moving -->
				<!-- Stick Moving Object -->
				<div id="stick_object">
					<img src="public_html/img/common/objects/floating_stick_object_06.png">
				</div>
				<!-- stick Moving Object -->

				<div class="section_heading">
					<h1 class="lang_en">WORKS</h1>
					<span class="lang_jp">地域生活情報を通して</span>
					<span class="lang_jp">街、企業、お店と生活者とのコミュニケーションを創出</span>
					
					<a href="#" class="more_btn hide_sm"> > MORE </a>
					
				</div>

				<div class="content">
					<div class="row">
						<div class="canvas_box_container">

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_01.png">
									</figure>
									<div class="title">
										<span>Osera  No80 陽春号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_02.png">
									</figure>
									<div class="title">
										<span>月刊タウン情報おかやま 2016年3月号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_03.png">
									</figure>
									<div class="title">
										<span>月刊タウン情報おかやま 2016年2月号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_04.png">
									</figure>
									<div class="title">
										<span>月刊タウン情報おかやま 2016年1月号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_05.png">
									</figure>
									<div class="title">
										<span>Osera  No79 初春号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_06.png">
									</figure>
									<div class="title">
										<span>日刊Webタウン情報おかやま</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_07.png">
									</figure>
									<div class="title">
										<span>岡山学芸館清秀中学校・高等部</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_08.png">
									</figure>
									<div class="title">
										<span>月刊タウン情報おかやま 2015年12月号</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

							<div class="canvas_box striped hide_sm">
								<div class="inner">
									<figure>
										<img src="public_html/img/main/works/main_works_img_09.png">
									</figure>
									<div class="title">
										<span>ランチパスポート vol.8</span>
									</div>
								</div>
								<div class="overlay_caption">
									<div class="flex_inner">
										<a href="">これは単なる一時的な内容です。</a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="full_width_btn show_sm">
						<a class="lang_en" href="#"> > MORE </a>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /work -->
	</div>

	<div class="fluid_container"
		<!-- News -->
		<div class="news">
			<div class="content_inner">

				<div class="section_heading">
					<div class="inner show_sm">
						<h1 class="lang_en">NEWS</h1>
						<span class="lang_jp">ビザビグループの活動や</span>
						<span class="lang_jp">企業情報を発信</span>
					</div>
				</div>

				<div class="content">
					<div class="row">
					
						<div class="left_news_heading hide_sm">
							<div class="news_heading_canvas frosted_glass">
								<div class="inner">
									<h1 class="lang_en">NEWS</h1>
									<span class="lang_jp">ビザビグループの活動や</span>
									<span class="lang_jp">企業情報を発信</span>
									<a href="#" class="more_btn">> MORE</a>
								</div>
							</div>
						</div>

						<div class="right_news_box">
							<div class="canvas_box_container">
								<div class="canvas_box bg_dark frosted_glass">
									<div class="inner">
										<div class="heading text_left">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											『月刊タウン情報おかやま』 2月号の特集は 『パスタ&ラーメン　半額・ワンコイン』
										</p>
									</div>
								</div>

								<div class="canvas_box frosted_glass">
									<div class="inner text_left">
										<div class="heading">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											『月刊タウン情報おかやま』1月号の特集は 「冬に行きたい おこもりカフェ」
										</p>
									</div>
								</div>

								<div class="canvas_box bg_dark frosted_glass">
									<div class="inner text_left">
										<div class="heading">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											『Osera』No.79初春号の特集は「2015年、お目見えした　集いの場と新しき店」
										</p>
									</div>
								</div>
							</div>

							<div class="canvas_box_container">
								<div class="canvas_box frosted_glass">
									<div class="inner text_left">
										<div class="heading">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											「LUNCH PASSPORT vol.8」 岡山市・倉敷市・総社市版 発刊のお知らせ
										</p>
									</div>
								</div>

								<div class="canvas_box bg_dark frosted_glass">
									<div class="inner text_left">
										<div class="heading">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											『月刊タウン情報おかやま』 12月号の特集は 『編集者が選んだ 2015年おいしい店 流行った店』
										</p>
									</div>
								</div>

								<div class="canvas_box frosted_glass">
									<div class="inner text_left">
										<div class="heading">
											<p><span class="date">2016/1/25</span><span class="topic">地域コンテンツ</span></p>
										</div>
										<p class="news_paragraph">
											『Osera』　No.78晩秋号は、秋から冬へと移りゆくこの時季におすすめしたい、 大人のランチ...
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="full_width_btn show_sm">
						<a class="lang_en" href="#"> > MORE </a>
					</div>

				</div>

			</div>
		</div>
		<!-- /News -->
	</div>

	<div class="fluid_container">
		<!-- Recruit -->
		<div class="recruit">
			<div class="content_inner">
				
				<!-- Round Moving Object -->
				<div id="round_object">
					<img src="public_html/img/common/objects/floating_large_circle_object_03.png">
				</div>
				<!-- Round Moving Object -->

				<div class="section_heading">
					<h1 class="lang_en">RECRUIT</h1>
					<span class="lang_jp">僕らの力は、街をも変える。</span>
				</div>

				<div class="content">
					<div class="row">
						<div class="left_box">
							<div class="inner">
								<figure>
									<img src="public_html/img/main/recruit/main_recruit_man_img_01.png">
								</figure>
								<div class="box_title">
									<p>中途採用</p>
								</div>
							</div>
						</div>
						<div class="right_box">
							<div class="inner">
								<div class="top_img">
									<figure>
										<img src="public_html/img/main/recruit/main_recruit_woman_img_02.png">
									</figure>
									<div class="box_title">
										<p>新卒採用</p>
									</div>
								</div>
								
								<a href="http://facebook.com" class="fb_canvas">
									<div>
										<img src="public_html/img/main/recruit/main_recruit_facebook_img_3.png">
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

</div>
<!-- /page content -->


<?php include("php/includes/footer.php"); ?>