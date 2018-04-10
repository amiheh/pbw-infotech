<?php 
 
class Mod_data extends CI_Model{
	function index(){
		return $this->db->get('user');
	}
	
	function tampil_data(){
		return $this->db->get('user');
	}
	
	function get_timestamp(){
		$query =  $this->db->query('SELECT timestamp FROM user GROUP BY timestamp');
        return $query->result_array();
	}
	
	function get_count_timestamp(){
		$query = $this->db->query('SELECT COUNT(timestamp) as count FROM user GROUP BY timestamp');
        return $query->result_array();
	}
}