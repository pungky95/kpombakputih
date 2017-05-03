@extends('layouts.login_layout')
@section('title','Admin Login')
@section('login')
<div class="login-box">

  <div class="login-logo">
    <a href="{{ url('/login') }}"><b>Admin</b>LOGIN</a>
  </div>
    @if ($errors->has('email'))
        <div class="alert alert-danger"><strong>Whoops!</strong>
        There were some problems with your input.<br><br> <ul><li>{{ $errors->first('email') }}</li></ul></div>
    @endif
    @if ($errors->has('password'))
        <div class="alert alert-danger"><strong>Whoops!</strong>
        There were some problems with your input.<br><br> <ul><li>{{ $errors->first('password') }}</li></ul></div>
    @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ url('/login') }}" method="post">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection