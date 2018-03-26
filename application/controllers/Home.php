<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['show_photos'] = $this->load->view('show', '', TRUE);
		$data['add_photos'] = $this->load->view('tambah_photo', '', TRUE);
		$this->load->view ('index', $data);
	}

	public function halamanprofil()
	{
		echo "Ini profil baru";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */