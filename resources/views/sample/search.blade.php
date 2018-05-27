@extends('layout')

@section('content')

    <h1>検索</h1>
    
    <form action="{{ url('sample/search') }}" method="post">   
    
        <div class="form-group">
            <label>災害名</label>
              <select name="key1" id="key1">
                <option value="001">災害名１</option>
                <option value="002">災害名２</option>
                <option value="003">災害名３</option>
              </select>
        </div>
        <div class="form-group">
            <label>災害本部名</label>
              <select name="key2" id="key2">
                <option value="001">災害本部名１</option>
                <option value="002">災害本部名２</option>
                <option value="003">災害本部名３</option>
              </select>
        </div>
        <div class="form-group">
            <label>災害本部住所</label>
              <select name="key3" id="key3">
                <option value="001">災害本部住所１</option>
                <option value="002">災害本部住所２</option>
                <option value="003">災害本部住所３</option>
              </select>
        </div>
        <div class="form-group">
            <label>責任者名</label>
              <select name="key4" id="key4">
                <option value="001">責任者名１</option>
                <option value="002">責任者名２</option>
                <option value="003">責任者名３</option>
              </select>
        </div>
        <div class="form-group">
            <label>災害発生日</label>
            <input type="text" id="datepicker">
        </div>
        <div class="form-group">
            <label>災害登録日</label>
            <input type="text" name="title" value="111" class="form-control" required autofocus>
        </div>
        <div class="form-group">
            <label>災害の種類</label>
            <input type="text" name="comment" value="222" class="form-control" required autofocus>
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
