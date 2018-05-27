@extends('layout')

@section('content')

    <h1>検索</h1>
    
    <form action="{{ url('sample/') }}" method="post">   
    
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" required autofocus>
        </div>

        <div class="form-group">
            <label>内容</label>
            <input type="text" name="comment" value="{{ $post->comment }}" class="form-control" required autofocus>
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="検索" class="btn btn-primary">
　　</form>

@stop
