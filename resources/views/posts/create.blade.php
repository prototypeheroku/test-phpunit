<form action="{{ url('posts/store') }}" method="post">
    <div>
        <label for="title">{{ __('Title') }}</label>
        <input id="title" type="text" name="title" required autofocus>
    </div>
    <div>
        <label for="comment">{{ __('Comment') }}</label>
        <input id="comment" type="text" name="comment" required autofocus>
    </div>
    <button type="submit" name="submit">{{ __('Submit') }}</button>
</form>
