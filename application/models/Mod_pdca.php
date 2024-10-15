<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_pdca extends CI_Model
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
        $this->db->select('matakuliah.nama_matkul, cpmk_kumulatif.cpmk1, cpmk_kumulatif.cpmk2, cpmk_kumulatif.cpmk3, cpmk_kumulatif.cpmk4, cpmk_kumulatif.cpmk5, cpmk_kumulatif.cpmk6');
        $this->db->from('cpmk_kumulatif');
        $this->db->join('matakuliah', 'cpmk_kumulatif.id_matkul = matakuliah.id');
        
        // Fetch the result
        $query = $this->db->get();
        return $query->result();
    }

    public function get_pdca()
    {
        $this->db->select('pdca.ins_time as ins_time,pdca.thn_pdca as tahun, pdca.cpl_kategori, p_pdca.*, d_pdca.*, a_pdca.*');
        $this->db->from('pdca');
        $this->db->join('p_pdca', 'p_pdca.id = pdca.id_p', 'left');
        $this->db->join('d_pdca', 'd_pdca.id = pdca.id_d', 'left');
        $this->db->join('a_pdca', 'a_pdca.id = pdca.id_a', 'left');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function add_plan($data)
    {
        return $this->db->insert('p_pdca', $data);
    }

    public function add_do($data)
    {
        return $this->db->insert('d_pdca', $data);
    }

    public function add_action($data)
    {
        return $this->db->insert('a_pdca', $data);
    }

    public function add_pdca($data)
    {
        return $this->db->insert('pdca', $data);
    }
}
