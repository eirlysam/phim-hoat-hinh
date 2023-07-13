<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('admincp.dashboard');
    }

    public function dashboard(Request $request){
        $email = $request->email;
        $password = $request->password;

        $result = Auth::attempt(['email' =>$email, 'password' =>$password ]);
        if ($result) 
        {
            return redirect('/dashboard');
     
        }
        else
        {
             return redirect('/admin')->with('thongbao','Đăng 
            nhập không thành công!');
        }
        
    }

    public function log_out(Request $request){
        Auth::logout();
        return redirect('/admin');
    }
}
