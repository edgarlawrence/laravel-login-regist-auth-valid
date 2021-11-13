<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<h1> Create something B***H</h1>

<form method="POST" action="/posts" class="block">
    @csrf

    <div>
        <label for="content"> Content </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>

    <button type="submit"> Save </button>
</form>
</body>
</html>
