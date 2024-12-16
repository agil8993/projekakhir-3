<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->order_by('tanggal', 'DESC');
        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
        $konten = $this->db->get()->result_array();
		$data = array(
			'title' 	=> 'Beranda',
			'judul'		=> "Beranda | Foods",
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'caraousel'	=> $caraousel,
			'konten'	=> $konten
		);
		$this->load->view('beranda',$data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->where('slug',$id);
        $konten = $this->db->get()->row();
		$data = array(
			'title' 	=> 'Detail Blog',
			'judul'		=> $konten->judul." | Foods",
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'konten'	=> $konten
		);
		$this->load->view('detail',$data);
	}
	public function blog(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->order_by('tanggal', 'DESC');
        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
        $konten = $this->db->get()->result_array();
		$data = array(
			'title' 	=> 'Blog',
			'judul'		=> "Beranda | Foods",
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'caraousel'	=> $caraousel,
			'konten'	=> $konten
		);
		$this->load->view('blog',$data);
	}
	public function kategori($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->where('a.id_kategori', $id);
        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
        $konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'title' 		=> 'Kategori',
			'judul'			=> $nama_kategori." | Foods",
			'nama_kategori'	=> $nama_kategori,
			'konfig'		=> $konfig,
			'kategori'		=> $kategori,
			'konten'		=> $konten
		);
		$this->load->view('kategori',$data);
	}
	public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten');
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

        $data = array(
			'title'   => 'Halaman Galeri',
            'judul' => "galeri | foods",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
            'galeri' => $galeri,
			'caraousel'	=> $caraousel
        );  
        $this->load->view('galeri',$data);
	}
	public function cari(){
		$judul = $this->input->post('judul');
	
		$tw = $this->home_model->cari($judul);
	
		// Cek apakah data ditemukan
		if (empty($tw)) {
			// Jika data tidak ditemukan, beri pesan dan tetap di halaman dashboard
			$this->session->set_flashdata('message', 'Tidak ada tw yang ditemukan.');
			redirect('');
		} else {
			// Jika data ditemukan, arahkan ke halaman hasil dan kirim data
			$data = array(
				'halaman' => 'Carbook - Search',
				'tw' => $tw,
			);
			// var_dump($data);
			// die;
			$this->load->view('tw', $data);
	}
	}
}
