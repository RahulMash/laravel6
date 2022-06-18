<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->stream("", array("Attachment" => false));
        // return $pdf->download('itsolutionstuff.pdf');
        // <a href="{{route("pdfStream")}}" target="_blank" > click me to pdf </a>
    }
}
