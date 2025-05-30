<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($data)) {
            return redirect()->route('todos.index')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect.',
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('main')->with('success', 'Logout successful');
    }
}
