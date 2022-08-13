<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = auth()->user()->messages()->orderBy('created_at', 'desc')->paginate(5);

        return view('home', ['messages' => $messages]);
    }
}
