@extends('layout')

@section('content')

    <h1>検索結果</h1>
    
    <div class="row">
        <div class="col-sm-12">
            <a href="/sample/create" class="btn btn-primary" style="margin:20px;">追加</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
    
        <thead>
            <tr>
                <th>{{ __('コード') }}</th>
                <th>{{ __('種類') }}</th>
                <th>{{ __('名称') }}</th>
                <th>{{ __('') }}</th>
                <th>{{ __('') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($samples as $sample)
            <tr>
                <td style="width:20%">{{ $sample->colkey1 }}</td>
                <td style="width:30%">{{ $sample->col1 }}</td>
                <td style="width:30%">{{ $sample->col2 }}</td>
                <td>
                      <a href="/sample/show/{{$sample->colkey1}}" class="btn btn-primary btn-sm">詳細</a>
                </td>
                <td>
　　　　　　　　　　    <a href="/sample/edit/{{$sample->colkey1}}" class="btn btn-primary btn-sm">編集</a>
                </td>
             </tr>
        @endforeach 
        </tbody>
    </table>
{!! $samples->render() !!}
    
<div class="row">
    <div class="col-sm-12">
        <a href="/sample" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
    </div>
</div>
@stop

@section('script')
$(function(){
    $(".btn-destroy").click(function(){
        if(confirm("本当に削除しますか？")){
            //そのままsubmit（削除）
        }else{
            //cancel
            return false;
        }
    });
});
@stop
