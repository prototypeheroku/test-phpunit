@extends('layout')

@section('content')

    <h1>一覧表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/posts/create" class="btn btn-primary" style="margin:20px;">新規登録</a>
        </div>
    </div>
    
    <!--↓↓ 検索フォーム ↓↓-->
    <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
    <form class="form-inline" action="{{url('/posts')}}">
      <div class="form-group">
      <input type="text" name="keyword" value="{{$keyword}}" class="form-control" placeholder="コードを入力してください">
      </div>
    <input type="submit" value="検索" class="btn btn-info">
    </form>
    </div>
    <!--↑↑ 検索フォーム ↑↑-->

    <!-- table -->
    <table class="table table-striped">
    
        <thead>
            <tr>
                <th>{{ __('コード') }}</th>
                <th>{{ __('内容') }}</th>
                <th>{{ __('') }}</th>
                <th>{{ __('') }}</th>
                <th>{{ __('') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td style="width:20%">{{ $post->title }}</td>
                <td style="width:30%">{{ $post->comment }}</td>
                <td>
                      <a href="/posts/show/{{$post->title}}" class="btn btn-primary btn-sm">詳細</a>
                <td>
　　　　　　　　　　    <a href="/posts/edit/{{$post->title}}" class="btn btn-primary btn-sm">編集</a>
                </td>
                <td>
                      <form method="post" action="/posts/destroy/{{$post->title}}">
                         <div>
                             <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
                         </div>
                         <div>
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                         </div>
                      </form>
　　　　　　　　 </td>
             </tr>
        @endforeach 
        </tbody>
    </table>
{!! $posts->render() !!}
@stop

@section('script')
$(function(){
    $(".btn-destroy").click(function(){
        if(confirm("本当に削除しますか？")){
            //そのままsubmit（削除）
        }else{
            //cancel
            return false;
        }
    });
});
@stop
