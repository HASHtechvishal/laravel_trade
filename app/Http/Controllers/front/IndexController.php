<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Image;


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

    public function admin_register(Request $req){ 

        if($req->isMethod('post')){
            $data = $req->all();
            //dd($data); die();
            $adminCount = Admin::where('email',$data['email'])->count();
            //echo $adminCount; die;

            //upload admin photo
            if($req->hasFile('admin_img')){
                $image_tmp = $req->file('admin_img');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension(); 
                    $NewimageName = $data['name'].rand(111,99999).'.'.$extension;
                    $imagePath = 'admin/admin_image/'.$NewimageName;
                    Image::make($image_tmp)->resize(30,30)->save($imagePath); 

                }
            }else if(!empty($data['current_admin_image'])){
                $NewimageName = $data['current_admin_image'];
            }else{
                $NewimageName = "";
            }

            if($adminCount > 0){
    			return redirect()->back();
            }else{
                $admin = new Admin;
                $admin->name = $data['name'];
                $admin->mobile = $data['mobile'];
                $admin->email = $data['email'];
                $admin->password = bcrypt($data['password']);
                $admin->image = $NewimageName;
                $admin->type = 'Not Defined';
                $admin->status = 1;
                $admin->save();
                return redirect('login');
            }

        }
        return view('front.forms.admin_register');
    }
}
