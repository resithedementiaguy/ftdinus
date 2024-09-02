<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_rps extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_rps()
    {
        $this->db->select('srm_mtk.*, srm_rps.*');
        $this->db->from('srm_rps');
        $this->db->join('srm_mtk', 'CAST(srm_mtk.idx_mtk AS UNSIGNED) = CAST(srm_rps.mtk_rps AS UNSIGNED)', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_rps_by_id($id)
    {
        $this->db->select('srm_mtk.*, srm_rps.*');
        $this->db->from('srm_rps');
        $this->db->join('srm_mtk', 'CAST(srm_mtk.idx_mtk AS UNSIGNED) = CAST(srm_rps.mtk_rps AS UNSIGNED)', 'left');
        $this->db->where('srm_rps.idx_rps', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_rps($data)
    {
        return $this->db->insert('srm_rps', $data);
    }

    // Update data program studi
    public function update_rps($id, $data)
    {
        $this->db->where('idx_rps', $id);
        return $this->db->update('srm_rps', $data);
    }

    // Hapus data program studi
    public function delete_rps($id)
    {
        return $this->db->delete('srm_rps', array('idx_rps' => $id));
    }
}
