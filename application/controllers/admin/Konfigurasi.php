<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$data = array(
			'title' 	=> 'konfigurasi',
			'judul' 	=> 'konfigurasi',
			'konfig'	=>	$konfig

		);
		$this->template->load('template_admin','admin/konfigurasi',$data);
	}
	public function update(){
		$where = array(
			'id_konfigurasi'	=>1
		);
		$data = array(
			'judul_website'		=> $this->input->post('judul_website'),
			'profil_website'	=> $this->input->post('profil_website'),
			'instagram'			=> $this->input->post('instagram'),
			'tik_tok'			=> $this->input->post('tik_tok'),
			'email'				=> $this->input->post('email'),
			'alamat'			=> $this->input->post('alamat'),
			'no_wa'				=> $this->input->post('no_wa')
		);

		$this->db->update('konfigurasi',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Konfigurasi berhasil diperbarui!!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" fdprocessedid="0q2avq">
		<span aria-hidden="true">×</span>
		</button>
		</div>
		');
		redirect('admin/konfigurasi');
	}
}
