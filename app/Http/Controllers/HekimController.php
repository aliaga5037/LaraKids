<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Hekimler;
use App\Meqale;
class HekimController extends Controller
{
    private $control;
    private $redirect = '/hekimler';
   public function __construct()
   {
   		// $this->middleware('auth');
      $this->control();

   }
   public function control()
    {
        if(auth()->guard('admin')->user() || auth()->guard('')->user() || auth()->guard('hekimler')->user() ){

            $this->control = true;

      }else{
        $this->control = false;
      }
    }


   	public function index()
   	{
      $id = auth()->guard('hekimler')->user()->id;
      
      $meqaleler=Meqale::where('hekimler_id',$id)->get();
      return view('hekimler.index',compact('meqaleler'));
   	}


   public function login()
   {
    if($this->control == true){
        return redirect('hekimler');
        };
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

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];

       if (auth()->guard('hekimler')->attempt($credentials)) 
       {
         return redirect('/hekimler');
       }else{
          return redirect('/hekimler/login')
                ->withErrors(['errors' => 'login error'])
                ->withInput();
       }

    }
        public function postLogout()
        {
            auth()->guard('hekimler')->logout();
            return redirect('/hekimler/logout');
          }
    }
