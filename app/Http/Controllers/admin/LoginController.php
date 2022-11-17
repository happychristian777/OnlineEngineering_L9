<?php

namespace App\Http\Controllers\admin;
// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\admin\admin;
USE Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
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
