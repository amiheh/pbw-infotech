<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['simpan'] = $this->m_data->tampil_data()->result();
		$this->load->view('show',$data);
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

		if (!$this->upload->do_upload('berkas') ){
			echo "<script>window.alert("Upload error");</script>"
		}else{
		$data = array(
			'gambar' => $this->upload->data()['file_name'], 
			'email' => $this->input->post(email), 
			'keterangan' => $this->input->post(caption) 
		);

		$this->m_data->input_data($data, 'simpan')

			echo "<script>window.alert("Upload berhasil");</script>";
		redirect('index','refresh');
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
		redirect('index', 'refresh');
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'simpan');
		redirect('index','refresh');
	}

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */