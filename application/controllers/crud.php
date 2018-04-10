<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->model('m_data');
		$this->load->model('mod_data');
		$this->load->model('insert_model');
        $this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
	}
 
	function index(){
		$data['user'] = $this->mod_data->tampil_data()->result();
		$data['label'] = $this->mod_data->get_timestamp();
		$data['timestamp'] = $this->mod_data->get_count_timestamp();
		
		$this->load->view('v_tampil',$data);		
	}
	
	function export(){
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Report.xls");
    
		$data['user'] = $this->mod_data->tampil_data()->result();
		$this->load->view('v_export',$data);
	}
	
	function tambah(){
		$this->load->view('v_input');
	}
	
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$time = date('Y-m-d');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'timestamp' => $time
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
	
	function editt($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
	 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_data->update_data($where,$data,'user');
		redirect('crud/index');
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