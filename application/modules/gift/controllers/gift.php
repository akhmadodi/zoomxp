<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gift extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->load->model('master/master_model');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('common_function'));
	}	

	public function index() {

		// if ($this->tank_auth->is_logged_in()) {

			$data = array(
				'title' => 'Zoom - Activities, Tours, Attractions and Things To Do',
				// 'custom_style' => 'welcome/style',
				'custom_style' => 'style',
				'js' => 'welcome/js',
				'content' => 'gift_voucher'
			); 

			$this->load->view('includes/frontend/template', $data);

		// } else { redirect('auth'); }

	}

}