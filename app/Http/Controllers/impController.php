<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class impController extends Controller
{
    
        public function imp(){
            $pdf = \PDF::loadView('informe')->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->download('informe.pdf');
       }
    
    
}
