<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePost;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::latest()->get();

        DB::table('posts')->insert(
            ['title' => 'B001', 'comment' => 'testB001','votes' => 0]
        		);
        $posts = DB::table('posts')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $post = new Post;
        $post->title = "B001";
        $post->comment = "testB001";
        return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->comment = $request->comment;
        $post->save();
        return redirect('posts/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('posts/'.$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }
}
