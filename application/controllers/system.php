<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class system extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index() {
		$this->load->view ('index');

	}

	public function greeting() {
		$this->load->view('page/about/greeting');
	}

	public function philosophy() {
		$this->load->view('page/about/philosophy');
	}

	public function profile() {
		$this->load->view('page/about/profile');
	}

	public function history() {
		$this->load->view('page/about/history');
	}

	public function privacy() {
		$this->load->view('page/about/privacy_policy');
	}

	public function about_en() {
		$this->load->view('page/about/about_en');
	}

	public function about_jp() {
		$this->load->view('page/about/about_jp');
	}

}
