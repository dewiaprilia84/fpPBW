<?php

class Model_Regis extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($data,$table);
	}
}
