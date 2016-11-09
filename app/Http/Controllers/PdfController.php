<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

use App\User;

class PdfController extends Controller
{
    public function getPdf()
    {

    	$user = User::all();
    	$pdf = PDF::loadView('user',compact('user'));
    	return $pdf->stream('user.pdf');
    }
}
