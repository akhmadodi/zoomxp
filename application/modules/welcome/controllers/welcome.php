<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->lang->load('tank_auth');
	}

	function xxx() {
		$this->load->view('welcome_message_old');
	}

	public function index() {
		// if ($this->tank_auth->is_logged_in()) {

		// 	$data = array(
		// 		'title' => 'Dashboard',
		// 		'content' => 'dashboard'
		// 	);
		// 	$this->load->view('includes/admin/template', $data);

		// } else { redirect('auth'); }
		// $this->load->view('welcome_message');
		
		if ( $this->session->userdata('level') == 'administrator' ) { redirect('activities'); }
		else {
			$data = array(
				'title' => 'Zoom - Activities, Tours, Attractions and Things To Do',
				'custom_style' => 'welcome/style',
				'js' => 'welcome/js',
				'content' => 'welcome_message'
			); // datang...

			$this->load->view('includes/frontend/template', $data);
		}
	}

	function dashboard() {
		if ($this->tank_auth->is_logged_in()) {

			$data = array(
				'title' => 'Dashboard',
				'content' => 'dashboard'
			);
			$this->load->view('includes/admin/template', $data);

		} else { redirect('auth'); }
	}

	function autocomplete() {
		$this->load->view('autocomplete');
	}
}