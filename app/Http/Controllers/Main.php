<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function home()
    {
        //Get available tasks
        // $tasks = Task::all();
        $tasks = Task::where('visible', 1)->get();
        return view('home', ['tasks'=>$tasks]);
    }
    // ===================================
    public function new_task()
    {
        return view('new_task_form');
    }
    // ===================================
    public function new_task_submit(Request $request)
    {
        $new_task = $request->input('text_new_task');
    }
    // ===================================
    public function show_hidden_tasks() 
    {
        $tasks = Task::all();
        return view('all_tasks', ['tasks'=>$tasks]);
    }
    // ===================================
    // public function task_visibility(Request $request)
    // {
    //     $visibility = $request->input('text')
    //     return view ('home');
    // }
}
