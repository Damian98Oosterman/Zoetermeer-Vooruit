@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 well">
          <h3 class="auth-title">Login</h3>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                <div class="col-md-10 col-md-offset-1">
                  <input id="email" type="email" placeholder="E-mail adres" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                <div class="col-md-10 col-md-offset-1">
                  <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-10 col-md-offset-1">
                  <button type="submit" class="btn btn-success btn-fullwidth">
                    Login
                  </button>
                  <a class="btn btn-info btn-fullwidth" href="/register">
                    Nog geen lid? Meld je aan!
                  </a>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                  </a>
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
@endsection
