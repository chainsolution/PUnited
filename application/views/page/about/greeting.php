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
?>

<div class="site_container">
	<div class="overlay_banner">
		<div class="overlay_title">
			<span>ABOUT US</span>
		</div>
		<div class="overlay_nav">
			<ul>
				<li class="active"><a href="#">ごあいさつ</a></li>
				<li><a href="#">企業理念</a></li>
				<li><a href="#">会社概要</a></li>
				<li><a href="#">沿革</a></li>
				<li><a href="#">プライバシーポリシー</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="site_md_container">
	<div class="page_content">
		<div class="greeting">
			<div class="content_inner">
				<div class="section_heading">
					<h1>ごあいさつ</h1>
					<span>GREETING</span>
				</div>
				<div class="content">
					<article>
						<div class="paragraph">

							<p>
								会社統合のごあいさつ2016年4月、新生ビザビがスタートします。<br>
								社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。
							</p>

							<p>
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
								この一念を持ち続け、常にお客様のために、自らを （賑化・真化・信化・親化・深化・伸化・進化・新化） させてきました。
								社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。もともとの「心はひとつ」です。
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
							</p>

							<p>
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
								この一念を持ち続け、常にお客様のために、自らを （賑化・真化・信化・親化・深化・伸化・進化・新化） させてきました。
								社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。もともとの「心はひとつ」です。
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。<br>
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
								この一念を持ち続け、常にお客様のために、自らを （賑化・真化・信化・親化・深化・伸化・進化・新化） させてきました。
								社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。もともとの「心はひとつ」です。
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
								この一念を持ち続け、常にお客様のために、自らを （賑化・真化・信化・親化・深化・伸化・進化・新化） させてきました。
								社体制となります。乱暴な言い方をすれば「体をひとつ」にするだけです。もともとの「心はひとつ」です。
								その心とは「情報文化の創造を通じて社会を豊かに楽しくする」ということです。
							</p>

						</div>
						<div class="profile">
							<img src="assets/img/about_us/greeting/about_us_en_ceo_profile_03.png">
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>