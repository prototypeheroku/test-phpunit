@extends('layout')

@section('content')

    <h1>新規作成</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/posts" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

<form action="{{ url('posts/add') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    
    
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="title" value="" class="form-control" required autofocus>
        </div>

        <div class="form-group">
            <label>内容</label>
            <input type="text" name="comment" value="" class="form-control">
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="登録" class="btn btn-primary">
</form>

@stop
