<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index(){
        return view('client.contact');
    }
    public function sendMessage(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $message=new Message();
        $message->firstName=$request->name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return redirect()->back()->with('success','Message sent successfully');
    }
}
