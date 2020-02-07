<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      //return $request->input('name');
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required'
      ]);
      //return 'SUCCESS';
      $message=new Message;
      $message->name=$request->input('name');
      $message->email=$request->input('email');
      $message->message=$request->input('message');

      $message->save();

      return redirect('/');
    }
}
