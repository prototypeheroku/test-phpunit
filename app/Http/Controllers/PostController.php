<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        // 3. latestƒƒ\ƒbƒh‚ª‚¨‚·‚·‚ß
        //$posts = Post::latest()->get();
        $posts = DB::table('posts')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('posts/'.$post->id);
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
