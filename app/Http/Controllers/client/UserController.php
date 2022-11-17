<?php

namespace App\Http\Controllers\client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signup(){
        return view('client.register');
    }
    public function signin(){
        return view('client.login');
    }
    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->contact=$request->contact;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('signin')->with('success','You have successfully registered');
    }
    public function checkLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        $user_data=array(
            'email'=>$request->email,
            'password'=>$request->password
        );

        if(Auth::attempt($user_data)){
            return redirect()->route('/');
        }
        else{
            return back()->with('error','Wrong Login Details');
        }
        return redirect()->route('signin')->with('error','Invalid Email or Password');
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
}
