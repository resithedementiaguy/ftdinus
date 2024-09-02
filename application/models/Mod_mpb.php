<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_mpb extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data program studi dengan relasi ke tiga tabel
    public function get_mpb()
    {
        $this->db->select('*');
        $this->db->from('srm_mpb');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data program studi berdasarkan ID dengan relasi ke tiga tabel
    public function get_mpb_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('srm_mpb');
        $this->db->where('idx_mpb', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data program studi
    public function add_mpb($data)
    {
        return $this->db->insert('srm_mpb', $data);
    }

    // Update data program studi
    public function update_mpb($id, $data)
    {
        $this->db->where('idx_mpb', $id);
        return $this->db->update('srm_mpb', $data);
    }

    // Hapus data program studi
    public function delete_mpb($id)
    {
        return $this->db->delete('srm_mpb', array('idx_mpb' => $id));
    }
}
