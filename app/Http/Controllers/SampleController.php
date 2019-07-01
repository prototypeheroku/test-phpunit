<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Sample;
use App\Http\Requests\StorePost;

class SampleController extends Controller
{
	
    public function search()
    {
        return view('sample.search');
    }
	
    public function index(Request $request)
    {
	$colkey1 = $request->colkey1;
	$col1 = $request->col1;
	$col2 = $request->col2;
	//検索結果を取得
	//$samples = Sample::where('colkey1', 'LIKE', "%$colkey1%")
	//	->orWhere('col1', 'LIKE', "%$col1%")
	//	->orderBy('colkey1','asc')->paginate(5);
	    
	$query = Sample::query();
        // 検索するテキストが入力されている場合のみ
        if(!empty($colkey1)) {
            $query->where('colkey1', 'like', '%'.$colkey1.'%');
        }
        if(!empty($col1)) {
            $query->where('col1', 'like', '%'.$col1.'%');
        }
        if(!empty($col2)) {
            $query->where('col2', 'like', '%'.$col2.'%');
        }	    
        //ページネーション
        $data = $query->paginate(3);
	
	//検索結果を表示
        return view('sample.index')->with('samples',$data);
    }

    public function create()
    {
        $post = new Post;
        $post->title = "0001";
        $post->comment = "テスト０００１";
        return view('sample.create', ['post' => $post]);
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
        return redirect()->to('/sample');
    }
	
    public function show($title)
    {
        $post = DB::table('posts')->where('title', $title)->first();
	return view('sample.show', ['post' => $post]);
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
        return view('sample.edit', ['post' => $post]);
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
	return redirect()->to('/sample');
    }
	
    public function destroy($title)
    {
	// 更新
	DB::delete('delete from posts where title = ?', [$title]);
	    
        //リダイレクト
	return redirect()->to('/sample');
    }

}
