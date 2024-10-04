<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_cpmk extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_cpmk()
    {
        // Select the relevant fields from both tables
        $this->db->select('coba_matkul.nama_matkul, coba_cpmk.cpmk1, coba_cpmk.cpmk2, coba_cpmk.cpmk3, coba_cpmk.cpmk4, coba_cpmk.cpmk5, coba_cpmk.cpmk6');
        $this->db->from('coba_cpmk');
        $this->db->join('coba_matkul', 'coba_cpmk.id_matkul = coba_matkul.id');
        
        // Fetch the result
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_cpmk_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('srm_cpmk');
        $this->db->where('idx_cpmk', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_cpmk($data)
    {
        return $this->db->insert('srm_cpmk', $data);
    }

    // Update data program studi
    public function update_cpmk($id, $data)
    {
        $this->db->where('idx_cpmk', $id);
        return $this->db->update('srm_cpmk', $data);
    }

    // Hapus data program studi
    public function delete_cpmk($id)
    {
        return $this->db->delete('srm_cpmk', array('idx_cpmk' => $id));
    }
}
