<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function indexHome(Request $req){
        if ($req->isMethod('post')) {
            $data = $req->all();

            //dd($data);

            if (Auth::guard('admin')->attempt(['email'=>$data['username'],'password'=>$data['password'],'status'=>1])) { 

                return redirect('/admin/dashboard');
             }
        }
        return view('front.index');
    }

    public function about_us(){
        return view('front.about_us');
    }

    public function register(){
        return view('front.register');
    }

    public function member_login(){
        return view('front.member_login');
    }

    public function admin_login(){
        return view('front.forms.admin_forms'); 
    }
}
