<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use App\Models\MData;

class Report extends BaseController
{
    public function __construct()
    {
        $this->tbl_zakat = new MData;
    }
    public function index()
    {
        
    }
    public function tampilPdf()
    {
        $data = $this->tbl_zakat->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        $tampil= view ('V_pdfTabel',$array);
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($tampil);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Report Zakat Fitrah',array("Attachment" => false));
    }
    public function setRemoteOption()  {
        $options = $dompdf->getOptions(); 
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);
    }
}

