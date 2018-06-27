<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function getMessages(){

        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }

    public function submit(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        //Create a new Message
        $message = new Message;
        $message->setAttribute('name', $request->input('name'));
        $message->setAttribute('email', $request->email);
        $message->message = $request->input('message');

        $message->save();

        return redirect('/')->with('success', 'message send');
    }
}
