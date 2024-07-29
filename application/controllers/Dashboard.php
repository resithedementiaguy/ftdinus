<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session'); // Load session library
        $this->load->helper('url'); // Load URL helper
    }

    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            
            $this->load->view('admin/partials/header');
            $this->load->view('admin/partials/topbar');
            $this->load->view('admin/frontend/dashboard');
            $this->load->view('admin/partials/footer');
        } else {
            echo 'User is not logged in.';
            redirect('auth');
        }
    }
}
