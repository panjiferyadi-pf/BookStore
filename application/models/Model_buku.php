<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');


// Model CI untuk tb_buku dan tb_penerbit
class Model_buku extends CI_Model{

    //Ambil data pada tb_buku
    public function get_all_buku() {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->join('tb_penerbit', 'tb_penerbit.kode_penerbit = 
        tb_buku.kode_penerbit');
        $query = $this->db->get();

        return $query;
    }

    //Ambil data pada tb_penerbit
    public function get_all_penerbit() {
        $this->db->select('*');
        $this->db->from('tb_penerbit');
        $query = $this->db->get();

        return $query;
    }

    //hapus data pada tb_buku
    public function hapus_buku($kode) {
        $this->db->where('kode_buku', $kode);
        $this->db->delete('tb_buku');
    }

    //hapus data pada tb_penerbit
    public function hapus_penerbit($kode)
    {
        $this->db->where('kode_penerbit', $kode);
        $query = $this->db->get('tb_buku');
        if ($query->num_rows() > 0) {
            //Data tidak dapat dihapus karena sudah dipakai di tb_buku
            $this->session->set_flashdata('pesan','<div class="alert alert-warning" role="alert">Data gagal dihapus, Penerbit sedang digunakan di Daftar Buku.</div>');
        } else {
            $this->db->where('kode_penerbit', $kode);
            $this->db->delete('tb_penerbit');
            //Data berhasil dihapus
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Data berhasil dihapus.</div>');
        }
    }

    //tambahkan data buku
    public function simpan_buku($data) {
        $this->db->insert('tb_buku', $data);    
    }

    //tambahkan data penerbit
    public function simpan_penerbit($data) {
        $this->db->insert('tb_penerbit', $data);
    }

    //ambil data buku berdasarkan kode_buku
    public function get_buku_by_kode($kode) {
        return $this->db->get_where('tb_buku', array('kode_buku' => $kode));    
    }

    //ambil data penerbit berdasarkan kode_penerbit
    public function get_penerbit_by_kode($kode) {
        return $this->db->get_where('tb_penerbit', array('kode_penerbit' => $kode));
    }

    //update data di tb_buku
    public function update_buku($data, $kode) {
        $this->db->where('kode_buku', $kode);
        $this->db->update('tb_buku', $data);
    }

    //update data di tb_penerbit
    public function update_penerbit($data, $kode) {
        $this->db->where('kode_penerbit', $kode);
        $this->db->update('tb_penerbit', $data);
    }
}