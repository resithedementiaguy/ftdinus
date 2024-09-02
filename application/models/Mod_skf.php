<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_skf extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_program_studi()
    {
        $this->db->select('srm_ipt.*, srm_sfk.*, srm_skf.*');
        $this->db->from('srm_skf');
        $this->db->join('srm_sfk', 'srm_skf.sfk_skf = srm_sfk.idx_sfk', 'left');
        $this->db->join('srm_ipt', 'srm_sfk.ipt_sfk = srm_ipt.idx_ipt', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_program_studi_by_id($id)
    {
        $this->db->select('srm_ipt.*, srm_sfk.*, srm_skf.*');
        $this->db->from('srm_skf');
        $this->db->join('srm_sfk', 'srm_skf.sfk_skf = srm_sfk.idx_sfk', 'left');
        $this->db->join('srm_ipt', 'srm_sfk.ipt_sfk = srm_ipt.idx_ipt', 'left');
        $this->db->where('srm_skf.idx_skf', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_program_studi($data)
    {
        return $this->db->insert('srm_skf', $data);
    }

    // Update data program studi
    public function update_program_studi($id, $data)
    {
        $this->db->where('idx_skf', $id);
        return $this->db->update('srm_skf', $data);
    }

    // Hapus data program studi
    public function delete_program_studi($id)
    {
        return $this->db->delete('srm_skf', array('idx_skf' => $id));
    }
}