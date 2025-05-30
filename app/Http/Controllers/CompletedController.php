<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CompletedController extends Controller
{
    public function index(){
        $todos = Todo::where('status', '=', '1')->where("user_id", "=", auth()->user()->id)->get();
        $inbox = Todo::where("status", "=", "0")->where("user_id", "=", auth()->user()->id)->get();
        // dd($inbox);
        return view('todos.completed', compact('todos', 'inbox'));
    }
}
