<?php

namespace App\Http\Controllers\admin;
// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\admin\admin;
USE Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function login(Request $request){
        $admin=new admin();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user_data=array(
            $admin->email=$request['email'],
            $admin->password=$request['password'],
        );
        if(admin::where('email',$request['email'])->where('password',$request['password'])->exists()){

            return redirect('/admin/dashboard');
        }
        else{
            $request->session()->put('login_error','Invalid Email or Password');
            return redirect('/admin/');

            // echo '<pre>';
            // print_r(admin::get('email','password')->toArray(),);
            // echo '</pre>';

        }
        // if(Auth::attenpt($user_data)){
        //     return redirect('successLogin');
        // }
        // else{
        //     return redirect()->back()->with('error','Invalid Username or Password');
        // }

    }
    public function successLogin(){
        return view('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect('/admin');
    }
}
