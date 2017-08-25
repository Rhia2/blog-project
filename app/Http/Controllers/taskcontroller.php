<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class taskcontroller extends Controller
{
    public function index(){
         //$tasks = DB::table('tasks')->latest()->get();
        $tasks = task::all();

        return view('tasks.index',compact('tasks')
        );
    }

    public function show($id){
         // $task = DB::table('tasks')->find($id);
        $task = task::findorfail($id);

        return view('tasks.show',compact('task')
        );
    }
}
