<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    //
   public function index() {

  $posts=  Post::all();
    // dd($posts);
    return view('posts',[
        'posts'=>$posts,
    ]);

    }

    public function show(){
        $request =request();
        $postId= $request->post;


        $post= Post::find($postId);
        


        return view('show',[
            'post'=>$post
        ]);
    }
}
