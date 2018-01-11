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

        //$posts = DB::table('posts')->get();
	$posts = DB::select('select * from posts order by title');

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $post = new Post;
        $post->title = "";
        $post->comment = "";
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
	    
	// トランザクションをロールバック
	//DB::rollBack();
	    
	// トランザクションをコミット
	DB::commit();
	    
        // 一覧画面を表示
        //return redirect('posts/');
	
	//一覧にリダイレクト
        return redirect()->to('/posts');
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
	
    public function edit($title)
    {
        //レコードを検索
        //$post = Post::find($id);
        //検索結果をビューに渡す
        //return view('posts.edit')->with('post',$post);
	
	//$postRs = DB::select('select title,comment from posts where title = ?', [$title]);
	$post = DB::table('posts')->where('title', $title)->first();
	//$post = new Post;
        //$post->title = $postRs->title;
        //$post->comment = $postRs->comment;
        return view('posts.edit', ['post' => $post]);
        //return view('posts.edit', ['post' => $post]);
	//return view('posts.edit')->with('post',$post);
    }
	
    public function update(Request $request, $title)
    {
        //レコードを検索
        //$post = Post::find($title);
        //値を代入
        //$post->name = $request->title;
        //$post->email = $request->comment;
        //保存（更新）
        //$post->save();
	    
	// 更新    
	DB::update('update posts set comment = ? where title = ?', [$request->comment,$request->title]);
	    
        //リダイレクト
	return redirect()->to('/posts');
    }
	
    public function destroy($title)
    {
	// 更新
	DB::delete('delete from posts where title = ?', [$title]);
	    
        //リダイレクト
	return redirect()->to('/posts');
	//$posts = DB::select('select * from posts order by title');
        //return view('posts.index', ['posts' => $posts]);
    }

}
