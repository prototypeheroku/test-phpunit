<div >
    <table >
        <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('備考') }}</th>
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
