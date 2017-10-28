<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

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
		$this->load->model('master_model');
		date_default_timezone_set('Asia/Jakarta');
	}	

	public function index() {
		if ($this->tank_auth->is_logged_in()) {
			echo 'not found.';
		} else { redirect('auth'); }
	}

	function add_categ() {
		if ($this->tank_auth->is_logged_in()) {

			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('categ_name', 'Category name', 'trim|required');
				if ($this->form_validation->run()) {
					$table_name = 'm_categ';
					$categ_name = $this->input->post('categ_name');
					$last_id = $this->master_model->last_id_table('id', array(), $table_name);
					$new_id = $last_id->row()->id + 1;

					if ( $this->master_model->get_data('id', $table_name, array('category' => trim($categ_name)), null, null)->num_rows() == 0 ) {

						$this->load->helper(array('common_function'));

						$param = 'public/attachments/images/categories/';
						create_dir($param, $new_id);


						$fileName = $_FILES['import']['name'];
						$config['upload_path'] = './'.$param.$new_id.'/';
						$config['file_name'] = str_replace(array(' ','-',':'), '_', strtolower($fileName));
						$config['allowed_types'] = 'gif|jpg|png';

						$this->load->library('upload');
						$this->upload->initialize($config);

						if(! $this->upload->do_upload('import') )
						$this->upload->display_errors();

						$this->master_model->insert_data($table_name, array('id' => $new_id, 'category' => $categ_name, 'url_image' => $param.$new_id.'/'.$config['file_name'] ));
						$msg_data['message'] = 'Success, category has been added.';

					} else { $msg_data['message'] = 'Failed, category already exist in database.'; }

				} else { $msg_data['message'] = null; }
			} else { $msg_data['message'] = null; }

			$data = array(
				'title' => 'Add Category',
				'content' => 'form_categ'
			);
			$this->load->view('includes/template', array_merge($data, $msg_data));
		} else { redirect('auth'); }
	}

	function add_activity() {
		if ($this->tank_auth->is_logged_in()) {

			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('vendor_id', 'Vendor Id', 'trim|required');
				$this->form_validation->set_rules('categ_id', 'Category Id', 'trim|required');
				$this->form_validation->set_rules('activity_title', 'Activity Title', 'trim|required');
				$this->form_validation->set_rules('activity_text', 'Activity Text', 'trim|required');
				$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
				$this->form_validation->set_rules('end_date', 'End Date', 'trim|required');
				$this->form_validation->set_rules('quota', 'Quota', 'trim|required');
				$this->form_validation->set_rules('price', 'Price', 'trim|required');				

				if ($this->form_validation->run()) {
					$table_name = 'activity';
					$vendor_id = $this->input->post('vendor_id');
					$categ_id = $this->input->post('categ_id');
					$activity_title = $this->input->post('activity_title');
					$activity_text = $this->input->post('activity_text');
					$start_date = $this->input->post('start_date');
					$end_date = $this->input->post('end_date');
					$quota = $this->input->post('quota');
					$price = $this->input->post('price');

					$where_main = array('vendor_id' => $vendor_id, 'categ_id' => $categ_id);

					$last_id = $this->master_model->last_id_table('id', $where_main, $table_name);
					if ( $last_id->num_rows() == 0 ) { $n_id = 0; }
					else { $n_id = substr($last_id->row()->id, -3); }
					$new_id = sprintf('%03s', $n_id + 1);

					if ( $this->master_model->get_data('id', $table_name, array_merge(array('activity_title' => trim($activity_title)), $where_main), null, null)->num_rows() == 0 ) {

						$this->load->helper(array('common_function'));

						$param = 'public/attachments/images/activities/' . sprintf('%03s', $categ_id) . '/' . sprintf('%07s', $vendor_id) . '/';
						create_dir($param, $new_id);

						$fileName = $_FILES['import']['name'];
						$file_name_new = str_replace(array(' ','-',':'), '_', strtolower($fileName));
						$config['upload_path'] = './'.$param.$new_id.'/';
						$config['file_name'] = $file_name_new;
						$config['allowed_types'] = 'gif|jpg|png';

						$this->load->library('upload');
						$this->upload->initialize($config);

						if(! $this->upload->do_upload('import') )
						$this->upload->display_errors();

						$idnew = sprintf('%03s', $categ_id).sprintf('%07s', $vendor_id).$new_id;

						$insert_data = array(
							'id' => $idnew,
							'vendor_id' => $vendor_id,
							'categ_id' => $categ_id,
							'activity_title' => $activity_title,
							'activity_text' => $activity_text,
							'start_date' => date('Y-m-d H:i:s', strtotime($start_date)),
							'end_date' => date('Y-m-d H:i:s', strtotime($end_date)),
							'quota' => $quota,
							'price' => $price,
							'url_image' => $param.$new_id.'/',
							'image_arr' => $config['file_name'],
							'registered' => date('Y-m-d H:i:s'),
							'activated' => 1,
							'user_id' => $this->session->userdata('user_id')
						);

						$this->master_model->insert_data($table_name, $insert_data);
						$msg_data['message'] = 'Success, Activity has been added.';

					} else { $msg_data['message'] = 'Failed, Activity already exist in database.'; }

				} else { $msg_data['message'] = null; }

			} else { $msg_data['message'] = null; }

			$data = array(
				'title' => 'Add Activity',
				'content' => 'activity/add_activity_content',
				'vendor' => $this->master_model->get_data('vendor_name, id', 'vendor_detail', array(), 'vendor_name', 'asc'),
				'category' => $this->master_model->get_data('category, id', 'm_categ', array(), 'category', 'asc')				
			);
			$this->load->view('includes/template', array_merge($data, $msg_data));

		} else { redirect('auth'); }
	}

	function add_vendor() {
		if ($this->tank_auth->is_logged_in()) {

			// if ($this->input->post('submit')) {
			// 	$this->form_validation->set_rules('vendor_id', 'Vendor Id', 'trim|required');
			// 	$this->form_validation->set_rules('categ_id', 'Category Id', 'trim|required');
			// 	$this->form_validation->set_rules('activity_title', 'Activity Title', 'trim|required');
			// 	$this->form_validation->set_rules('activity_text', 'Activity Text', 'trim|required');
			// 	$this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
			// 	$this->form_validation->set_rules('end_date', 'End Date', 'trim|required');
			// 	$this->form_validation->set_rules('quota', 'Quota', 'trim|required');
			// 	$this->form_validation->set_rules('price', 'Price', 'trim|required');				

			// 	if ($this->form_validation->run()) {
			// 		$table_name = 'activity';
			// 		$vendor_id = $this->input->post('vendor_id');
			// 		$categ_id = $this->input->post('categ_id');
			// 		$activity_title = $this->input->post('activity_title');
			// 		$activity_text = $this->input->post('activity_text');
			// 		$start_date = $this->input->post('start_date');
			// 		$end_date = $this->input->post('end_date');
			// 		$quota = $this->input->post('quota');
			// 		$price = $this->input->post('price');

			// 		$where_main = array('vendor_id' => $vendor_id, 'categ_id' => $categ_id);

			// 		$last_id = $this->master_model->last_id_table('id', $where_main, $table_name);
			// 		if ( $last_id->num_rows() == 0 ) { $n_id = 0; }
			// 		else { $n_id = substr($last_id->row()->id, -3); }
			// 		$new_id = sprintf('%03s', $n_id + 1);

			// 		if ( $this->master_model->get_data('id', $table_name, array_merge(array('activity_title' => trim($activity_title)), $where_main), null, null)->num_rows() == 0 ) {

			// 			$this->load->helper(array('common_function'));

			// 			$param = 'public/attachments/images/activities/' . sprintf('%03s', $categ_id) . '/' . sprintf('%07s', $vendor_id) . '/';
			// 			create_dir($param, $new_id);

			// 			$fileName = $_FILES['import']['name'];
			// 			$file_name_new = str_replace(array(' ','-',':'), '_', strtolower($fileName));
			// 			$config['upload_path'] = './'.$param.$new_id.'/';
			// 			$config['file_name'] = $file_name_new;
			// 			$config['allowed_types'] = 'gif|jpg|png';

			// 			$this->load->library('upload');
			// 			$this->upload->initialize($config);

			// 			if(! $this->upload->do_upload('import') )
			// 			$this->upload->display_errors();

			// 			$idnew = sprintf('%03s', $categ_id).sprintf('%07s', $vendor_id).$new_id;

			// 			$insert_data = array(
			// 				'id' => $idnew,
			// 				'vendor_id' => $vendor_id,
			// 				'categ_id' => $categ_id,
			// 				'activity_title' => $activity_title,
			// 				'activity_text' => $activity_text,
			// 				'start_date' => date('Y-m-d H:i:s', strtotime($start_date)),
			// 				'end_date' => date('Y-m-d H:i:s', strtotime($end_date)),
			// 				'quota' => $quota,
			// 				'price' => $price,
			// 				'url_image' => $param.$new_id.'/',
			// 				'image_arr' => $config['file_name'],
			// 				'registered' => date('Y-m-d H:i:s'),
			// 				'activated' => 1,
			// 				'user_id' => $this->session->userdata('user_id')
			// 			);

			// 			$this->master_model->insert_data($table_name, $insert_data);
			// 			$msg_data['message'] = 'Success, Activity has been added.';

			// 		} else { $msg_data['message'] = 'Failed, Activity already exist in database.'; }

			// 	} else { $msg_data['message'] = null; }

			// } else { $msg_data['message'] = null; }

			$data = array(
				'title' => 'Add Vendor',
				'content' => 'form_vendor'
			);
			$this->load->view('includes/template', array_merge($data, $msg_data));

		} else { redirect('auth'); }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */