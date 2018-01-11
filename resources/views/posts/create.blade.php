@extends('layout')

@section('content')

    <h1>新規作成</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/posts" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

<form action="{{ url('posts/add') }}" method="post">   
    
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>内容</label>
            <input type="text" name="comment" value="{{ $post->comment }}" class="form-control" required autofocus>
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="登録" class="btn btn-primary">
</form>

@stop
