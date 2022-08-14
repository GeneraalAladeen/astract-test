<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\User\QueryUserRequest;
use App\Events\User\UserApproved;

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
     * Get All Users
     * 
     * @param App\Http\Requests\User\QueryUserRequest;
     * @return View
     */
    public function users(QueryUserRequest $request): View
    {
        $status = $request->query('status');

        $users = DB::table('users')
                ->orderBy('created_at', 'desc')
                ->when($request->filled('status'), function ($query) use ($status) {
                    return $query->where('status', $status);
                })
                ->paginate(10);

        return view('admin.users', ['users' => $users]);
    }

    /**
     * Update a users staus
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     *
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request, User $user)
    {
        $user->status = true;
        $user->save();

        event(new UserApproved($user));

        return back()->with('success', "$user->name has been approved");
    }
}
