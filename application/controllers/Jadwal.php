<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_backend');
    }

    public function index()
    {
        $data['jadwal'] = $this->Mod_backend->get_jadwal();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/jadwal/view', $data);
        $this->load->view('admin/partials/footer');
        $this->check_login(); // Ensure user is logged in
    }

    private function check_login()
    {
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            // Redirect to login page if not logged in
            redirect('auth');
        }
    }

    public function add_view()
    {
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/jadwal/add');
        $this->load->view('admin/partials/footer');
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_ruang', 'kd_ruang', 'required');
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
        $this->form_validation->set_rules('start_time', 'start_time', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('jadwal/add_view');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $upl_time = date('Y-m-d H:i:s', time());

            $data = array(
                'kd_ruang' => $this->input->post('kd_ruang'),
                'upl_time' => $upl_time,
                'kegiatan' => $this->input->post('kegiatan'),
                'start_time' => $this->input->post('start_time'),
                'end_time' => $this->input->post('end_time'),
                'deskripsi' => $this->input->post('deskripsi')
            );
            $this->Mod_backend->add_jadwal($data);
            redirect('jadwal');
        }
    }
}
