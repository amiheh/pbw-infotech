<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->model('m_data');
        $this->load->database();
	}

	public function index()
	{
		$data['photos'] = $this->m_data->tampil_data()->result();
		$this->load->view ('index', $data);
	}

	public function halamanprofil()
	{
		echo "Ini profil baru";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */