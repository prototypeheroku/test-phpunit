@extends('layout')

@section('content')

    <h1>詳細表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/sample" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
        <tr><td>コード</td><td>{{$post->title}}</tr>
        <tr><td>内容</td><td>{{$post->comment}}</tr>
    </table>

@stop
