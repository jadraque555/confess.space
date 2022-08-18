<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $user = Auth::user();
        $seeMore = $request->seeMore;

        $messages = Message::where('UserId','=', $user->id);
        $messages->orderBy("id", "desc");
        if(!$seeMore) {
            $messages->limit(1);
        } 
        $messages = $messages->get();

        return view('home', compact('user', 'messages', 'seeMore'));
    }
 
}
