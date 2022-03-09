<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;

class UserController extends Controller
{
    public function index()
    {
        $users= users::paginate(10);
        return view('admin.users',compact('users'));

    }
    public function delete(){
        return view('admin.users');
    }
}
