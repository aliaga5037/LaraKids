<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Admin;
use App\User;
use App\Meqale;
use App\Hekimler;
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

       return view('salam');
    }

    public function login()
    {
        
         if($this->control == true){
            return redirect($this->redirect);
        };
        return view('admin.index');
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
        return redirect('/');
    }

    public function users()
    {
        $users=User::all();
        return view('admin.users',compact('users'));
    }

    public function show($id)
    {
        $user=User::find($id);
        return view('admin.show',compact('user'));
    }

    public function ban($id)
    {
        $user=User::find($id);
        $user->delete();
        return back();
    }

    public function meqale()
    {
        $meqaleler=Meqale::all();
        return view('admin.article',compact('meqaleler'));
    }

    public function showMeqale($id)
    {
        $meqale=Meqale::find($id);
        return view('admin.showarticle',compact('meqale'));
    }

    public function destroyMeqale($id)
    {
        $meqale=Meqale::find($id);
        $meqale->delete();
        return back();
    }

    public function hekimler()
    {
        $hekimler=Hekimler::all();
        return view('admin.hekimler',compact('hekimler'));
    }

    public function showHekimler($id)
    {
        $hekim=Hekimler::find($id);
        return view('admin.showhekim',compact('hekim'));
    }
    public function destroyHekim($id)
    {
        $hekim=Hekimler::find($id);
        $hekim->delete();
        return back();
    }

    public function addHekim()
    {
        return view('admin.addhekim');
    }

    public function saveHekim(Request $request)
    {
        $hekim=new Hekimler;
        $hekim->name=$request->name;
        $hekim->surname=$request->surname;
        $hekim->about=$request->about;
        $hekim->email=$request->email;
        $hekim->password=$request->password;
        $hekim->save();
        $hekimler=Hekimler::all();
        return view('admin.hekimler',compact('hekimler'));
    }

}
  
 
   
