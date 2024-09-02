<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_pi extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_pi()
    {
        $this->db->select('srm_skf.*, srm_cpl.*, srm_pin.*');
        $this->db->from('srm_pin');
        $this->db->join('srm_cpl', 'CAST(srm_cpl.idx_cpl AS UNSIGNED) = CAST(srm_pin.cpl_pin AS UNSIGNED)', 'left');
        $this->db->join('srm_skf', 'CAST(srm_skf.idx_skf AS UNSIGNED) = CAST(srm_cpl.skf_cpl AS UNSIGNED)', 'left');
        $query = $this->db->get();
        $result = $query->result_array();

        // Remove leading zeros
        foreach ($result as &$row) {
            $row['idx_skf'] = ltrim($row['idx_skf'], '0');
            $row['idx_cpl'] = ltrim($row['idx_cpl'], '0');
            $row['idx_pin'] = ltrim($row['idx_pin'], '0');
        }

        return $result;
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_pi_by_id($id)
    {
        $this->db->select('srm_skf.*, srm_cpl.*, srm_pin.*');
        $this->db->from('srm_pin');
        $this->db->join('srm_cpl', 'CAST(srm_cpl.idx_cpl AS UNSIGNED) = CAST(srm_pin.cpl_pin AS UNSIGNED)', 'left');
        $this->db->join('srm_skf', 'CAST(srm_skf.idx_skf AS UNSIGNED) = CAST(srm_cpl.skf_cpl AS UNSIGNED)', 'left');
        $this->db->where('srm_pin.idx_pin', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_pi($data)
    {
        return $this->db->insert('srm_pin', $data);
    }

    // Update data program studi
    public function update_pi($id, $data)
    {
        $this->db->where('idx_pin', $id);
        return $this->db->update('srm_pin', $data);
    }

    // Hapus data program studi
    public function delete_pi($id)
    {
        return $this->db->delete('srm_pin', array('idx_pin' => $id));
    }
}
