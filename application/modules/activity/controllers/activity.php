<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

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
		$this->load->model('master/master_model');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('common_function'));
	}	

	public function index() {
		if ($this->tank_auth->is_logged_in()) {
			// $data = array(
			// 	'title' => 'Activity list',
			// 	'content' => 'activity',
			// 	'query' => $this->master_model->get_data('id, activity_title, activity_text, start_date, end_date, quota, price, url_image, image_arr', 'activity', array('activated' => 1), 'registered', 'desc')
			// );
			// $this->load->view('includes/template', $data);

			$data = array(
				'title' => 'Activities',
				'content' => 'activity',
				// 'link_add' => 'true'
			);
			$this->load->view('includes/admin/template', $data);
		} else { redirect('auth'); }
	}

	// function modal_content_add() {
		// $this->load->view('modal_content_add');
	// }

	function add() {
		if ($this->tank_auth->is_logged_in()) {
			$data = array(
				'title' => 'Add',
				'content' => 'form_activity_content',
				'vendor' => $this->master_model->get_data('vendor_name, id', 'vendor_detail', array(), 'vendor_name', 'asc'),
				'category' => $this->master_model->get_data('category, id', 'm_categ', array(), 'category', 'asc')
			);
			$this->load->view('includes/admin/template', $data);
		} else { redirect('auth'); }
	}

	function detail() {
		if ($this->tank_auth->is_logged_in()) {
			$id = $this->uri->segment(3);
			$data = array(
				'title' => 'Activity list',
				'content' => 'activity_detail',
				'query' => $this->master_model->get_data('id, activity_title, activity_text, start_date, end_date, quota, price, url_image, image_arr', 'activity', array('activated' => 1, 'id' => $id), null, null)
			);
			$this->load->view('includes/template', $data);
		} else { redirect('auth'); }
	}

	function book() {
		if ($this->tank_auth->is_logged_in()) {

			$this->form_validation->set_rules('quota', 'Quota', 'trim|required');
			$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
			$this->form_validation->set_rules('end_date', 'End Date', 'trim|required');

			if ($this->form_validation->run()) {

				$table_name = 'book';
				$activity_id = $this->input->post('id');
				$quota = $this->input->post('quota');
				$price = $this->input->post('price');
				$start_date = $this->input->post('start_date');
				$end_date = $this->input->post('end_date');

				$where_main = array('day(book_date)' => date('d'), 'month(book_date)' => date('m'), 'year(book_date)' => date('Y'));

				$last_id = $this->master_model->last_id_table('id', $where_main, $table_name);
				if ( $last_id->num_rows() == 0 ) { $n_id = 0; }
				else { $n_id = substr($last_id->row()->id, -5); }
				$new_id = sprintf('%05s', $n_id + 1);

				if ( curquota($activity_id) > 0 && curquota($activity_id) > $quota ) {
					$insert_data = array(
						'id' => date('ymd').$new_id,
						'user_id' => $this->session->userdata('user_id'),
						'activity_id' => $activity_id,
						'start_date' => date('Y-m-d', strtotime($start_date)),
						'end_date' => date('Y-m-d', strtotime($end_date)),
						'book_date' => date('Y-m-d H:i:s'),
						'quota' => $quota,
						'price' => $price,
						'price_total' => ($price * $quota)
					);
					$this->master_model->insert_data($table_name, $insert_data);
				}

				// redirect('activity/detail/'.$activity_id, 'refresh');
				$this->load->view('book_result', array('activity_id' => $activity_id, 'quota' => $quota, 'price' => $price));
			}

		} else { redirect('auth'); }
	}

	function data_activities() {
		if ($this->tank_auth->is_logged_in()) {
			$this->load->model('master/master_model');
			$get = $this->master_model->get_data('id,activity_title,start_date,end_date,quota,price', 'activity', array('activated' => 1), null, null);
			foreach ($get->result() as $key) {
				$data['aaData'][] = array(
					'activity_title' => $key->activity_title,
					'start_date' => date('Y-m-d', strtotime($key->start_date)), //date('d-M-y', strtotime($key->start_date)),
					'end_date' => date('Y-m-d', strtotime($key->end_date)), //date('d-M-y', strtotime($key->end_date)),
					'quota' => number_format($key->quota, 0, '.', ','),
					'price' => number_format($key->price, 0, '.', ','),
					'action' => '<a href="javascript:void(0);" class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i></a>
					<a href="javascript:void(0);" class="btn btn-xs danger btn-icon"><i class="fa fa-times"></i></a>'
				);
			}
			echo json_encode($data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */