<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
		$data = array(
			'title' => 'Data User',
			'judul' => 'Data User',
            'user' => $user
		);
		$this->template->load('template_admin','admin/user_index',$data);
	}
	public function simpan(){
		$this->db->from('user');
		$this->db->where('username',$this->input->post('username'));
		$cek = $this->db->get()->result_array();
		$this->User_model->simpan();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','
			<div class="alert alert-danger" role="alert">
			Username sudah dipakai!!!
		</div>
		');
		redirect('admin/user');
		}
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil Disimpan!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/user');
	}
	public function delete($id){
		$where = array(
			'id_user'	=> $id
		);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-secondary alert-dismissible fade show"alert">
		<strong>Username dihapus!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/user');
	}
	public function update(){
		$this->User_model->update();
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Nama berhasil diperbarui!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/user');
	}
}
