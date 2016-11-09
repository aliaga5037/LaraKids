<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{url('assets/awesome/css/font-awesome.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
       
        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/awesome/css/font-awesome.css') }}">
        <link href="{{url('https://fonts.googleapis.com/css?family=Lato" rel="stylesheet')}}">
        <link rel="stylesheet" href="{{ url('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous')}}">
        <script src="{{ url('assets/js/jquery-3.1.0.js')}}"></script>
        <script src="{{ url('assets/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ url('assets/js/main.js')}}"></script>
        <script src="{{ url('assets/js/slider.js')}}"></script>
    </head>
    <body>
        <section id='header' >
            <div class="container">
                <img src="{{url('images/logo.png')}}" alt="">
                
                <ul class="pull-right ep">
                    <li class="email">
                        <span>contact@kidslife.com</span> <i class="fa fa-envelope"></i>
                    </li>
                    <li>
                        <i>+1 959 552 5963</i> <i class="fa fa-phone"></i>
                    </li>
                </ul>

                <ul class="menu">
                    <li class="red"><a href="{{url('/')}}">Ana Səhifə</a></li>
                    <li class="orange"><a href="{{url('/about')}}">Haqqımızda</a></li>
                    <li class="green"><a href="{{url('/portfolio')}}">Oyunlar</a></li>
                    <li class="yellow"><a href="{{url('/services')}}">Servislər</a></li>
                    <li class="skyblue"><a href="{{url('/contact')}}">Əlaqə</a></li>
                    <li class="darkblue"><a href="{{url('/meqale')}}">Məqalələr</a></li>
                    <li class="purple"><a href="{{url('/login')}}">Daxil ol</a></li>
                    <li class="purplesecond"><a href="{{url('/register')}}">Qeydiyyatdan keç</a></li>
                    <li class="purplethird"><a href="{{url('/logout')}}">Çıxış et</a></li>
                    @if(auth()->guard('admin')->user())
                        {{'<li>okd</li>'}}
                    @endif
                </ul>
            </div>
            
        </section>
    @yield('content')
    
    <img src="{{url('assets/images/top.png')}}" title="Go To Top" class="top">
        <section id="about">
            <div class="container">
                <div class="col-md-3 kidsLife">
                   <div class="row">
                        <h4>About Kids Life</h4>
                        <img src="{{url('images/red_sketch.png')}}" alt="">
                        <p>Happy Kids Life comes with powerful theme options, which empowers you to quickly and easily build incredible store.</p>
                        <ul>
                            <li>
                                <i class="fa fa-check">English Grammer Class</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Music Class</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Swimming & Karate</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Lot of HTML Styles</i>
                            </li>
                            <li>
                                <i class="fa fa-check">Unique News Page Design</i>
                            </li>
                        </ul>
                   </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <h4>Latest Post</h4>
                        <img src="{{url('images/green_sketch.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <h4>Twitter Feeds</h4>
                        <img src="{{url('images/yellow_sketch.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <h4>Contact</h4>
                        <img src="{{url('images/steelblue_sketch.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="container">
                <b>@ 2016 AUTISM.AZ</b>
            </div>
        </section>
        </body>
    </html>
</html>
<script src="assets/js/main.js"></script>