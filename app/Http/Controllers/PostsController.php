<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrfail();

        if(! $post){
            abort(404);
        }

    return view('post',[
        'post'=> $post
     ]);
    }
}
