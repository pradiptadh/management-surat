<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class Pdf extends Dompdf
{
    protected $ci;

    public function __construct()
    {

        $this->ci = &get_instance();
    }

    public function generate($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);
        $dompdf->set_option('isHtml5ParserEnabled', true);
        //$dompdf->setPaper('A4', 'portait');
        $paper_orientation = 'landscape';
        $customPaper = array(0, 0, 950, 950);
        $dompdf->set_paper($customPaper, $paper_orientation);
        $dompdf->render();
        $dompdf->stream('Rapor' . ".pdf", array("Attachment" => false));
    }
}
