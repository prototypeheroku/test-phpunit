@extends('layout')

@section('content')

    <h1>一覧表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/posts/create" class="btn btn-primary" style="margin:20px;">新規登録</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped" border="2">
    
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
                <td style="width:40%">{{ $post->comment }}</td>
                <td>
　　　　　　　　　　<a href="/posts/edit/{{$post->title}}" class="btn btn-primary btn-sm">詳細</a>
　　　　　　　　 </td>
                <td>
　　　　　　　　　　<a href="/posts/edit/{{$post->title}}" class="btn btn-primary btn-sm">編集</a>
　　　　　　　　 </td>
                <td>
                  <form method="post" action="/posts/destroy/{{$post->title}}">
                    <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
                    <input type="text" name="_token" value="{{csrf_token()}}">
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
