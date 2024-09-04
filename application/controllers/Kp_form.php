<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Include autoloader dari Composer
require 'dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

class Kp_form extends CI_Controller
{

    public function generate_pdf()
    {
        // Buat instance Dompdf
        $dompdf = new Dompdf();

        // Load view sebagai HTML
        $html = $this->load->view('pdf/kp_form', [], true); // Pass true to get the output as a string

        // Load HTML content ke Dompdf
        $dompdf->loadHtml($html);

        // Set ukuran kertas dan orientasi
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF (1 = download, 0 = preview)
        $dompdf->stream("form_kp.pdf", array("Attachment" => 0));
    }

    public function print_kp()
    {
        // Set the content type to PDF
        // header("Content-type: application/pdf");

        // Load the view
        $this->load->view('pdf/kp_form');
    }
}
