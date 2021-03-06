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

<div class="fluid_container">
	<div class="banner_no_navbar">
		<img src="public_html/img/about_us/banner/about_us_clear_banner_01.png">
		<div class="overlay_title">
			<sup>`</sup>
			<span>ABOUT US</span>
		</div>
	</div>
</div>

<div class="site_md_container">
	<div class="language_options">
		<a href="about_jp">Japanese</a>
		<a class="active" href="about_en">English</a>
	</div>
</div>


<!-- page content -->
<div class="page_content">
	<div class="about_en">
		<div class="top_content">

			<div class="site_md_container">
			<!-- top sentence -->
				<div class="impression_sentence">
					<article>
						<p>
							<span class="company_name">VIS-A-VIS inc.</span> is organizing you to professional force and collective capabilities<br>
							that may help you be happy communication to connect people together
						</p>
					</article>
				</div>
			<!-- /top sentence -->
			</div>

			<div class="fluid_container">
			<!-- comapny map image -->
				<div id="map">
					
				</div>
			<!-- /comapny map image -->
			</div>

			<div class="site_md_container">
			<!-- overview about company and airport mapping -->
				<div class="company_info">
					<div class="company_airport_map">
						<div class="inner">
							<img src="public_html/img/about_us/en/about_us_en_airport_img_01.png">
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
			<!-- /overview about company and airport mapping -->
			</div>

			<div class="fluid_container">
			<!-- overview about board of director -->
				<div class="board_of_director">
					<div class="site_md_container">
						<h1>MY PROFILE</h1>

						<div class="chairman_profile">
							<div class="profile_pic">
								<img src="public_html/img/about_us/en/about_us_en_chairman_profile_04.png">
							</div>
							<div class="profile_bio">
								<div class="profile_name">
									<h2>Masayoshi Maesaka <span class="kanji_name">(前坂 匡紀)</span></h2>
									<span class="position_title">Chairman Of The Board</span>
								</div>
								<div class="topic_title">
									<h4>Public Position</h4>
								</div>
								<p>
									Head of Convention Section, Okayama Visitors & Convention Association 
									Former Vice President and Permanent Member of Okayama Chamber of Commerce 
									and Industry, Chairperson of Operating Committee Chairperson of System 
									Engineering Okayama Vice Chairperson of the Promotion Meeting of Okayama 
									High Performance Information Director of Myanmar-Japan Collaboration Project 
									for Fostering Medical Human Resources (Authorized Nonprofit Organization) Director 
									of the Japan-Netherlands Society of Okayama Director of the Japan-Korea Friendship 
									Association.
								</p>
								<div class="topic_title">
									<h4>Member of JCMA</h4>
								</div>
								<p>
									<img class="jmca_logo" src="public_html/img/about_us/en/about_us_en_JCMA_logo_02.png"> 
									Head of Convention Section, OkayamaHead of Convention Section, OkayamaHead of Convention Section, 
									Okayama. The Japan Convention Management Association: JCMA is the biggest convention organization in Japan. 
									Approximately 200 organizations of various proprietors in the convention industry gather and strive to 
									strengthen this industry and realize the establishment of a firm position as an industry. From now on, 
									high economic effects generated by MICE, creation of business chances and innovations, effects from 
									improving competitiveness and brand power of cities will be readily apparent to the public. In 2020, 
									the “largest convention in the world,” the Olympic and Paralympic Games, will be held in Japan. 
									In the midst of tourism promotion by the government agency looking ahead to this opportunity, 
									the number of conventions and invitations is on the rise.
								</p>
							</div>
						</div>
						
						<div class="ceo_profile">
							
							<div class="profile_pic">
								<img src="public_html/img/about_us/en/about_us_en_ceo_profile_03.png">
							</div>
							<div class="profile_bio">
								<div class="profile_name">
									<h2>Daisuke Yoshida <span class="kanji_name">(吉田 大助)</span></h2>
									<span class="position_title">CEO</span>
								</div>
								<div class="topic_title">
									<h4>Public Position</h4>
								</div>
								<p>
									Chairman Young Entrepreneurs Group of the Okayama Chamber of Commerce 
									and Industry Director Young Entrepreneurs Group of the Japan Chamber 
									of Commerce and Industry (Japan YEG) Director fagiano okayama sports club　Co., Ltd.
								</p>
							</div>
						</div>
					</div>
				</div>
			<!-- /overview about board of director -->
			</div>

			<div class="site_md_container">
			<!-- Company objective -->
				<div class="company_description">
					<h1>What is VIS-A-VIS?</h1>
					<div class="description">
						<article>
							<p>
								VIS-À-VIS inc. is in addition to the development of media communication 
								model to take advantage of the contact with local consumers and area marketing. 
								We should supporting you the conduct or support of products, services and business 
								development, content development and the client should be transmitted as advertising 
								and PR area. We will continue to meet the challenges in communication like 
								“Area marketing agency“.
							</p>
							<p>
								VIS-À-VIS inc. is totally supporting for the promotion of the customers. 
								The experience of the performance of WEB business and MICE business is 
								top class in particular of the regional leading in this area.
							</p>
							<p>
								Mainly the publishing of community life magazine, through the collection, 
								editing and dissemination of community life information, consumers, businesses, 
								and town shops, to create a communication of consumers each other further. 
								We will help the activation of the human resources of the region in the human 
								resources support such as hiring of new graduates, recruitment, education and training.
							</p>
							<h2>Cooperate society of Okayama Institute of Information and Culture</h2>
							<p>
								Cooperative society of Okayama Institute of Information and Culture doing own research 
								that the quite specialize in area with the reputation. Basically the research form net 
								survey and made ??full use of questionnaire, the interview of monitor site members group 
								how to investigate to becomes “Point" of creative concept is the basis. Also we could 
								make an various market research, media contact investigation, shopping trends survey 
								of housewife, living conditions and awareness survey of each generation, customer 
								satisfaction survey.
							</p>
							<ul>
								<li>Developing strategies employing the geographical information system (GIS) containing dynamic population variable data</li>
								<li>Various simulation based on Huff Model estimations (sales forecast, marketing area setting, etc.)</li>
								<li>Proposals for merchandising based on customer purchasing data and marketing area characteristics</li>
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
			<!-- /Company objective -->
			</div>

		</div>
	</div>
</div>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxmdIy6GvENTu-DEcpHL_W06FAtx2KhiM&callback=PUNITED.main.initMap"></script>
<!-- /page content -->


<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>