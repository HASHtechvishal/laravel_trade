<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;


class AdminController extends Controller
{
    public function dashboard(){

        $admins = Admin::where('status',1)->get()->toArray();
        //dd($admins); die;
        return view('admin.dashboard')->with(compact('admins'));
    }

    public function banner(){ 
        return view('admin.banner.banner');
    }

    public function faq(){
        return view('admin.faq.faq');
    }

    public function users(){
        return view('admin.users.users');
    }

    public function stories(){
        return view('admin.stories.stories'); 
    }

    public function admin_logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function deleteAdmin($id){

            //get benner image
             $admin_image = Admin::where('id',$id)->first();

             //get banner image path
            $admin_image_path = 'admin/admin_image/'; 
        
            //delete banner image if exists in banner folder
             if (file_exists($admin_image_path.$admin_image->image)) {
                  unlink($admin_image_path.$admin_image->image);
             }
        
             //delete banner from banners table
             Admin::where('id',$id)->delete();
        
             //Session::flash('success','banner delete successfully');
             return redirect()->back();
    
    }

}
