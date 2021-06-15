<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    public function print()
    {
        $pdf = PDF::loadview('Data')->setPaper('F4','landscape');
        return $pdf->stream();
    }
}
