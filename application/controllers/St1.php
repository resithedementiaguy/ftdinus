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

    // Tamst1lkan daftar program studi
    public function index()
    {
        $data['st1'] = $this->Mod_st1->get_st1();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['st1'] = $this->Mod_st1->get_st1();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skf_kde', 'skf_kde', 'required');
        $this->form_validation->set_rules('smk_st1', 'smk_st1', 'required');
        $this->form_validation->set_rules('skm_kde', 'skm_kde', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('st1/create_view');
        } else {
            $data = array(
                'skf_kde' => $this->input->post('skf_kde'),
                'smk_st1' => $this->input->post('smk_st1'),
                'skm_kde' => $this->input->post('skm_kde'),
                'skm_idx' => $this->input->post('skm_idx'),
                'skm_nma' => $this->input->post('skm_nma'),
                'smk_key' => $this->input->post('smk_key'),
                'smk_kde' => $this->input->post('smk_kde'),
                'smk_idx' => $this->input->post('smk_idx'),
                'rmk_st1' => $this->input->post('rmk_st1'),
                'dsk_st1' => $this->input->post('dsk_st1'),
                'kmk_nip' => $this->input->post('kmk_nip'),
                'kmk_sid' => $this->input->post('kmk_sid'),
                'ski_sta' => $this->input->post('ski_sta'),
                'ski_smt' => $this->input->post('ski_smt'),
                'tpr_ski' => $this->input->post('tpr_ski'),
                'ski_tpr' => $this->input->post('ski_tpr'),
                'ski_skt' => $this->input->post('ski_skt'),
                'ski_skp' => $this->input->post('ski_skp'),
                'ski_stp' => $this->input->post('ski_stp'),
                'ski_idx' => $this->input->post('ski_idx')
            );
            $this->Mod_st1->add_st1($data);
            redirect('st1');
        }
    }

    public function edit_view($id)
    {
        $data['st1']=$this->Mod_st1->get_st1_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/st1/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
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
        $data = array(
            'skf_kde' => $this->input->post('skf_kde'),
            'smk_st1' => $this->input->post('smk_st1'),
            'skm_kde' => $this->input->post('skm_kde'),
            'skm_idx' => $this->input->post('skm_idx'),
            'skm_nma' => $this->input->post('skm_nma'),
            'smk_key' => $this->input->post('smk_key'),
            'smk_kde' => $this->input->post('smk_kde'),
            'smk_idx' => $this->input->post('smk_idx'),
            'rmk_st1' => $this->input->post('rmk_st1'),
            'dsk_st1' => $this->input->post('dsk_st1'),
            'kmk_nip' => $this->input->post('kmk_nip'),
            'kmk_sid' => $this->input->post('kmk_sid'),
            'ski_sta' => $this->input->post('ski_sta'),
            'ski_smt' => $this->input->post('ski_smt'),
            'tpr_ski' => $this->input->post('tpr_ski'),
            'ski_tpr' => $this->input->post('ski_tpr'),
            'ski_skt' => $this->input->post('ski_skt'),
            'ski_skp' => $this->input->post('ski_skp'),
            'ski_stp' => $this->input->post('ski_stp'),
            'ski_idx' => $this->input->post('ski_idx')
        );

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

    // Hapus program studi
    public function delete($id)
    {
        $this->Mod_st1->delete_st1($id);
        redirect('st1');
    }
}