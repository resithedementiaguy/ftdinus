<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_cpl');
        $this->load->model('Mod_skf');
        
        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tampilkan daftar program studi
    public function index()
    {
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpl/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $data['program_studi'] = $this->Mod_skf->get_program_studi();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpl/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skf_cpl', 'skf_cpl', 'required');
        $this->form_validation->set_rules('ina_cpl', 'ina_cpl', 'required');
        $this->form_validation->set_rules('eng_cpl', 'eng_cpl', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('cpl/create_view');
        } else {
            $data = array(
                'skf_cpl' => $this->input->post('skf_cpl'),
                'ina_cpl' => $this->input->post('ina_cpl'),
                'eng_cpl' => $this->input->post('eng_cpl'),
                'nmr_cpl' => $this->input->post('nmr_cpl')
            );
            $this->Mod_cpl->add_cpl($data);
            redirect('cpl');
        }
    }

    public function edit_view($id)
    {
        $data['cpl']=$this->Mod_cpl->get_cpl_by_id($id);
        $data['program_studi'] = $this->Mod_skf->get_program_studi();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/cpl/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
    public function edit($id)
    {
        $cpl = $this->Mod_cpl->get_cpl($id);

        if ($cpl) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($cpl));
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
            'skf_cpl' => $this->input->post('skf_cpl'),
            'ina_cpl' => $this->input->post('ina_cpl'),
            'eng_cpl' => $this->input->post('eng_cpl'),
            'nmr_cpl' => $this->input->post('nmr_cpl')
        );

        if ($this->Mod_cpl->update_cpl($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('cpl');
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
            'dlt_cpl' => $dlt
        );

        if ($this->Mod_cpl->update_cpl($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('cpl');
        } else {
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'error')));
        }
    }
}