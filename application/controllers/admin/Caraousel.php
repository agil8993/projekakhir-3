<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caraousel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
		$data = array(
			'title'     => 'Caraousel',
            'caraousel'  => $caraousel
		);
		$this->template->load('template_admin','admin/caraousel_index',$data);
	}
	public function simpan(){
			$namafoto = date('YmdHis') . '.jpg';
			$config['upload_path'] = 'aset/upload/caraousel/';
			$config['max_size'] = 1000 * 1024; // 3MB; 0=unlimited
			$config['file_name'] = $namafoto;
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			if ($_FILES['foto']['size'] >= 1000 * 1024) {
				$this->session->set_flashdata('alert',
					'<div class="alert alert-danger alert-dismissible" role="alert">
						Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>'
				);
				redirect('admin/caraousel');
			} elseif (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
		}
		$data= array(
			'judul'			=> $this->input->post('judul'),
			'foto'			=> $namafoto,
		);
		$this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil menambahkan caraousel baru!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/caraousel');
	}
	public function delete_data($id){
		$filename=FCPATH.'/aset/upload/caraousel/'.$id;
			if(file_exists($filename)){
				unlink("./aset/upload/caraousel/".$id);
			}
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-secondary alert-dismissible fade show"alert">
		<strong>Konten dihapus!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/caraousel');
	}
}
