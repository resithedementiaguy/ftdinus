<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_pi');
        $this->load->model('Mod_cpl');
        
        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tampilkan daftar program studi
    public function index()
    {
        $data['pi'] = $this->Mod_pi->get_pi();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/pi/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['pi'] = $this->Mod_pi->get_pi();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/pi/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kde_skf', 'Kode Program Studi', 'required');
        $this->form_validation->set_rules('jr2_skf', 'Nama Program Studi', 'required');
        $this->form_validation->set_rules('jjg_skf', 'Jenjang Program Studi', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('pi/create_view');
        } else {
            $data = array(
                'sfk_skf' => $this->input->post('idx_sfk'),
                'kde_skf' => $this->input->post('kde_skf'),
                'jr2_skf' => $this->input->post('jr2_skf'),
                'jjg_skf' => $this->input->post('jjg_skf')
            );
            $this->Mod_pi->add_pi($data);
            redirect('pi');
        }
    }

    public function edit_view($id)
    {
        $data['pi']=$this->Mod_pi->get_pi_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/pi/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
    public function edit($id)
    {
        $pi = $this->Mod_pi->get_pi($id);

        if ($pi) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($pi));
        } else {
            // Jika tidak ditemukan, berikan respons yang sesuai
            $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('error' => 'Data not found')));
        }
    }

    public function update()
    {
        $id = $this->input->post('idx_skf');
        $data = array(
            'kde_skf' => $this->input->post('kde_skf'),
            'jr2_skf' => $this->input->post('jr2_skf'),
            'jjg_skf' => $this->input->post('jjg_skf')
        );

        if ($this->Mod_pi->update_pi($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
        } else {
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'error')));
        }
    }

    // Hapus program studi
    public function delete($id)
    {
        $this->Mod_pi->delete_pi($id);
        redirect('pi');
    }
}