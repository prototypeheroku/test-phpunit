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
        $posts = DB::table('disaster')->get();
	    
	//$posts = DB::select('select * from posts order by title');
        //return view('posts.index', ['posts' => $posts]);
	    
	
 
	    
        $query = Post::query();
        //全件取得
        //$users = $query->get();
	    
	 
 
	    
        //ページネーション
        //$posts = $query->orderBy('disaster_name','asc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        $post = new Post;
        $post->disaster_name = "災害名";
        $post->disaster_kind = "種類";
	$post->disaster_area = "地域";
        return view('posts.create', ['post' => $post]);
	
	//post->disaster_name
	//post->disaster_kind
	//post->disaster_area
	    
    }

    public function add(Request $request)
    {
	// トランザクションを開始
	DB::beginTransaction();
	    
	    
	// 追加
        DB::table('disaster')->insert(
            ['disaster_name' => $request->disaster_name, 'disaster_kind' => $request->disaster_kind, 'disaster_area' => $request->disaster_area]
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
	
    public function show($disaster_name)
    {
        $post = DB::table('disaster')->where('disaster_name', $disaster_name)->first();
	return view('posts.show', ['post' => $post]);
    }
	
    public function edit($disaster_name)
    {
        //レコードを検索
        //$post = Post::find($id);
        //検索結果をビューに渡す
        //return view('posts.edit')->with('post',$post);
	
	//$postRs = DB::select('select title,comment from posts where title = ?', [$title]);
	$post = DB::table('disaster')->where('disaster_name', $disaster_name)->first();
	//$post = new Post;
        //$post->title = $postRs->title;
        //$post->comment = $postRs->comment;
        return view('posts.edit', ['post' => $post]);
        //return view('posts.edit', ['post' => $post]);
	//return view('posts.edit')->with('post',$post);
    }
	
    public function update(Request $request, $disaster_name)
    {
        //レコードを検索
        //$post = Post::find($title);
        //値を代入
        //$post->name = $request->title;
        //$post->email = $request->comment;
        //保存（更新）
        //$post->save();
	    
	// 更新    
	DB::update('update disaster set disaster_kind = ? where disaster_name = ?', [$request->disaster_kind,$request->disaster_name]);
	    
        //リダイレクト
	return redirect()->to('/posts');
    }
	
    public function destroy($disaster_name)
    {
	// 更新
	DB::delete('delete from disaster where disaster_name = ?', [$disaster_name]);
	    
        //リダイレクト
	return redirect()->to('/posts');
    }

}
