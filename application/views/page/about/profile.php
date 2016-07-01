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

	$meta = new MetaDescription('profile');

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
		<div class="profile">
			<div class="content_inner">
				<div class="section_heading">
					<h1>会社概要</h1>
					<span>PROFILE</span>
				</div>

				<div class="content">
					<div class="left_content">
						<ul>
							<li>
								<div class="content_title">
									<p>概要</p>
								</div>
								<div class="content_paragraph">
									<p>会社9会9会</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>要会</p>
								</div>
								<div class="content_paragraph">
									<p>会社9会9会</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>概要会</p>
								</div>
								<div class="content_paragraph">
									<p>3,000要会</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>概要会</p>
								</div>
								<div class="content_paragraph">
									<p>
										ヘッドのタイトル ヘッドの<br>
										ヘッドのタイトル ヘッドの<br>
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>概要概要</p>
								</div>
								<div class="content_paragraph">
									<p>
										128会 (会社9会9会会社9会9会)
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>概要概要</p>
								</div>
								<div class="content_paragraph">
									<p>
										<a href="" class="link_underline">時的なコンテンツ時的な</a><br>
										<a href="" class="link_underline">時的なコンテンツ時的なコンテン</a><br>
										<a href="" class="link_underline">時的なコンテンツ時</a><br>
										<a href="" class="link_underline">時的なコン</a><br>
										<a href="" class="link_underline">時的なコンテンツ時的なコンテンツ</a><br>
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>概要概</p>
								</div>
								<div class="content_paragraph">

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>概要概概要概</h4>
										<p>
											ヘッドのタイトルヘッドのタイトル<br>
											TEL 086-224-7172
										</p>
									</div>

								</div>
							</li>
						</ul>
					</div>

					<div class="right_content">
						<div class="content_title">
							<p>概概要概</p>
						</div>

						<div class="content_paragraph">
							<div class="head_title">
								<p>ッドのタ</p>
							</div>
							<div class="diagram_lists">
								<div class="vertical_line"></div>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
								<li class="list"><a href="">概概概概要概</a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>