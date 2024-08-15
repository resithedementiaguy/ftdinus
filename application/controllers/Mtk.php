<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_mtk');
        $this->load->model('Mod_cpl');
        
        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tammtklkan daftar program studi
    public function index()
    {
        $data['mtk'] = $this->Mod_mtk->get_mtk();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mtk/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['mtk'] = $this->Mod_mtk->get_mtk();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mtk/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skf_kde', 'skf_kde', 'required');
        $this->form_validation->set_rules('smk_mtk', 'smk_mtk', 'required');
        $this->form_validation->set_rules('skm_kde', 'skm_kde', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('mtk/create_view');
        } else {
            $data = array(
                'skf_kde' => $this->input->post('skf_kde'),
                'smk_mtk' => $this->input->post('smk_mtk'),
                'skm_kde' => $this->input->post('skm_kde'),
                'skm_idx' => $this->input->post('skm_idx'),
                'skm_nma' => $this->input->post('skm_nma'),
                'smk_key' => $this->input->post('smk_key'),
                'smk_kde' => $this->input->post('smk_kde'),
                'smk_idx' => $this->input->post('smk_idx'),
                'rmk_mtk' => $this->input->post('rmk_mtk'),
                'dsk_mtk' => $this->input->post('dsk_mtk'),
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
            $this->Mod_mtk->add_mtk($data);
            redirect('mtk');
        }
    }

    public function edit_view($id)
    {
        $data['mtk']=$this->Mod_mtk->get_mtk_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mtk/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
    public function edit($id)
    {
        $mtk = $this->Mod_mtk->get_mtk($id);

        if ($mtk) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($mtk));
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
            'smk_mtk' => $this->input->post('smk_mtk'),
            'skm_kde' => $this->input->post('skm_kde'),
            'skm_idx' => $this->input->post('skm_idx'),
            'skm_nma' => $this->input->post('skm_nma'),
            'smk_key' => $this->input->post('smk_key'),
            'smk_kde' => $this->input->post('smk_kde'),
            'smk_idx' => $this->input->post('smk_idx'),
            'rmk_mtk' => $this->input->post('rmk_mtk'),
            'dsk_mtk' => $this->input->post('dsk_mtk'),
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

        if ($this->Mod_mtk->update_mtk($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('mtk');
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
        $this->Mod_mtk->delete_mtk($id);
        redirect('mtk');
    }
}