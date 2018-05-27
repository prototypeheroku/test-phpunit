@extends('layout')

@section('content')

    <h1>検索</h1>
    
    <form action="{{ url('sample/search') }}" method="post">   
    
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="title" value="" class="form-control" required autofocus>
        </div>

        <div class="form-group">
            <label>内容</label>
            <input type="text" name="comment" value="" class="form-control" required autofocus>
        </div>
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <input type="submit" value="検索" class="btn btn-primary">
　　</form>

@stop
