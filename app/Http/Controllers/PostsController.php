<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
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




    public function create(){

        $users= User::all();


        return view('create',[

            'users'=>$users

        ]);

    }


    public function store(){
        $request =request();

        // dd($request);

    Post::create([
        'title'=> $request->title,
        'posted_by'=>$request->posted_by,
        'discription'=> $request->discription,
    ]);

   return redirect('/posts');
   
}
}



