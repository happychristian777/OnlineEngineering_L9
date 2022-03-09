<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacts;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=contacts::paginate(5);
        $data=compact('contacts');
        return view('admin.messages',$data);
    }
}
