<?php
defined('BASEPATH') or exit('No direct script access allowed');

class St1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_st1');
        $this->load->model('Mod_cpl');

        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tamst1lkan daftar dosen s1
    public function index()
    {
        $data['st1'] = $this->Mod_st1->get_st1();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/view', $data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['st1'] = $this->Mod_st1->get_st1();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/add', $data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah dosen s1
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Validasi input
        $this->form_validation->set_rules('xjm_st1', 'xjm_st1', 'required');
        $this->form_validation->set_rules('hbs_st1', 'hbs_st1', 'required');
        $this->form_validation->set_rules('skf_st1', 'skf_st1', 'required');
        $this->form_validation->set_rules('nma_st1', 'nma_st1', 'required');
        $this->form_validation->set_rules('nip_st1', 'nip_st1', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('st1/create_view');
        } else {
            $data = array(
                'xjm_st1' => $this->input->post('xjm_st1'),
                'hbs_st1' => $this->input->post('hbs_st1'),
                'skf_st1' => $this->input->post('skf_st1'),
                'gng_st1' => $this->input->post('gng_st1'),
                'nma_st1' => $this->input->post('nma_st1'),
                'key_st1' => $this->input->post('key_st1'),
                'ini_st1' => $this->input->post('ini_st1'),
                'nwa_st1' => $this->input->post('nwa_st1'),
                'nip_st1' => $this->input->post('nip_st1'),
                'sts_st1' => $this->input->post('sts_st1'),
                'jkp_st1' => $this->input->post('jkp_st1'),
                'sid_st1' => $this->input->post('sid_st1'),
                'act_st1' => $this->input->post('act_st1'),
                'afc_st1' => $this->input->post('afc_st1'),
                'nte_st1' => $this->input->post('nte_st1')
            );

            // Simpan data ke database
            $this->Mod_st1->add_st1($data);

            // Redirect ke halaman utama
            redirect('st1');
        }
    }

    public function edit_view($id)
    {
        $data['st1'] = $this->Mod_st1->get_st1_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/edit', $data);
        $this->load->view('admin/partials/footer');
    }

    // Edit dosen s1
    public function edit($id)
    {
        $st1 = $this->Mod_st1->get_st1($id);

        if ($st1) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($st1));
        } else {
            // Jika tidak ditemukan, berikan respons yang sesuai
            $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('error' => 'Data not found')));
        }
    }

    public function update($id)
    {
        // Mengambil data dari form
        $data = array(
            'xjm_st1' => $this->input->post('xjm_st1'),
            'hbs_st1' => $this->input->post('hbs_st1'),
            'skf_st1' => $this->input->post('skf_st1'),
            'gng_st1' => $this->input->post('gng_st1'),
            'nma_st1' => $this->input->post('nma_st1'),
            'key_st1' => $this->input->post('key_st1'),
            'ini_st1' => $this->input->post('ini_st1'),
            'nwa_st1' => $this->input->post('nwa_st1'),
            'nip_st1' => $this->input->post('nip_st1'),
            'sts_st1' => $this->input->post('sts_st1'),
            'jkp_st1' => $this->input->post('jkp_st1'),
            'sid_st1' => $this->input->post('sid_st1'),
            'act_st1' => $this->input->post('act_st1'),
            'afc_st1' => $this->input->post('afc_st1'),
            'nte_st1' => $this->input->post('nte_st1')
        );

        // Memanggil model untuk mengupdate data
        if ($this->Mod_st1->update_st1($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
            redirect('st1');
        } else {
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'error')));
        }
    }

    // Hapus dosen s1
    public function delete($id)
    {
        $this->Mod_st1->delete_st1($id);
        redirect('st1');
    }
}
