<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_cpm');
        $this->load->model('Mod_cpl');
        
        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tamcpmlkan daftar program studi
    public function index()
    {
        $data['cpm'] = $this->Mod_cpm->get_cpm();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpm/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['cpm'] = $this->Mod_cpm->get_cpm();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpm/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skf_cpm', 'skf_cpm', 'required');
        $this->form_validation->set_rules('smk_cpm', 'smk_cpm', 'required');
        $this->form_validation->set_rules('mtk_cpm', 'mtk_cpm', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('cpm/create_view');
        } else {
            $data = array(
                'skf_cpm' => $this->input->post('skf_cpm'),
                'smk_cpm' => $this->input->post('smk_cpm'),
                'mtk_cpm' => $this->input->post('mtk_cpm'),
                'rps_cpm' => $this->input->post('rps_cpm'),
                'nmr_cpm' => $this->input->post('nmr_cpm'),
                'ina_cpm' => $this->input->post('ina_cpm')
            );
            $this->Mod_cpm->add_cpm($data);
            redirect('cpm');
        }
    }

    public function edit_view($id)
    {
        $data['cpm']=$this->Mod_cpm->get_cpm_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpm/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
    public function edit($id)
    {
        $cpm = $this->Mod_cpm->get_cpm($id);

        if ($cpm) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($cpm));
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
            'skf_cpm' => $this->input->post('skf_cpm'),
            'smk_cpm' => $this->input->post('smk_cpm'),
            'mtk_cpm' => $this->input->post('mtk_cpm'),
            'rps_cpm' => $this->input->post('rps_cpm'),
            'nmr_cpm' => $this->input->post('nmr_cpm'),
            'ina_cpm' => $this->input->post('ina_cpm')
        );

        if ($this->Mod_cpm->update_cpm($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('cpm');
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
        date_default_timezone_set('Asia/Jakarta');
        $dlt = date('Y-m-d H:i:s', time());

        $data = array(
            'dlt_cpm' => $dlt
        );
        
        if ($this->Mod_cpm->update_cpm($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('cpm');
        } else {
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'error')));
        }
    }
}