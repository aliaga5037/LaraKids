<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    private $control;
    private $redirect = '/admin';
    public function __construct()
    {
        //$this->middleware('admin');
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

       return view('admin.index');
    }

    public function login()
    {
        
         if($this->control == true){
            return redirect($this->redirect);
        };
        return view ('auth.login-adm');
    }

      public function postLogin(Request $request)
    {
        if($this->control == true){
            return redirect($this->redirect);
        };
        
            $validator = validator($request->all(), [
                    'email' => 'required|min:3|max:100',
                    'password' => 'required|min:3|max:100',

                ]);
            if ($validator->fails()) {
                return redirect('/admin/login')

                    ->withErrors($validator)
                    ->withInput();
         }
        

        $credentials =['email' => $request->get('email'), 'password'=> $request->get('password')];
        if ( auth()->guard('admin')->attempt ($credentials) ) 
        {
            return redirect('/admin');
                
        }else{
            return redirect('/admin/login')
                ->withErrors(['errors' => 'Login error'])
                 ->withInput();

        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }
}
  
 
   
