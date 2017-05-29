<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_order extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function gettable_order($tablename, $order_by){
		return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
	}

	public function delete_data($id)
	{
		return $this->db->delete('order', array('id_order'=>$id));
	}
}
