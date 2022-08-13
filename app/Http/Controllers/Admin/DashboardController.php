<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * @return View
     */
    public function messages(): View
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.messages', ['messages' => $messages]);
    }

    /**
     * @return View
     */
    public function users(): View
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users', ['users' => $users]);
    }
}
