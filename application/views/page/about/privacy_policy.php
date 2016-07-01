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

	$meta = new MetaDescription('privacy');

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
		<div class="privacy">
			<div class="content_inner">
				<div class="section_heading">
					<h1>プライバシーポリシー</h1>
					<span>PRIVACY POLICY</span>
				</div>

				<div class="content">
					<div class="row">
						<div class="content_title">
							<p>ダミーテキストダミーテキストダミ</p>
							<div class="vertical_divider"></div>
						</div>
						<div class="content_paragraph">
							<p>
								ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
								ダミーテキストダミーテキストダミーテキストダミーテキスト。
							</p>	
						</div>
					</div>

					<div class="row">
						<div class="content_title">
							<p>頭のタイトルのこれ</p>
							<div class="vertical_divider"></div>
						</div>
						<div class="content_paragraph">
							<p>
								これは、ウェブサイトのための一時的な内容の記事のためだけのダミーテキストです、私たちは、
								すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。 
								すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。ためのダミーテキストです
							</p>
							<h4>ためのダミーテキストですすべての構造の</h4>
							<ul>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									<ul>
										<li>
											すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
										</li>
										<li>
											すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
										</li>
										<li>
											すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
										</li>
										<li>
											すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
										</li>
									</ul>
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									<ul class="info">
										<h4>後でそれを変更 / 完了した</h4>
										<li><span>変更</span> 構造のレイアウトを完了した後に、</li>
										<li><span>変更</span> 構造のレイアウトを完了した後に、構造のレ</li>
										<li><span>変更</span> 086-224-7172</li>
										<li><span>FAX</span> 086-224-1584</li>
										<li><span>E-MAIL</span> を完了した後に、後でそれを。</li>
										<p>すべての構造のレイアウ後でそれを変更する必要があります。</p>
									</ul>
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、
								</li>
								<li>
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
									すべての構造のレイアウトを完了した後に、後でそれを変更する必要があります。
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>