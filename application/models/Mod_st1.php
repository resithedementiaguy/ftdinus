<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_st1 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Ambil semua data dosen s1 dengan relasi ke tiga tabel
    public function get_st1()
    {
        $this->db->select('*');
        $this->db->from('srm_st1');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Ambil data dosen s1 berdasarkan ID
    public function get_st1_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('srm_st1');
        $this->db->where('idx_st1', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah data dosen s1
    public function add_st1($data)
    {
        return $this->db->insert('srm_st1', $data);
    }

    // Update data dosen s1
    public function update_st1($id, $data)
    {
        $this->db->where('idx_st1', $id);
        return $this->db->update('srm_st1', $data);
    }

    // Hapus data dosen s1
    public function delete_st1($id)
    {
        return $this->db->delete('srm_st1', array('idx_st1' => $id));
    }
}
