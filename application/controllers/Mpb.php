<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_mpb');
        $this->load->model('Mod_cpl');
        
        $this->load->model('Mod_log');  // Load model for logging
        $this->load->library('session'); // Load session library
        $this->load->helper('url');      // Load URL helper for redirection

        // Log user activity
        $this->Mod_log->log_act();
    }

    // Tammpblkan daftar program studi
    public function index()
    {
        $data['mpb'] = $this->Mod_mpb->get_mpb();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mpb/view',$data);
        $this->load->view('admin/partials/footer');
    }

    public function create_view()
    {
        $data['mpb'] = $this->Mod_mpb->get_mpb();
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mpb/add',$data);
        $this->load->view('admin/partials/footer');
    }

    // Tambah program studi
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skf_mpb', 'skf_mpb', 'required');
        $this->form_validation->set_rules('smk_mpb', 'smk_mpb', 'required');
        $this->form_validation->set_rules('mtk_mpb', 'mtk_mpb', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('mpb/create_view');
        } else {
            $data = array(
                'skf_mpb' => $this->input->post('skf_mpb'),
                'smk_mpb' => $this->input->post('smk_mpb'),
                'mtk_mpb' => $this->input->post('mtk_mpb'),
                'rps_mpb' => $this->input->post('rps_mpb'),
                'pbh_mpb' => $this->input->post('pbh_mpb')
            );
            $this->Mod_mpb->add_mpb($data);
            redirect('mpb');
        }
    }

    public function edit_view($id)
    {
        $data['mpb']=$this->Mod_mpb->get_mpb_by_id($id);
        $data['cpl'] = $this->Mod_cpl->get_cpl();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/mpb/edit',$data);
        $this->load->view('admin/partials/footer');
    }

    // Edit program studi
    public function edit($id)
    {
        $mpb = $this->Mod_mpb->get_mpb($id);

        if ($mpb) {
            // Mengatur header untuk JSON
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($mpb));
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
            'skf_mpb' => $this->input->post('skf_mpb'),
            'smk_mpb' => $this->input->post('smk_mpb'),
            'mtk_mpb' => $this->input->post('mtk_mpb'),
            'rps_mpb' => $this->input->post('rps_mpb'),
            'pbh_mpb' => $this->input->post('pbh_mpb')
        );

        if ($this->Mod_mpb->update_mpb($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('mpb');
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
            'dlt_mpb' => $dlt
        );

        if ($this->Mod_mpb->update_mpb($id, $data)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'success')));
                redirect('mpb');
        } else {
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'error')));
        }
    }
}