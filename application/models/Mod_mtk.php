<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_mtk extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_mtk()
    {
        $this->db->select('*');
        $this->db->from('srm_mtk');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_mtk_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('srm_mtk');
        $this->db->where('idx_mtk', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_mtk($data)
    {
        return $this->db->insert('srm_mtk', $data);
    }

    // Update data program studi
    public function update_mtk($id, $data)
    {
        $this->db->where('idx_mtk', $id);
        return $this->db->update('srm_mtk', $data);
    }

    // Hapus data program studi
    public function delete_mtk($id)
    {
        return $this->db->delete('srm_mtk', array('idx_mtk' => $id));
    }
}
