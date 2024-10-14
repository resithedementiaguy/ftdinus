<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cpmk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Mod_cpmk');
    }

    public function index()
    {
        $data['cpmk'] = $this->Mod_cpmk->get_cpmk();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/coba_cpmk', $data);
        $this->load->view('admin/partials/footer');
    }

    public function pdca()
    {
        $data['cpmk'] = $this->Mod_cpmk->get_cpmk();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/form_cpmk', $data);
        $this->load->view('admin/partials/footer');
    }

    public function cetak()
    {
        $data['cpmk'] = $this->Mod_cpmk->get_cpmk();
        $this->load->view('admin/frontend/cetak_pdca', $data);
    }
}
