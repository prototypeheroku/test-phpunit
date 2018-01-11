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
    <div>
        <label for="title">{{ __('Title') }}</label>
        <input id="title" type="text" name="title" value="{{ $post->title }}" required autofocus>
    </div>
    <div>
        <label for="comment">{{ __('Comment') }}</label>
        <input id="comment" type="text" name="comment" value="{{ $post->comment }}" required autofocus>
    </div>
    <button type="submit" name="submit">{{ __('Add') }}</button>
</form>

@stop
