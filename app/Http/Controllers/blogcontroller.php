<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\Work;

class blogcontroller extends Controller
{
    public function about_us(){
        $works = task::all();
        return view('about',compact('works')
            );
    }

    public function creat_model(){
         $works = Work::incomplete()->where('id','>',2)->get();
        return view('create_model',compact('works')
        );
    }
}
