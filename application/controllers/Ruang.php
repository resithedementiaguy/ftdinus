<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_backend');
    }

    public function index()
    {
        $data['ruang'] = $this->Mod_backend->get_ruang();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/frontend/ruang/view', $data);
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
        $this->load->view('admin/frontend/ruang/add');
        $this->load->view('admin/partials/footer');
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kd_ruang', 'kd_ruang', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kap_kuliah', 'kap_kuliah', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('ruang/add_view');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $upl_time = date('Y-m-d H:i:s', time());

            $data = array(
                'kd_ruang' => $this->input->post('kd_ruang'),
                'nama' => $this->input->post('nama'),
                'kap_kuliah' => $this->input->post('kap_kuliah'),
                'kap_ujian' => $this->input->post('kap_ujian')
            );
            $this->Mod_backend->add_ruang($data);
            redirect('ruang');
        }
    }
}
