<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/components.css')}}">
    <title>crud Buku</title>
</head>
<body>
    <div id="app">
        <section class="section">
          <div class="container mt-5">
            <div class="row">
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                  <img src="{{ asset('/img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>
    
                <div class="card card-primary">
                  <div class="card-header"><h4>Login</h4></div>
                  <div class="card-body">
                    
                    <form method="post" action="/" class="needs-validation" >
                      @csrf
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="username" class="form-control" name="username" tabindex="1" value="{{ old('username') }}" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your username
                        </div>
                      </div>
    
                      <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                          <div class="float-right">
                            <a href="auth-forgot-password.html" class="text-small">
                              Forgot Password?
                            </a>
                          </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                          please fill in your password
                        </div>
                      </div>
    
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                          Login
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="mt-5 text-muted text-center">
                  Don't have an account? <a href="auth-register.html">Create One</a>
                </div>
                <div class="simple-footer">
                  Copyright &copy; Stisla 2018
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

<!-- General JS Scripts -->
<script src="{{ asset('/js/stisla.js') }}"></script>

<!-- Plugins -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('/js/scripts.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
</body>
</html>