<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
  <form action="{{ route("comics.store") }}" method="post">
    @csrf

    <div class="mb-3">
      <label for="field_name" class="form-label">title</label>
      <input type="text"
        class="form-control"
        name="title" id="_title"
        value="{{ old('name') }}">
    </div>

    <div class="mb-3">
      <label for="field_email" class="form-label">Email</label>
      <input type="text"
        class="form-control {{ $errors->has("email") ? 'is-invalid' : '' }}"
        name="email" id="field_email"
        value="{{ old('email') }}">
    </div>

    <div class="mb-3">
      <label for="field_password" class="form-label">Password</label>
      <input type="password"
        class="form-control {{ $errors->has("password") ? 'is-invalid' : '' }}"
        name="password" id="field_password">
    </div>

    <div>
      <button class="btn btn-primary" type="submit">Crea</button>
    </div>
  </div>
</body>
</html>