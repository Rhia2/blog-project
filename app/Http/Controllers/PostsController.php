<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;



class PostsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        $posts = Post::latest('created_at')->filter(request(['month', 'year']))->get();

         return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);

        /**Post:: create([
            'title'=> request('title'),
            'body'=> request('body'),
            'user_id' => auth()->id()
        ]);**/

        auth()->user()->publish(
            new Post(request(['title','sub','body']))
        );

            return redirect('posts');
    }

    public function show(Post $post){

        return view('posts.show',compact('post'));
    }

}