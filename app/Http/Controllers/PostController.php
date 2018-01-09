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

        //DB::table('posts')->insert(
        //    ['title' => 'B001', 'comment' => 'testB001']
        //);

        $posts = DB::table('posts')->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $post = new Post;
        $post->title = "B001";
        $post->comment = "testB001";
        return view('posts.create', ['post' => $post]);
    }

    public function add(Request $request)
    {
        //DB::table('posts')->insert(
        //    ['title' => $request->title, 'comment' => $request->comment]
        //);
	    
	DB::update('update users set comment = ? where title = ?', [$request->comment,'A001']);

        return redirect('posts/');
    }

    public function delete(Request $request)
    {
        DB::table('posts')->where('title', '=', $request->title)->delete();

        return redirect('posts/');
    }


    public function modify($title)
    {
        
        //$posts = DB::table('posts')->get();
        $post = DB::table('posts')->where('title', $title)->first();

        return view('posts.modify', ['post' => $post]);
    }

    public function update(Request $request)
    {
        DB::table('posts')
            ->where('title', $request->title)
            ->update(['comment' => $request->comment]);

        return redirect('posts/');
    }












			



    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
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


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }
}
