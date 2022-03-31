<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <div class="border-bottom">
   <b>Register</b></a>
  </div>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg border-bottom">Registration First !</p>

      <form method="POST" action="{{ url('register') }}">
        @csrf

        <div class="input-group mb-3">
          <div class="input-group has-validation">
            <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required autocomplete="name" autofocus>
            <div class="input-group-append">
             <div class="input-group-text">
             <span class="fas fa-user"></span>
              </div>
               </div>
                </div>
                 <div class="text-danger">
                  @error('name')
                 {{ $message }}
                  @enderror
                  </div>
                </div>

        <div class="input-group mb-3">
            <div class="input-group has-validation">
                <input type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required autocomplete="username">
                <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
                    </div>
                    </div>
                    <div class="text-danger">
                    @error('username')
                    {{ $message }}
                    @enderror
                    </div>
                    </div>

        <div class="input-group mb-3">
            <div class="input-group has-validation">
                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required autocomplete="email">
                <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                 </div>
                  </div>
                  </div>
                    <div class="text-danger">
                     @error('email')
                    {{ $message }}
                     @enderror
                     </div>
                 </div>

        <div class="input-group mb-3">
            <div class="input-group has-validation">
                <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required autocomplete="password">
                <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                 </div>
                  </div>
                  </div>
                    <div class="text-danger">
                     @error('password')
                    {{ $message }}
                     @enderror
                     </div>
                  </div>

          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>
    </div>
</div>

<small class="mt-3">Already Registered ? <a href="{{ url('login') }}">Login Now !</a></small>

<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
