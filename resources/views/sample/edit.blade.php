@extends('layout')

@section('content')

    <h1>情報編集</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/sample" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- form -->
    <form method="post" action="/sample/update/{{$post->title}}">

        <div class="form-group">
            <label>名前</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>E-Mail</label>
            <input type="text" name="comment" value="{{ $post->comment }}" class="form-control" required autofocus>
        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="更新" class="btn btn-primary">

    </form>

@stop
