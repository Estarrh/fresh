<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            ]);

        //create new Message
        $message = new message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //Save message
        $message->save();

        //Redirect
        return redirect('/')->with('success', 'Message Sent');
    }
       //function to get data/maessages from database and output them through a route
    public function getMessages(){
        $messages = Message::all();

        return view('messages') ->with ('messages', $messages);
    }
}
