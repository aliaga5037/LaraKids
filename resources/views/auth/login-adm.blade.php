<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <title>Admin Giriş</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-theme.css')}}" rel="stylesheet">
    <link href="{{url('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{url('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css ')}}">
  </head>
  <body class="login-img3-body">
    <div class="container" >
      <form class="login-form"  method="POST" action="{{ url('/admin/login') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="login-wrap" >
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group" >

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
                <li><a href="{{ url('/login') }}"><button class="btn btn-primary btn-lg btn-block" type="submit">Login</button></a></li>
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
      </body>
    </html>