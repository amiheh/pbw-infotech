<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['content'] = $this->db->get('simpan');
		$this->load->view('show');
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

		if ( ! $this->upload->do_upload('berkas')){
			echo "<script>window.alert("Upload error");</script>";
		}else{
		$data = array(
			'gambar' => $this->upload->data()['file_name'], 
			'email' => $this->input->post(email), 
			'keterangan' => $this->input->post(caption) 
		);

		$this->db->insert('simpan', $data);

			echo "<script>window.alert("Upload berhasil");</script>";
		redirect('index','refresh');
		}
		
	}

	public function update($id=NULL)
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('simpan');
		$this->load->view('update', $data);
	}

	public function action_update($id=NULL)
	{
		$data = array(
			'gambar' => $this->input->post(gambar), 
			'email' => $this->input->post(email), 
			'keterangan' => $this->input->post(caption) 
		);
		$this->db->where('id', $id);
		$this->db->update('simpan', $data);
		redirect('index','refresh');
	}

	public function delete($id=NULL)
	{
		$this->db->where('id', $id);
		$this->db->delete('simpan');

		redirect('index','refresh');
	}

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */