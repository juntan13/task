<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {

    public function downloadPdf($id) {
        // Load the file helper
        $this->load->helper('file');

        // Path to the PDF file
        $pdf_path = APPPATH . 'samplepdf.pdf'; // Change this to the actual path of your PDF file

        // Check if the file exists
        if (file_exists($pdf_path)) {
            // Set headers for force download
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="sample.pdf"');
            header('Content-Length: ' . filesize($pdf_path));
            header('Cache-Control: private, max-age=0, must-revalidate');
            header('Pragma: public');
            header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
            header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($pdf_path)) . ' GMT');
            readfile($pdf_path);
            exit;
        } else {
            show_error('The PDF file does not exist.');
        }
    }
}


