<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model {
    public function ambil_produk(){
        return $this->db->get('konten')->result();
    }
    public function ambil_about(){
        return $this->db->get('konten')->result();
    }

    public function cari($judul){
        $this->db->where('judul',$judul);
        return $this->db->get('konten')->row();
    }
    public function total_user()
    {
        return $this->db->count_all('user');
    }
    public function total_kategori()
    {
        return $this->db->count_all('kategori');
    }
    public function total_konten()
    {
        return $this->db->count_all('konten');
    }
    public function total_caraousel()
    {
        return $this->db->count_all('caraousel');
    }
    public function total_galeri()
    {
        return $this->db->count_all('galeri');
    }
}