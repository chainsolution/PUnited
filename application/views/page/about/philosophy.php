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
	<div class="page_content">
		<div class="philosophy">
			<div class="content_inner">
				<div class="section_heading">
					<h1>企業哲学</h1>
					<span>PHILOSOPHY</span>
				</div>

				<div class="content">
					<div class="section">
						<div class="section_title">
							<h3>企業哲学</h3>
						</div>
						<article>
							<p class="text_lg">ここでは企業理念の詳細情報があります</p>
						</article>
					</div>

					<div class="section">
						<div class="left_section">
							<div class="section_title">
								<h3>企業哲学</h3>
							</div>
							<article>
								<ul>
									<li>ここでは企業理念の詳細情報があります。</li>
									<li>ここでは企業理念があります。</li>
									<li>ここでは企業理念情報があります。</li>
								</ul>
							</article>
						</div>

						<div class="right_section">
							<div class="section_title">
								<h3>企業哲学</h3>
							</div>
							<article>
								<ul>
									<li>詳細報がます。</li>
									<li>ここではす。</li>
									<li>ここでは。</li>
									<li>ここでは企す。</li>
								</ul>
							</article>
						</div>
					</div>

					<div class="section text_center">
						<div class="section_title">
							<h3>ここでは企業理念であります</h3>
						</div>
						<div class="row">
							<div class="left_section">

								<div class="company_logo">
									<img src="assets/img/about_us/philosophy/about_us_site_logo_text_01.png">
								</div>

								<article>
									<h2 class="article_title">
										ここでは企すここでは企す。
									</h2>
									<p>
										あなたが私を愛している限り。<br>
										私たちはホームレスかもしれない、飢えすることができ<br>
										我々は破産である可能性があります。<br>
										あなたが私を愛している限り。<br>
										私たちはホームレスかもしれない、飢えすることができ、<br>
										我々は破産である可能性があります。<br>
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
										ここでは企すここでは企す。
									</h2>
									<p>
										あなたが私を愛している限り。<br>
										私たちはホームレスかもしれない、飢えすることができ<br>
										我々は破産である可能性があります。<br>
										あなたが私を愛している限り。<br>
										私たちはホームレスかもしれない、飢えすることができ、<br>
										我々は破産である可能性があります。<br>
									</p>
								</article>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>