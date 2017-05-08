@extends('layouts.app')

@section('content')
  <div class="dark">
<div class="login-register-background">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-top panel-border">
              <img src="{{ asset('img\logo\LogoLarge.png') }}" width="200" class="img-responsive user-creation-img">
                <div class="panel-heading"><strong>Register</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal form-alignment" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <!-- <label for="name" class="col-md-4 control-label">Name</label> -->

                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" type="email" placeholder="E-mail adres" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            <div class="col-md-10 col-md-offset-1">
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="loginbutton col-md-10 col-md-offset-1">
                            <span class="respbreak"><button type="submit" class="btn btn-primary loginbuttonstyle">Register</button></span>
                            <button onclick="location.href='login';" class="btn btn-primary registerest">Hier al geweest? Log dan in!</button>
                          </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
