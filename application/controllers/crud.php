<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_data');
		$this->load->model('insert_model');
        $this->load->database();
	}
 
	function index(){
	}
	
	public function add()
	{
		$this->load->view('tambah_foto');
	}

	public function action_add()
	{
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

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

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'simpan')->result();
		$this->load->view('update', $data);
	}

	public function action_update($id)
	{
		$data = array(
			'gambar' => $this->input->post(gambar), 
			'email' => $this->input->post(email), 
			'keterangan' => $this->input->post(caption) 
		);
 
		$where = array(
			'id' => $id
		);
	 
		$this->m_data->update_data($where,$data,'simpan');
		redirect('');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'simpan');
		redirect('');
	}

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */