<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\Message\StoreMessageRequest;

class MessageController extends Controller
{
    //

    /**
     * store a new message
     *
     * @param \App\Http\Requests\Message\StoreMessageRequest; $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        Message::create([
            'user_id' => auth()->user()->id,
            'message' => $request->message
        ]);

        return redirect(route('home'))->with('success', 'Message Sent!');
    }
}
