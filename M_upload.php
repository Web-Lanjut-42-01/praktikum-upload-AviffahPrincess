<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_upload extends CI_Model {

	public function view(){
		return $this->db->get('makanan')->result();
	}

	public function upload(){
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '20480';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function save($upload){
		$data = array(
			'namamakanan'=>$this->input->post('nama'),
			'hargamakanan'=>$this->input->post('harga'),
			'fotomakanan' => $upload['file']['file_name']
		);
		$this->db->insert('makanan', $data);
	}
}
