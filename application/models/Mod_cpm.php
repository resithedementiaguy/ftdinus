<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_cpm extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_cpm()
    {
        $this->db->select('*');
        $this->db->from('srm_cpm');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_cpm_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('srm_cpm');
        $this->db->where('idx_cpm', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_cpm($data)
    {
        return $this->db->insert('srm_cpm', $data);
    }

    // Update data program studi
    public function update_cpm($id, $data)
    {
        $this->db->where('idx_cpm', $id);
        return $this->db->update('srm_cpm', $data);
    }

    // Hapus data program studi
    public function delete_cpm($id)
    {
        return $this->db->delete('srm_cpm', array('idx_cpm' => $id));
    }
}
