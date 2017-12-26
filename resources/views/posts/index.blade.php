<div >
<a href="{{ url('posts/create') }}" >追加</a>
    <table >
        <thead>
            <tr>
                <th>{{ __('コード') }}</th>
                <th>{{ __('内容') }}</th>
                <th>{{ __('') }}</th>
                <th>{{ __('') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->comment }}</td>
                <td>
　　　　　　　　　　<a href="{{ url('posts/modify/{{{ $post->title }}}') }}" >更新</a>
　　　　　　　　　　<a href="{{ url('posts/delete/{{{ $post->title }}}') }}" >削除</a>
　　　　　　　　</td>
             </tr>
        @endforeach
        </tbody>
    </table>
</div>
