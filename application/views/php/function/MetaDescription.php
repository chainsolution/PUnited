<?php
	/**
	* Contains the assocciated array of meta header on everypage.
	* ---------------------------------------------------------------------------------------
	* @array: 
	* 	$pageTitle : defined the title of each page.
	*	$aboutus : defined meta header of both english and japanese version for about us page.
	*	$homePage : defined meta header of main page.
	*	$history : defined meta header of history page.
	*	$greeting : defined meta header of greeting page.
	*	$philosophy : defined meta header of philosophy page.
	*	$contact : defined meta header of contact page.
	*	$companyProfile : defined meta header of company profile paeg.
	*	$privacyPolicy : defined meta header of privacy & policy page.
	* ----------------------------------------------------------------------------------------
	* @string $page : store value to reference a specific page, construct value from constructor.
	*	
	*/

class MetaDescription
	{
		public $page = "";

		public $pageTitle = array(
			'home' => 'VIS-A-VIS comapany',
			'about' => 'VIS-A-VIS comapany | about us page',
			'philosophy' => 'VIS-A-VIS comapany | philosophy page',
			'history' => 'VIS-A-VIS comapany | history page',
			'greeting' => 'VIS-A-VIS comapany | greeting page',
			'contact' => 'VIS-A-VIS comapany | contact page',
			'profile' => 'VIS-A-VIS comapany | profile page',
			'privacy' => 'VIS-A-VIS comapany | privacy page',
		);
		public $aboutUs = array(
			'title' => 'about us',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $homePage = array(
			'title' => 'home page',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $history = array(
			'title' => 'history',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);
	
		public $greeting = array(
			'title' => 'greeting',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $philosophy = array(
			'title' => 'philosophy',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $contact = array(
			'title' => 'contact',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $companyProfile = array(
			'title' => 'company profile',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public $privacyPolicy = array(
			'title' => 'privacy policy',
			'keyword' => '',
			'description' => '',
			'og:title' => '',
			'og:description' => '',
			'og:image' => '',
			'og:url' => '',
			'og:type' => ''
		);

		public function __construct($page)
		{
			$this->page = $page;
		}

		public function pageContent($page_name){
			
			switch ($page_name) {
				case 'home':
					return $this->homePage;
					break;

				case 'about':
					return $this->aboutUs;
					break;

				case 'philosophy':
					return $this->philosophy;
					break;

				case 'privacy':
					return $this->privacyPolicy;
					break;

				case 'profile':
					return $this->companyProfile;
					break;

				case 'contact':
					return $this->contact;
					break;

				case 'greeting':
					return $this->greeting;
					break;

				case 'history':
					return $this->history;
					break;
				default:
					return $this->homePage;
					break;
			}
		}

		public function get_meta_description(){

			$data = array(
				'meta' => $this->pageContent($this->page),
				'page_title' => $this->pageTitle[$this->page]
			);
			return $data;
		}
	}
?>