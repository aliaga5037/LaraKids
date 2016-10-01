<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meqale;

class StatController extends Controller
{
    public function find($id){
    	$meqale=Meqale::where('id',$id)->first();
    	$sonmeqale=$meqale->text;
    	$tarix=$meqale->created_at;
    	$basliq=$meqale->title;
    	return view('kids.stat',compact('sonmeqale','tarix','basliq'));
    }
}
