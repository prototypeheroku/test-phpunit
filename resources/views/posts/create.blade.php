<form action="{{ url('posts/store') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <div>
        <label for="title">{{ __('Title') }}</label>
        <input id="title" type="text" name="title" required autofocus>
    </div>
    <div>
        <label for="comment">{{ __('Comment') }}</label>
        <textarea id="comment" name="comment" rows="8" required></textarea>
    </div>
    <button type="submit" name="submit">{{ __('Submit') }}</button>
</form>
