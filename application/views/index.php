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
						<span>ヴィザヴィ会社概要</span>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_01.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<span>ヴィザヴィ会社概要</span>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_02.png">
					</div>
				</div>
			</li>

			<li class="banner_item" style="z-index:0;opacity:0;">
				<div class="item_inner">
					<div class="item_title">
						<span>ヴィザヴィ会社概要</span>
					</div>
					<div class="item_img">
						<img src="assets/img/main/banner/main_banner_03.png">
					</div>
				</div>
			</li>

		</ul>
	</div>

	<div class="load_banner"></div>
</div>
<!-- /banner -->

<div class="site_container">
	<!-- page content -->
	<div class="page_content">

		<!-- overview -->
		<div class="overview">
			<article>
				<h2>ヴィザヴィ会社概要</h2>
				<p>
					我々は最高のチームです。非常にソフトスキルとハードスキルを持ちます。
					私たちは、人々の任意のタイプの条件のいずれかの種類を持つ作品にできます。
					我々は、チェーンチームです。私たちは、あなたが考えている以上にあります。
					私たちは、ほとんどのこれまでの粘着性の関係で、これまでのチームになります。
					私たちは私たちを幸せに落ち作るコーディング、何をコーディングするのが大好きです。
				</p>
				<p>
					我々は最高のチームです。非常にソフトスキルとハードスキルを持ちます。
					私たちは、人々の任意のタイプの条件のいずれかの種類を持つ作品にできます。
					我々は、チェーンチームです。私たちは、あなたが考えている以上にあります。
					私たちは、ほとんどのこれまでの粘着性の関係で、これまでのチームになります。
					私たちは私たちを幸せに落ち作るコーディング、何をコーディングするのが大好きです。
				</p>
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
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_research_04.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>研究</h4>
										<span>RESEARCH</span>
									</div>
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box">
								
							</div>
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_area_content_06.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>エリアコンテンツ</h4>
										<span>AREA CONTENT</span>
									</div>
								</div>
							</div>
				
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_advertising_pr_02.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>広告 - PR</h4>
										<span>ADVERTISING/PR</span>
									</div>
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
					
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_recruit_05.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>リクルート</h4>
										<span>RECRUIT</span>
									</div>
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_event_01.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>イベント</h4>
										<span>EVENT</span>
									</div>
								</div>
							</div>
							<div class="canvas_box">
								<div class="inner">
									
								</div>
							</div>
							<div class="canvas_box frosted_glass">
								<div class="inner">
									<figure>
										<img src="assets/img/common/icons/icon_internet_03.png" width="63" height="63">
									</figure>
									<div class="title">
										<h4>インターネット</h4>
										<span>INTERNET</span>
									</div>
								</div>
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

							<div class="canvas_box striped">
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
					<div class="inner">
						<h1>NEWS</h1>
						<span>ビジネスマイルストーン</span>
						<span>一時的な記事</span>
					</div>
				</div>

				<div class="content">
					<div class="row">
					
						<div class="left_news_heading">
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
								<figure>
									<img src="assets/img/main/recruit/main_recruit_woman_img_02.png">
								</figure>
								<div class="box_title">
									<h2>このウブ</h2>
								</div>
								<div class="fb_canvas">
									<h2 class="kanji">このウブこの</h2>
									<h2 class="en">Facebook</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Recruit -->

	</div>
	<!-- /page content -->

	<!-- footer -->
	<div class="site_footer">
		
	</div>
	<!-- /footer -->
</div>

</body>
</html>