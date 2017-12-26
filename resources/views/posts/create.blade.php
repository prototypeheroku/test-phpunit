<form action="{{ url('posts/add') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <div>
        <label for="title">{{ __('Title') }}</label>
        <input id="title" type="text" name="title" value="{{ $post->title }}" required autofocus>
    </div>
    <div>
        <label for="comment">{{ __('Comment') }}</label>
        <input id="comment" type="text" name="comment" value="{{ $post->comment }}" required autofocus>
    </div>
    <button type="submit" name="submit">{{ __('Add') }}</button>
</form>
