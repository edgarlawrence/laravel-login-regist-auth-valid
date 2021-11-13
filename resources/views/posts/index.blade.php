<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/posts/create">Create <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <!-- End of Navbar-->

    <h1 class="crud-title">My CRUD Playground</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> number </th>
                <th scope="col"> title </th>
                <th scope="col"> content </th>
                <th scope="col"> action </th>
            </tr>
        </thead>

        @foreach ($posts as $post)
        <tbody>
            <tr>
                <th scope="row"> {{$post->id}} </th>
                <td> {{ $post->title }}   </td>
                <td> {{ $post->content }} </td>
                <td>
                    <div class="d-flex">
                        <a href="/posts/{{ $post->id }}/edit"> Edit </a>
                    </div>
                    <form action="/posts/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>
