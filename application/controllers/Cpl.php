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

        $this->form_validation->set_rules('kde_skf', 'Kode Program Studi', 'required');
        $this->form_validation->set_rules('jr2_skf', 'Nama Program Studi', 'required');
        $this->form_validation->set_rules('jjg_skf', 'Jenjang Program Studi', 'required');

        if ($this->form_validation->run() === FALSE) {
            redirect('cpl/create_view');
        } else {
            $data = array(
                'sfk_skf' => $this->input->post('idx_sfk'),
                'kde_skf' => $this->input->post('kde_skf'),
                'jr2_skf' => $this->input->post('jr2_skf'),
                'jjg_skf' => $this->input->post('jjg_skf')
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

    public function update()
    {
        $id = $this->input->post('idx_skf');
        $data = array(
            'kde_skf' => $this->input->post('kde_skf'),
            'jr2_skf' => $this->input->post('jr2_skf'),
            'jjg_skf' => $this->input->post('jjg_skf')
        );

        if ($this->Mod_cpl->update_cpl($id, $data)) {
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
        $this->Mod_cpl->delete_cpl($id);
        redirect('cpl');
    }
}