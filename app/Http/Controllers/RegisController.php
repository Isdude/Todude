<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('todos.index')->with('success', 'Registration successful');
    }
}


