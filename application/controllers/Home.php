<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->model('m_data');
        $this->load->database(); 
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}

	public function index()
	{
		$data['photos'] = $this->m_data->tampil_data()->result();
		$this->load->view ('index', $data);
	}
	
	public function action_add()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('gambar') ){
			echo "<script>window.alert('Upload error');</script>";
		} else {
			$data = array(
				'gambar' => $this->upload->data()['file_name'],
				'email' => $this->input->post(email), 
				'keterangan' => $this->input->post(caption) 
			);
			$this->m_data->input_data($data, 'simpan');
			redirect('');
		}
		
	}
	
	public function halamanprofil()
	{
		echo "Ini profil baru";
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */