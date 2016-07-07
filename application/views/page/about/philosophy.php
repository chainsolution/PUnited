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

	$meta = new MetaDescription('philosophy');

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

		<!-- Philosophy page content -->
		<div class="philosophy">
			<div class="content_inner">

				<!-- Page heading title -->
				<div class="section_heading">
					<h1>企業理念</h1>
					<span class="lang_en">PHILOSOPHY</span>
				</div>
				<!-- /Page heading title -->

				<!-- Philosophy content -->
				<div class="content">
					<div class="section">
						<div class="section_title">
							<h3>企業理念</h3>
						</div>
						<article>
							<p class="text_lg">情報文化の創造を通じて、社会を豊かに楽しくする。</p>
						</article>
					</div>

					<div class="section">
						<div class="left_section">
							<div class="section_title">
								<h3>経営方針</h3>
							</div>
							<article>
								<ul>
									<li>私たちは、お客様から学ぶ姿勢を基本とする。</li>
									<li>私たちは、新鮮であり続ける。</li>
									<li>私たちは、人と環境を大切にする。</li>
								</ul>
							</article>
						</div>

						<div class="right_section">
							<div class="section_title">
								<h3>行動指針</h3>
							</div>
							<article>
								<ul>
									<li>的確であろう。</li>
									<li>誇りを持とう。</li>
									<li>快活であろう。</li>
									<li>継続しよう。</li>
								</ul>
							</article>
						</div>
					</div>

					<div class="section text_center">
						<div class="section_title">
							<h3>コーポレート・アイデンティティ</h3>
						</div>
						<div class="row">
							<div class="left_section">

								<div class="company_logo">
									<img src="assets/img/about_us/philosophy/about_us_site_logo_text_01.png">
								</div>

								<article>
									<h2 class="article_title">
										テーマ「人と情報のネットワーク」
									</h2>
									<p>
										「ビ・ザ・ビ」は、フランス語で<br>
										「お互いが顔を向け合い、見つめ合うこと」を意味します。<br>
										顔を合わせ、言葉を交わし、心を通わせることが、<br>
										コミュニケーションのはじまりです。<br>
										この原点を大切にしながら、人と情報の交流と<br>
										ネットワークを拡げていきたいと思います。<br>
									</p>
								</article>

							</div>
							<div class="vertical_divider"></div>
							<div class="right_section">
							
								<div class="company_logo">
									<img src="assets/img/about_us/philosophy/about_us_site_logo_02.png">
								</div>

								<article>
									<h2 class="article_title">
										テーマ「365日のビューティフル」
									</h2>
									<p>
										企業は生きものであり、ドラマがあります。<br>
										私たちが「ビ・ザ・ビ」に込めたイメージは<br>
										出会いの感動と豊かな彩り、<br>
										表現テーマは「365日のビューティフル」です。<br>
										喜び、楽しさ、遊び心、夢、新鮮、広がり、愛、地球、<br>
										コミュニケーション。<br>
									</p>
								</article>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Philosophy content -->
			</div>
		</div>
		<!-- /Philosophy page content -->
	</div>
	<!-- /Page content -->
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>