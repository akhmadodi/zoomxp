<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

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

						$fileName = isset($_FILES['import']['name']) ? $_FILES['import']['name']:'';
						if ( !empty( $fileName ) ) {

							$file_name_new = str_replace(array(' ','-',':'), '_', strtolower($fileName));
							$config['upload_path'] = './'.$param.$new_id.'/';
							$config['file_name'] = $file_name_new;
							$config['allowed_types'] = 'gif|jpg|png';

							$this->load->library('upload');
							$this->upload->initialize($config);

							if(! $this->upload->do_upload('import') )
							$this->upload->display_errors();

							$image_name_arr = array('image_path' => $param.$new_id.'/'.$config['file_name']);

						} else {

							$image_name_arr = array('image_path' => $param.$new_id.'/');

						}

						$this->master_model->insert_data($table_name, array_merge(array('id' => $new_id, 'category' => $categ_name), $image_name_arr));
						$data['alert_message'] = 'Category has been added.';

					} else { $data['alert_message'] = 'Category already exist in database.'; }

				} else { $data['alert_message'] = 'Field is required.'; }

			}

			$data = array(
				'title' => 'Add Category',
				'content' => 'form_categ'
			);
			// $this->load->view('includes/template', array_merge($data, $msg_data));
			$this->load->view($data['content'], $data);

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

					$table_name = 'm_activity';
					$vendor_id = $this->input->post('vendor_id');
					$categ_id = $this->input->post('categ_id');
					$activity_title = $this->input->post('activity_title');
					$activity_text = $this->input->post('activity_text');
					$start_date = $this->input->post('start_date');
					$end_date = $this->input->post('end_date');
					$quota = $this->input->post('quota');
					$price = $this->input->post('price');

					$where_main = array('vendor_id' => $vendor_id, 'categ_id' => $categ_id);

					$get_rows = $this->master_model->get_data('id', $table_name, array_merge($where_main, array('activity_title' => $activity_title)), null, null);

					if ( $get_rows->num_rows() == 0 ) {

						$where_date = array('YEAR(registered)' => date('Y'), 'MONTH(registered)' => date('m'), 'DAY(registered)' => date('d'));
						$where_time = array('HOUR(registered)' => date('H'), 'MINUTE(registered)' => date('i'));

						$last_id = $this->master_model->last_id_table('id', array_merge($where_date, $where_time), $table_name);

						if ( !isset($last_id->row()->id) ) {
							
							$n = 1;

						} else {

							$n = (int)substr($last_id->row()->id, (strlen($last_id->row()->id) - 3), 3) + 1;

						}

						$new_id = 'A'.date('ymdhi').sprintf('%03s', $n);
						
						$this->load->helper(array('common_function'));

						$param = 'public/attachments/images/activities/' . sprintf('%03s', $categ_id) . '/' . sprintf('%07s', $vendor_id) . '/';
						create_dir($param, $new_id);

						$fileName = isset($_FILES['import']['name']) ? $_FILES['import']['name']:'';
						if ( !empty( $fileName ) ) {

							$file_name_new = str_replace(array(' ','-',':'), '_', strtolower($fileName));
							$config['upload_path'] = './'.$param.$new_id.'/';
							$config['file_name'] = $file_name_new;
							$config['allowed_types'] = 'gif|jpg|png';

							$this->load->library('upload');
							$this->upload->initialize($config);

							if(! $this->upload->do_upload('import') )
							$this->upload->display_errors();

							$image_name_arr = array('image_name_arr' => $config['file_name']);

						} else {

							$image_name_arr = array();

						}

						$insert_data = array(
							'id' => $new_id,
							'vendor_id' => $vendor_id,
							'categ_id' => $categ_id,
							'activity_title' => $activity_title,
							'activity_text' => $activity_text,
							'start_date' => $start_date,
							'end_date' => $end_date,
							'quota' => $quota,
							'price' => $price,
							'image_path' => $param.$new_id.'/',
							'registered' => date('Y-m-d H:i:s'),
							'activated' => 1,
							'user_id' => $this->session->userdata('user_id')
						);

						$this->master_model->insert_data($table_name, array_merge($insert_data, $image_name_arr));
						$data['alert_message'] = 'Activity has been added.';
						
					} else { $data['alert_message'] = 'Activity already exist in database.'; }

				} else { $data['alert_message'] = 'Field is required.'; }

			} else { $msg_data['message'] = null; }

			$data = array(
				'title' => 'Add Activity',
				'content' => 'form_activity',
				'vendor' => $this->master_model->get_data('id, name', 'm_vendor', array(), 'vendor_name', 'asc'),
				'category' => $this->master_model->get_data('id, category', 'm_categ', array(), 'category', 'asc')
			);
			// $this->load->view('includes/template', array_merge($data, $msg_data));
			$this->load->view($data['content'], $data);

		} else { redirect('auth'); }

	}

	function add_vendor() {

		if ($this->tank_auth->is_logged_in()) {

			if ($this->input->post('submit')) {

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				$this->form_validation->set_rules('city', 'City', 'trim|required');
				$this->form_validation->set_rules('province', 'Province', 'trim|required');
				$this->form_validation->set_rules('country', 'Country', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
				$this->form_validation->set_rules('pic_name', 'PIC', 'trim|required');

				if ($this->form_validation->run()) {

					$table_name = 'm_vendor';
					$name = $this->input->post('name');
					$address = $this->input->post('address');
					$city = $this->input->post('city');
					$province = $this->input->post('province');
					$country = $this->input->post('country');
					$zip_code = $this->input->post('zip_code');
					$email = $this->input->post('email');
					$phone = $this->input->post('phone');
					$pic_name = $this->input->post('pic_name');

					$where_main = array('name' => $name, 'country' => $country, 'email' => $email);
					$get_rows = $this->master_model->get_data('id', $table_name, $where_main, null, null);

					if ( $get_rows->num_rows() == 0 ) {

						$where_date = array('YEAR(registered)' => date('Y'), 'MONTH(registered)' => date('m'), 'DAY(registered)' => date('d'));
						$where_time = array('HOUR(registered)' => date('H'), 'MINUTE(registered)' => date('i'));

						$last_id = $this->master_model->last_id_table('id', array_merge($where_date, $where_time), $table_name);

						if ( !isset($last_id->row()->id) ) {
							
							$n = 1;

						} else {

							$n = (int)substr($last_id->row()->id, (strlen($last_id->row()->id) - 3), 3) + 1;

						}

						$new_id = 'S'.date('ymdhi').sprintf('%03s', $n);

						$insert_data = array(
							'id' => $new_id,
							'name' => $name,
							'address' => $address,
							'city' => $city,
							'province' => $province,
							'country' => $country,
							'zip_code' => $zip_code,
							'email' => $email,
							'phone' => $phone,
							'pic_name' => $pic_name,
							'registered' => date('Y-m-d H:i:s'),
							'activated' => 1,
							'user_id' => $this->session->userdata('user_id')
						);

						$this->master_model->insert_data($table_name, $insert_data);
						$data['alert_message'] = 'Vendor has been registered.';

					} else { $data['alert_message'] = 'Vendor base on name, country & email already exist in database.'; }

				} else { $data['alert_message'] = 'Field is required.'; }

			}

			$data = array(
				'title' => 'Add Vendor',
				'content' => 'form_vendor'
			);
			// $this->load->view('includes/template', array_merge($data, $msg_data));
			$this->load->view($data['content'], $data);

		} else { redirect('auth'); }

	}

}