<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	public function simpan(){
		$data = array(
			'username'	=> $this->input->post('username'),
			'nama'		=> $this->input->post('nama'),
			'level'		=> $this->input->post('level'),
			'password'	=> md5($this->input->post('password'))
		);
		$this->db->insert('user',$data);
	}
	public function update(){
		$where = array(
			'id_user'	=> $this->input->post('id_user')
		);
		$data = array(
			'nama'		=> $this->input->post('nama')
		);

		$this->db->update('user',$data,$where);
	}
}
