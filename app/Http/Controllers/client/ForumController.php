<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        return view('client.forum_landing');
    }
    public function forum_details($id){
        return view('client.forum_detail');
    }
}
