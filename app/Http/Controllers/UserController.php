<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|string',
        ]);

        $user = new User();
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();

        return response()->json($user, 201);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
}
