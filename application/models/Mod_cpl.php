<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_cpl extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_cpl()
    {
        $this->db->select('srm_skf.*, srm_cpl.*');
        $this->db->from('srm_cpl');
        $this->db->join('srm_skf', 'CAST(srm_skf.idx_skf AS UNSIGNED) = CAST(srm_cpl.skf_cpl AS UNSIGNED)', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_cpl_by_id($id)
    {
        $this->db->select('srm_skf.*, srm_cpl.*');
        $this->db->from('srm_cpl');
        $this->db->join('srm_skf', 'CAST(srm_skf.idx_skf AS UNSIGNED) = CAST(srm_cpl.skf_cpl AS UNSIGNED)', 'left');
        $this->db->where('srm_cpl.idx_cpl', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_cpl($data)
    {
        return $this->db->insert('srm_cpl', $data);
    }

    // Update data program studi
    public function update_cpl($id, $data)
    {
        $this->db->where('idx_cpl', $id);
        return $this->db->update('srm_cpl', $data);
    }

    // Hapus data program studi
    public function delete_cpl($id)
    {
        return $this->db->delete('srm_cpl', array('idx_cpl' => $id));
    }
}
