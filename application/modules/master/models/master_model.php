<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    function get_data($select=null, $table=null, $where_arr=null, $orderby=null, $sortby=null) {
        $this->db->select($select);
        $this->db->where($where_arr);
        if ( !empty($sortby) && !empty($orderby) ) { $this->db->order_by($orderby, $sortby); }
        return $this->db->get($table);
    }

    function sum_field($field=null, $where=null, $table=null) {
        return $this->db->select('SUM('.$field.') as total', FALSE)->where($where)->get($table);
    }

    function last_id_table($field_max=null, $where=null, $table=null) {
        return $this->db->select_max($field_max)
        ->limit(1)
        ->where($where)
        ->get($table);
    }

    function insert_data($table=null, $data=null) {
        $this->db->insert($table, $data);
    }

    function update_table($where, $data, $table) {
        $this->db->where($where)->update($table, $data);
        return false;
    }

    function delete_data($where_arr=null, $table=null) {
        $this->db->where($where_arr)->delete($table);       
    }
}