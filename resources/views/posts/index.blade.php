@extends('layout')

@section('content')

    <h1>一覧表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/posts/create" class="btn btn-primary" style="margin:20px;">新規登録</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
    
        <thead>
            <tr>
                <th>{{ __('コード') }}</th>
                <th>{{ __('内容') }}</th>
                <th>{{ __('') }}</th>
                <th>{{ __('') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->comment }}</td>
                <td>
　　　　　　　　　　<a href="{{ url('posts/modify/{'.$post->title.'}') }}" class="btn btn-primary btn-sm">編集</a>
　　　　　　　　　　<a href="{{ url('posts/delete/') }}" class="btn btn-primary btn-sm">削除</a>
　　　　　　　　</td>
             </tr>
        @endforeach 
        </tbody>
    </table>
    
@stop
