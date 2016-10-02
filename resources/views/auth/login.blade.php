@extends('layouts.app')

@section('content')
<div class="container">
    <body class="login-img2-body">
    <div class="container" >
      <form class="login-form"  method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="login-wrap" >
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">

               <span class="input-group-addon"><i class="icon_profile"></i></span>

              <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-poçt" autofocus>

              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Şifrə">
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <label class="checkbox">
                <input type="checkbox" value="remember-me"> Yada sal
                <span class="pull-right"> <a href="#">Parolu unutmusunuz</a></span>
              </label>
              <ul>
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}"><button class="btn btn-primary btn-lg btn-block" type="submit">Giriş</button></a></li>
                <span class="pull-right"> <a href="{{url('hekimler/login')}}">Həkimsiniz?</a></span>
                @else

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Çıxış</a></li>
                  </ul>
                </li>
                @endif
              </ul>
            </div>
          </form>
        </div>
@endsection