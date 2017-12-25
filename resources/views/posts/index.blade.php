<div >
    <table >
        <thead>
            <tr>
                <th>{{ __('Title') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
             </tr>
        @endforeach
        </tbody>
    </table>
</div>
