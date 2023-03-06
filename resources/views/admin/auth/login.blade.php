@include('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page Login</title>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Guci</b>Express</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    	@if(session('error'))
    	<div class="text-danger text-center">{{session('error')}}</div>
    	@endif
      @if(session('success'))
      <div class="text-success text-center">{{session('success')}}</div>
      @endif
      <p class="login-box-msg">Masukan data admin kamu untuk memasuki dashboard Admin Guci Express</p>

      <form action="{{route('postLogin')}}" method="post">
      	@csrf
        <div class="input-group mb-1">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="input-group mb-1">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input name="remember" type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
</html>
