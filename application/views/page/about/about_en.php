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

	$meta = new MetaDescription('about');

	// return data as assocciated array;
	$data = $meta->get_meta_description();

	// get array of meta header
	$meta_content = $data['meta'];

	// get title of page
	$page_title = $data['page_title'];
	include(dirname(dirname(__DIR__)).'/php/includes/header.php');
?>

<div class="site_container">
	<div class="banner_no_navbar">
		<img src="assets/img/about_us/banner/about_us_clear_banner_01.png">
		<div class="overlay_title">
			<sup>`</sup>
			<span>ABOUT US</span>
		</div>
	</div>
</div>

<div class="site_md_container">
	<div class="language_options">
		<a class="active" href="about_jp">Japanese</a>
		<a href="about_en">English</a>
	</div>
</div>

<div class="site_container">

	<div class="page_content">
		<div class="about_en">
			<div class="top_content">
				
				<div class="impression_sentence">
					<article>
						<p>
							<span class="company_name">VIS-A-VIS inc.</span> is organizing you to professional force and collective capabilities<br>
							that may help you be happy communication to connect people together
						</p>
					</article>
				</div>

				<div class="company_map">
					<div class="inner">
						<img src="assets/img/about_us/en/about_us_en_company_map_05.png">
					</div>
				</div>

				<div class="company_info">
					<div class="company_airport_map">
						<div class="inner">
							<img src="assets/img/about_us/en/about_us_en_airport_img_01.png">
						</div>
					</div>
					
					<div class="geo_location_desc">
						<article>
							<h1>
								VIS-A-VIS. is walk together in local area of
								Okayama prefecture since 1934.
							</h1>
							<p>
								Okayama Prefecture is the center of the Chugoku and Shikoku districts, and the
								point from which roads spread to all four cardian points. Okayama Prefecture is
								located at the center of the Sanyo Expressway, which runs between the Kansai and
								Kyushu reions. The south side of Okayama is the gate to Shikoku, while its
								northern side offers access to the Sanin region. It reveives attention as a key traffic
								hub and a place for sightseeing, as well as for being an infustrial complex.
							</p>
					</article>
					</div>
				</div>

				<div class="board_of_director">
					<h1>MY PROFILE</h1>

					<div class="chairman_profile">
						<div class="profile_pic">
							<img src="assets/img/about_us/en/about_us_en_chairman_profile_04.png">
						</div>
						<div class="profile_bio">
							<div class="profile_name">
								<h2>Masayoshi Maesaka <span class="kanji_name">(会社概要)</span></h2>
								<span class="position_title">Chairman Of The Board</span>
							</div>
							<div class="topic_title">
								<h4>Public Position</h4>
							</div>
							<p>
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamavHead of Convention Section, OkayamaHead of Convention Section, Okayama
							</p>
							<div class="topic_title">
								<h4>Member of JCMA</h4>
							</div>
							<p>
								<img class="jmca_logo" src="assets/img/about_us/en/about_us_en_JCMA_logo_02.png"> Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
								Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, Okayama
							</p>
						</div>
					</div>
					
					<div class="ceo_profile">
						
						<div class="profile_pic">
							<img src="assets/img/about_us/en/about_us_en_ceo_profile_03.png">
						</div>
						<div class="profile_bio">
							<div class="profile_name">
								<h2>Daisuke Yoshida <span class="kanji_name">(会社概要)</span></h2>
								<span class="position_title">CEO</span>
							</div>
							<div class="topic_title">
								<h4>Public Position</h4>
							</div>
							<p>
								Chairman Young Enterprenuer group of JCMA Chairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMA Chairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMA Chairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMA Chairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
							</p>
						</div>
					</div>

				</div>

				<div class="company_description">
					<h1>What is VIS-A-VIS?</h1>
					<div class="description">
						<article>
							<p>
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
							</p>
							<p>
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
							</p>
							<p>
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
							</p>
							<h2>Cooperate society of Okayama Institute of Information and Culture</h2>
							<p>
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
								Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA
							</p>
							<ul>
								<li>Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA</li>
								<li>Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA</li>
								<li>Chairman Young Enterprenuer group of JCMAChairman Young Enterprenuer group of JCMA</li>
							</ul>
						</article>
					</div>

					<div class="summary">
						<div class="topic_title">
							<h4>Company Summary</h4>
						</div>
						<ul>
							<li><span>Since</span> September, 1934</li>
							<li><span>Establishment</span> May, 1950</li>
							<li><span>Capital</span> Yen 30,000,000</li>
							<li><span>Representative</span> Chairman Masayoshi Maesaka</li>
							<li><span>Employee</span> The group total 128 employee</li>
						</ul>
						
					</div>

				</div>
				
			</div>
		</div>
	</div>

</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>