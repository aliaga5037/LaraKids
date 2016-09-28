<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class HekimController extends Controller
{
   public function __construct()
   {
   		// $this->middleware('auth');
   }
   	public function index()
   	{
   		return view('hekimler.index');


   	}


   public function login()
   {
   	 return view('auth.login-hekim');

   }
   public function postLogin(Request $request)
   {


        $validator =validator($request->all(),[
              'email' => 'required|min:3|max:100',
               'password' => 'required|min:3|max:100',
          ]);
   
   	   if ($validator->fails()) {
         return redirect('/hekimler/login')
                  ->withErrors($validator)
                  ->withInput();
       }

        $credentials = ['email' => $request->get('mail'), 'password' => $request->get('password')];

       if (auth()->guard('admin')->attempt($credentials)) 
       {
         return redirect('/hekimler');
       }else{
          return redirect('/hekimler/login')
                ->withErrors(['errors' => 'login error'])
                ->withInput();
       }

    }
}
