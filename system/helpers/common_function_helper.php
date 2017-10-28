<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function _error() {
    $CI =& get_instance();
    $data = array(
        'title' => 'Error Page',
        'main_content' => 'error',
        'message_error' => "Oops! Sorry, you don't have permission to access.",
    );
    
    $CI->load->view('error', $data);
}

function curquota($activity_id) {
    $CI =& get_instance();
    $CI->load->model('master/master_model');
    $query = $CI->master_model->sum_field('quota', array('activity_id' => $activity_id), 'book');
    $cek_quota = $CI->master_model->get_data('quota', 'activity', array('activated' => 1, 'id' => $activity_id), null, null);
    $end_quota = $cek_quota->row()->quota - $query->row()->total;
    return $end_quota;
}

function create_dir($param, $identity) {
    if (!file_exists($param.'/'.$identity)) {
        mkdir($param.'/'.$identity, 0777, true);
    }
}