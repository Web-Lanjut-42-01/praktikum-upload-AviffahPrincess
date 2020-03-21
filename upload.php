<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('M_upload');
	}

	public function index(){
		$data['gambar'] = $this->M_upload->view();
		$this->load->view('view', $data);
	}

	public function tambah(){
		$data = array();

		if($this->input->post('submit')){
			$upload = $this->M_upload->upload();

			if($upload['result'] == "success"){
				$this->M_upload->save($upload);
				redirect('upload');
			}else{
				$data['pesan'] = $upload['error']; 
			}
		}

		$this->load->view('form', $data);
	}
}
