<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1> this is editing post section b****h</h1>
    <form method="POST" action="/posts/{{ $post->id }}">
        @method('PUT')
        @csrf

        <div class="input1">
            <label for="title"> Title </label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div class="input2">
            <label for="content"> Content </label>
            <textarea name="content" id="content" cols="30" rows="10"> {{$post->content}} </textarea>
        </div>

        <button type="submit"> Update </button>

    </form>

</body>
</html>
