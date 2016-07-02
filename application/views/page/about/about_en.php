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

<div class="site_container">

	<div class="page_content">
		<div class="about_en">
			<div class="top_content">

				<div class="language_options">
					<a class="active" href="about_jp">Japanese</a>
					<a href="about_en">English</a>
				</div>
				
				<div class="impression_sentence">
					<article>
						<p>
							<span class="company_name">VIS-A-VIS inc.</span> is organizing you to professional force and collective capabilities
							that may help you be happy communication to connect people together
						</p>
					</article>
				</div>

				<div class="company_map">
					<div class="inner">
						<img src="assets/img/about_us/banner/about_us_clear_banner_01.png">
					</div>
				</div>

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

				<div class="board_of_director">
					<h1>MY PROFILE</h1>

					<div class="chairman_profile">
						
					</div>
					
					<div class="ceo_profile">
						
					</div>

				</div>
				
			</div>
		</div>
	</div>

</div>

<?php include(dirname(dirname(__DIR__)).'/php/includes/footer.php'); ?>