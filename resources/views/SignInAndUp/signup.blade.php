<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form class="w-50 mx-auto pt-20 text-center">
        <h1 class="py-10"> Sign Up Please :) </h1>
        <div class="form-group">
          <label for="fullname" class="mb-1">Full Name</label>
          <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp">

          <label for="surname" class="mb-1">Surname</label>
          <input type="text" class="form-control" id="surname" aria-describedby="emailHelp">

          <label for="age" class="mb-1"> Age </label>
          <input type="date" class="form-control"  name="age" id="age">

          <label for="email" class="mb-1">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group" class="mb-1">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary mx-auto w-50">Submit</button>
      </form>
</body>
</html>
