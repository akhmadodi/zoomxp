<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('encrypt');
	}

	function index() {

		$data = array(
			'title' => 'ZOOM - Activities, Tours, Attractions and Things To Do',
			'style' => 'welcome/style',
			'js' => 'welcome/js',
			'content' => 'welcome/home'
		);

		$this->load->view('includes/template', $data);
		
	}

	function autocomplete() {
		$this->load->view('autocomplete');
	}

	function about() {

		$data = array(
			'title' => 'About Us',
			'style' => 'welcome/style_about',
			'js' => 'welcome/js_about',
			'content' => 'welcome/about'
		);

		$this->load->view('includes/template', $data);

	}

}