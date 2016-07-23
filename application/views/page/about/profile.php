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

	<!-- Page content -->
	<div class="page_content">

		<!-- Profile page content -->
		<div class="profile">
			<div class="content_inner">

				<!-- Page heading title -->
				<div class="section_heading">
					<h1>会社概要</h1>
					<span class="lang_en">PROFILE</span>
				</div>
				<!-- /Page heading title -->
				<div class="content">
					<div class="left_content">
						<ul>
							<li>
								<div class="content_title">
									<p>創業</p>
								</div>
								<div class="content_paragraph">
									<p>昭和9年9月</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>設立</p>
								</div>
								<div class="content_paragraph">
									<p>昭和25年5月</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>資本金</p>
								</div>
								<div class="content_paragraph">
									<p>3,000万円</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>代表者</p>
								</div>
								<div class="content_paragraph">
									<p>
										代表取締役会長　前坂匡紀<br>
										代表取締役社長　吉田大助<br>
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>従業員数</p>
								</div>
								<div class="content_paragraph">
									<p>
										128名（平成28年1月1日現在）
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>関連組織</p>
								</div>
								<div class="content_paragraph">
									<p>
										<a href="" class="link_underline">協同組合 岡山情報文化研究所</a><br>
										<a href="" class="link_underline">特定非営利活動法人 あしたり岡山</a><br>
										<a href="" class="link_underline">毎日広告社ネットワーク</a><br>
										<a href="" class="link_underline">JLAA日本地域広告会社協会</a><br>
										<a href="" class="link_underline">（株）マイナビ</a><br>
										<a href="" class="link_underline">（株）タウン情報全国ネットワーク</a><br>
									</p>
								</div>
							</li>

							<li>
								<div class="content_title">
									<p>所在地</p>
								</div>
								<div class="content_paragraph">

									<div class="depart_contact">
										<h4>経営統括</h4>
										<p>
											岡山市北区内山下1-3-1<br>
											TEL 086-224-7172
										</p>
									</div>

									<div class="depart_contact">
										<h4>クリエイティブ局</h4>
										<p>
											岡山市北区内山下1-3-1<br>
											TEL 086-224-7174
										</p>
									</div>

									<div class="depart_contact">
										<h4>コミュニケーション局</h4>
										<p>
											岡山市北区内山下1-3-1<br>
											TEL 086-224-7171
										</p>
									</div>

									<div class="depart_contact">
										<h4>リレーション局</h4>
										<p>
											岡山市北区野田2-11-17<br>
											TEL 086-805-6200
										</p>
									</div>

									<div class="depart_contact">
										<h4>ヒューマンリソース局</h4>
										<p>
											岡山市北区野田2-11-17 <br>
											TEL 086-805-6300
										</p>
									</div>

									<div class="depart_contact">
										<h4>倉敷支社</h4>
										<p>
											倉敷市白楽町412-1<br>
											 TEL 086-422-2635
										</p>
									</div>

									<div class="depart_contact">
										<h4>津山支社</h4>
										<p>
											津山市大手町6-8 城南ビル5F<br>
											 TEL 0868-22-5251
										</p>
									</div>

									<div class="depart_contact">
										<h4>四国支社</h4>
										<p>
											高松市鍛冶屋町3番地 香川三友ビル8F<br>
											TEL 087-851-6620
										</p>
									</div>

								</div>
							</li>
						</ul>
					</div>

					<div class="right_content">
						<div class="content_title">
							<p>組織図</p>
						</div>

						<div class="content_paragraph">
							<div class="head_title">
								<p>ビザビ</p>
							</div>
							<div class="diagram_lists">
								<div class="vertical_line"></div>
								<li class="list"><a href="">経営統括局</a></li>
								<li class="list"><a href="">クリエイティブ局</a></li>
								<li class="list"><a href="">コミュニケーション局</a></li>
								<li class="list"><a href="">リレーション局</a></li>
								<li class="list"><a href="">ヒューマンリソース局</a></li>
								<li class="list"><a href="">倉敷支社</a></li>
								<li class="list"><a href="">津山支社</a></li>
								<li class="list"><a href="">四国支社</a></li>
								<li class="list"><a href="">協同組合 岡山情報文化研究所</a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Profile page content -->
	</div>
	<!-- /Page content -->
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>