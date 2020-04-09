<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = [];
        $posts = Post::latest()->get();
        // dd($posts->toArray());
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }
}
