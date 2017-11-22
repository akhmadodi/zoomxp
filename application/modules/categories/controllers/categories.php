<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('encrypt');
	}	

	function index() {
		$uri = $this->uri->segment(2);
		$data = array(
			'title' => 'ZOOM - '.ucwords($uri),
			'style' => 'categories/style',
			'js' => 'categories/js',
			'content' => 'categories/content',
			'categories' => strtolower($uri)
		);
		$this->load->view('includes/template', $data);
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */