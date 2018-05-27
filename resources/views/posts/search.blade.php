@extends('layout')

@section('content')

　　　　　　　　<h1>情報検索</h1>

<form>

        <div class="form-group">
            <label>コード</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" required autofocus>
        </div>
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="検索" class="btn btn-primary">

</form>

@stop
