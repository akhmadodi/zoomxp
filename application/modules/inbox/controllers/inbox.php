<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('auth/tank_auth');
		$this->lang->load('tank_auth');
	}	

	public function index() {
		if ($this->tank_auth->is_logged_in()) {

			$data = array(
				'title' => 'Inbox',
				'content' => 'inbox'
			);
			$this->load->view('includes/admin/template', $data);

		} else { redirect('auth'); }
	}
}