<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::where('status', '=', '0')->where("user_id" , "=", auth()->user()->id)->get();
        return view('todos.index', compact('todos'));
    }

     public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required',
            'date' => 'required|date',
            'priority' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;


        Todo::create($validated);
        return redirect()->route('todos.index');
    }
    public function edit($userId)// Edit user details
    {
        $user = User::findOrFail($userId);
        return view('todos.user_edit', compact('user'));
    }

    public function update(Request $request, $userId)// Update user details
    {
        $user = User::findOrFail($userId);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->name = $request->name;
        $user->save();

        return redirect()->route('todos.index', ['user' => $userId])
                         ->with('success', 'User updated successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->status = true;
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->back();
    }

}
