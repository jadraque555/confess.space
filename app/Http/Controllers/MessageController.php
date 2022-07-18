<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        return view('message', compact('id'));
    }
    
    public function next()
    {
        return view('next');
    }

    public function view(Request $request, $id)
    {
        $message = Message::find($id);

        return view('message-details', compact('message'));
    }
    
    public function post(Request $request) 
    {
    
        $user = User::where('username', '=', $request->username)->first();

        if($user) {
        
            $message = new Message;
            $message->UserId = $user->id;
            $message->Message = $request->message;
         
            $message->save();

            if(Auth::check()) {
                return redirect('home?sendMessage=true');
            } else {
                return redirect('next?sendMessage=true');
            }
       
        }

    }

    public function delete(Request $request) 
    {
        $message = Message::find($request->id);

        $message->delete();

        return redirect('home');
    }
}
