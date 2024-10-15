<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Include autoloader dari Composer
require 'dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

class Pdca extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session'); // Load session library
        $this->load->helper('url'); // Load URL helper
        $this->load->model('Mod_cpmk');
        $this->load->model('Mod_pdca');
    }

    public function index()
    {
        $data['pdca'] = $this->Mod_pdca->get_pdca();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/pdca/view', $data);
        $this->load->view('admin/partials/footer');
    }

    public function tambah_pdca()
    {
        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/topbar');
        $this->load->view('admin/frontend/pdca/form_cpmk', $data);
        $this->load->view('admin/partials/footer');
    }

    public function print()
    {
        $this->load->view('admin/frontend/pdca/print_pdca');
    }

    public function generate_pdf()
    {
        // Buat instance Dompdf
        $dompdf = new Dompdf();
        $this->load->model('Mod_home');
        $data['test']='Rhoshandiatellyneshiaunneveshenk Koyaanisquatsiuth Williams';
        $data['test_1row']='forsen';

        // Load view sebagai HTML
        $html = $this->load->view('admin/frontend/cetak_pdca', $data, true); // Pass true to get the output as a string

        // Load HTML content ke Dompdf
        $dompdf->loadHtml($html);

        // Set ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        // Output PDF (1 = download, 0 = preview)
        $dompdf->stream("form_kp.pdf", array("Attachment" => 0));
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        date_default_timezone_set('Asia/Jakarta');
        $ins_time = date('Y-m-d H:i:s', time());

        // Insert data ke tabel p_pdca
        $data_p = array(
            'komen1' => $this->input->post('data1'),
            'komen2' => $this->input->post('data2'),
            'rca_problem1' => $this->input->post('problem1'),
            'rca_problem2' => $this->input->post('problem2'),
            'rca_why1' => $this->input->post('why1'),
            'rca_why2' => $this->input->post('why2'),
            'rca_why3' => $this->input->post('why3'),
            'rca_why4' => $this->input->post('why4'),
            'rca_why5' => $this->input->post('why5'),
            'rca_why6' => $this->input->post('why6'),
            'rca_root' => $this->input->post('rca_root'),
            'rp_root' => $this->input->post('rp_root'),
            'rp_tindak' => $this->input->post('tindakan')
        );
        $this->Mod_pdca->add_plan($data_p);

        // Ambil id terakhir dari tabel p_pdca
        $id_p = $this->db->order_by('id', 'DESC')->get('p_pdca')->row()->id;

        // Insert data ke tabel d_pdca
        $data_d = array(
            'masalah' => $this->input->post('permasalahan'),
            'analisis' => $this->input->post('analisis'),
            'perbaikan' => $this->input->post('perbaikan'),
            'pic' => $this->input->post('pic')
        );
        $this->Mod_pdca->add_do($data_d);

        // Ambil id terakhir dari tabel d_pdca
        $id_d = $this->db->order_by('id', 'DESC')->get('d_pdca')->row()->id;

        // Insert data ke tabel a_pdca
        $data_a = array(
            'action' => $this->input->post('action')
        );
        $this->Mod_pdca->add_action($data_a);

        // Ambil id terakhir dari tabel a_pdca
        $id_a = $this->db->order_by('id', 'DESC')->get('a_pdca')->row()->id;

        // Insert data ke tabel pdca
        $data_pdca = array(
            'ins_time' => $ins_time,
            'thn_pdca' => $this->input->post('tahun'),
            'cpl_kategori' => $this->input->post('cpl_kategori'),
            'id_p' => $id_p,
            'id_d' => $id_d,
            'id_a' => $id_a
        );
        $this->Mod_pdca->add_pdca($data_pdca);

        redirect('pdca');
    }

}