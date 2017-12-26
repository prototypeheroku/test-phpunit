<div >
<a href="{{ url('posts/create') }}" >追加</a>
    <table >
        <thead>
            <tr>
                <th>{{ __('コード') }}</th>
                <th>{{ __('内容') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->comment }}</td>
             </tr>
        @endforeach
        </tbody>
    </table>
</div>
