<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <li>{{ $errors}}</li>
    @endif
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
            </div>
            <div class="card-text">
                <form action="{{ route('login') }}" method="post">
                @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                          Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">Login</button>  
                    </div>
                    
                  </form>
                  Not a Member? <a href="{{ route('register') }}">Sign Up Here</a>
            </div>
        </div>
    </div>
  </body>
</html>


