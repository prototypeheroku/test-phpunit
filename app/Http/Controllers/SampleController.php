<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePost;

class SampleController extends Controller
{
    public function index()
    {
        //$posts = Post::latest()->get();
        //$posts = DB::table('posts')->get();
	    
	//$posts = DB::select('select * from posts order by title');
        //return view('posts.index', ['posts' => $posts]);
	    
        $query = Post::query();
        //全件取得
        //$users = $query->get();
        //ページネーション
        $posts = $query->orderBy('title','asc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        $post = new Post;
        $post->title = "0001";
        $post->comment = "テスト０００１";
        return view('posts.create', ['post' => $post]);
    }

    public function add(Request $request)
    {
	// トランザクションを開始
	DB::beginTransaction();
	    
	    
	// 追加
        DB::table('posts')->insert(
            ['title' => $request->title, 'comment' => $request->comment]
        );
	
	// 更新    
	//DB::update('update posts set comment = ? where title = ?', [$request->comment,$request->title]);
	
	// 削除    
	//DB::delete('delete from posts where title = ?', [$request->title]);
	    
