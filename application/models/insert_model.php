<?php
	class insert_model extends CI_Model{
		function __construct() {
			parent::__construct();
		}
		function getData(){
			$res = $this->db->get('simpan');
			return $res->result_array();
		}
	}
?>