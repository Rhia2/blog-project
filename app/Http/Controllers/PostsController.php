<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $people = ['ade','bola','chinwe','ugo'];
        $name= 'Ade';
         return view('posts.index',compact('name','people'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        

        Post:: create(request(['title','body']));

        return redirect('posts');
    }
}