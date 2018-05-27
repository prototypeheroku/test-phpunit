@extends('layout')

@section('content')

    <h1>検索条件入力</h1>
    
    <form action="{{ url('sample/search') }}" method="post">  
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="colkey1" value="0001" class="form-control" >
        </div>
        <div class="form-group">
            <label>種類</label>
            <select name="col1" id="col1" class="form-control">
            <option value="who">--- 選択なし ---</option>
            <option value="種類１">種類１</option>
            <option value="種類２">種類２</option>
            </select>
        </div>
        <div class="form-group">
            <label>名称</label>
            <input type="text" name="col2" value="名称０００１" class="form-control" >
        </div>
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" value="検索" class="btn btn-primary">
        
　　</form>

@stop

@section('script')
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
@stop
