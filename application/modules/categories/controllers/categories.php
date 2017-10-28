<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->lang->load('tank_auth');
	}	

	public function index() {
		$data = array(
			'title' => 'Zoom - Activities, Tours, Attractions and Things To Do',
			'custom_style' => 'categories/style',
			'js' => 'categories/js',
			'content' => 'categories'
		);

		$this->load->view('includes/frontend/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */