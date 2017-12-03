<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->load->model('master/master_model');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('common_function'));
	}	

	public function index() {

		$data = array(
			'title' => 'Payment',
			'style' => 'payment/style',
			'js' => 'payment/js',
			'content' => 'payment/content'
		);

		$this->load->view('includes/template', $data);

	}

}