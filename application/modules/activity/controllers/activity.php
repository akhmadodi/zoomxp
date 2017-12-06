<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('auth/tank_auth');
		$this->load->model('master/master_model');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper(array('common_function'));
		$this->load->library('encrypt');
	}

	public function index() {

		if ($this->tank_auth->is_logged_in()) {

			$data = array(
				'title' => 'Activities',
				'content' => 'activity',
				// 'link_add' => 'true'
			);
			$this->load->view('includes/admin/template', $data);

		} else { redirect('auth'); }

	}

	function auto_cancel_order() {

		$get_data = $this->master_model->get_data('id, payment_due', 'book_header', array('status_id' => 0), null, null);
		foreach ($get_data->result() as $key) {

			if ( $key->payment_due < date('Y-m-d H:i:s') ) {
				$this->master_model->update_table(array('id' => $key->id), array('status_id' => 3), 'book_header');
			}
		}

	}

	function payment_confirm() {

		$id = '1711010432001';
		$amount = 390765.75;
		$amount_submit = 391000;
		$bank_account = '1099888123123';
		$bank_name = 'PT Bank Central Asia, Tbk';
		$account_owner = 'Alan Darma Saputra';

		$this->master_model->insert_data('payment_detail',array(
			'id' => $id,
			'submit_date' => date('Y-m-d H:i:s'),
			'amount' => $amount,
			'amount_submit' => $amount_submit,
			'bank_account' => $bank_account,
			'bank_name' => $bank_name,
			'account_owner' => $account_owner
		));

		$this->master_model->update_table(array('id' => $id), array('status_id' => 1), 'book_header');

	}

	function booking_approve() {

		$id = '1711010432001';
		$status_id = 1;
		$this->master_model->insert_data('approved_detail',array(
			'id' => $id,
			'approved_time' => date('Y-m-d H:i:s'),
			'user_id' => $this->session->userdata('user_id')
		));
		$this->master_model->update_table(array('id' => $id), array('status_id' => $status_id), 'book_header');

	}

	function booking_cancel() {

		$id = '1711010432001';
		$this->master_model->delete_data(array('id' => $id), 'book_header');
		$this->master_model->delete_data(array('id' => $id), 'book_detail');

	}

	function booking_delete_item() {

		$id = '1711010432001';
		$activity_id = 'A1710310503002';
		$this->master_model->delete_data(array('id' => $id, 'activity_id' => $activity_id), 'book_detail');

	}

	function booking_end() {

		$id = '1711010432001';
		$get_data = $this->master_model->get_data('amount_total, qty', 'book_detail', array('id' => $id), null, null);
		$amount_total = 0;
		$item_total = 0;
		foreach ($get_data->result() as $key) {
			$amount_total += $key->amount_total;
			$item_total += $key->qty;
		}

		$this->master_model->update_table(array('id' => $id), array('amount_total' => $amount_total, 'item_total' => $item_total), 'book_header');

	}

	function booking_detail() {

		$table_name = 'book_detail';
		$id = '1711010432001';
		$activity_id = 'A1710310503002';
		$start_date = date('Y-m-d H:i:s');
		$end_date = date('Y-m-d H:i:s', strtotime('+24 hours'));
		$qty = 1;

		$get_activity = $this->master_model->get_data('price, quota', 'm_activity', array('id' => $activity_id), null, null)->row();
		$amount = $get_activity->price;

		$this->master_model->insert_data($table_name,array(
			'id' => $id,
			'activity_id' => $activity_id,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'qty' => $qty,
			'amount' => $amount,
			'amount_total' => round(($amount * $qty), 2)
		));

	}

	function booking() {

		$full_name = 'Akhmad Odi N';
		$email = 'odi@mail.com';
		$phone = '081295531990';

		$last_user = $this->master_model->last_id_table('id', array(), 'users_temp');
		$order_owner = $last_user->row()->id + 1;

		$this->master_model->insert_data('users_temp',array(
			'id' => $order_owner,
			'email' => $email,
			'full_name' => $full_name,
			'phone' => $phone,
			'registered' => date('Y-m-d H:i:s')
		));

		$table_name = 'book_header';

		$where_date = array('YEAR(order_date)' => date('Y'), 'MONTH(order_date)' => date('m'), 'DAY(order_date)' => date('d'));
		$where_time = array('HOUR(order_date)' => date('H'), 'MINUTE(order_date)' => date('i'));

		$last_id = $this->master_model->last_id_table('id', array_merge($where_date, $where_time), $table_name);

		if ( !isset($last_id->row()->id) ) {

			$n = 1;

		} else {

			$n = (int)substr($last_id->row()->id, (strlen($last_id->row()->id) - 3), 3) + 1;

		}

		$new_id = date('ymdhi').sprintf('%03s', $n);

		$this->master_model->insert_data($table_name,array(
			'id' => $new_id,
			'user_id' => $order_owner,
			'status_id' => 0,
			'order_date' => date('Y-m-d H:i:s'),
			'payment_due' => date('Y-m-d H:i:s', strtotime('+24 hours'))
		));

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
					'start_date' => date('Y-m-d', strtotime($key->start_date)),
					'end_date' => date('Y-m-d', strtotime($key->end_date)),
					'quota' => number_format($key->quota, 0, '.', ','),
					'price' => number_format($key->price, 0, '.', ','),
					'action' => '<a href="javascript:void(0);" class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i></a>
					<a href="javascript:void(0);" class="btn btn-xs danger btn-icon"><i class="fa fa-times"></i></a>'
				);
			}
			echo json_encode($data);
		}
	}


	function activity_detail() {

		$id = base64_decode($this->uri->segment(2));
		$data = array(
			'title' => 'Activity Detail',
			'style' => 'activity/style',
			'js' => 'activity/js',
			'categories' => 'outdoor',
			'identity' => 'The Coral Garden, Tulamben',
			'content' => 'activity/content'
		);

		$this->load->view('includes/template', $data);

	}

}