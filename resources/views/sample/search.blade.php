@extends('layout')

@section('content')

    <h1>検索条件入力</h1>
    
    <form action="{{ url('sample/search') }}" method="post">  
        <div class="form-group">
            <label>コード</label>
            <input type="text" name="key1" value="111" class="form-control" required autofocus>
        </div>
        <div class="form-group">
            <label>種類</label>
            <select name="key2" id="key2" class="form-control">
            <option value="who">--- 選択なし ---</option>
            <option value="01">種類１</option>
            <option value="02">種類２</option>
            </select>
        </div>
        <div class="form-group">
            <label>名称</label>
            <input type="text" name="key3" value="222" class="form-control" required autofocus>
        </div>
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <input type="submit" value="検索" class="btn btn-default btn-lg">
        <p>
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
          <button type="button" class="btn btn-default btn-lg">Large button</button>
        </p>
　　</form>

@stop

@section('script')
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
@stop
