<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'email' => 'required',
            'reply' => 'required'
        ]);



        $replies = new Replies([
            'message' => $request -> get('message'),
            'email' => $request -> get('email'),
            'reply' => $request -> get('reply')
        ]);


        $replies->save();

        return view('view_message');
    }
}
