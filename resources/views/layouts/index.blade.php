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
        <section id='header'><!-- aysel -->
        <!-- <div class = 'container-fluid'> -->
        <div class = 'container'>
            <div class = 'row'>
                <div class = 'col-md-6'>
                    <div class = 'row1_left'>
                        <img src="images/logo.png">
                    </div>
                </div>
                <div class = 'col-md-6'>
                    <div class = 'row1_right'>
                        <p>
                            xxx@gmail.com
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </p>
                        <p>
                            123456789
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class = 'mn'>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand dsp" href="#">Menu</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-left">
                            
                            <li><a class = 'active red' href="{{url('/')}}">Home</a></li>
                            <li><a class ='yellow' href="{{url('/about')}}">About Us</a></li>
                            <li><a class ='green' href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a class ='blue' href="{{url('/services')}}">Services</a></li>
                            <li><a class ='pink' href="{{url('/contact')}}">Contact us</a></li>
                            <li><a class ='yellow' href="{{url('/stats')}}">Məqalələr</a></li>
                            <li><a class ='green' href="{{url('/login')}}">Daxil ol</a></li>
                            <li><a class ='blue' href="{{url('/register')}}">Qeydiyyatdan keç</a></li>
                            <li><a class ='pink' href="{{url('/logout')}}">Çıxış et</a></li>                           
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class ='blue' href="https://www.facebook.com"><i class="fa  fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a class ='red' href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a class ='yellow' href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a class ='green' href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    @yield('content')
    
    <img src="assets/images/top.png" title="Go To Top" class="top">
    <section id="about">
        <div class = 'container-fluid'>
            <div class = 'row'>
                <div class = 'col-md-12'>
                    <div class = 'image_wrapper'>
                        <img src="images/footer_top_bg.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class = 'container'>
            <div class = 'row brd'>
                <div class = 'col-md-4'>
                    <div class = 'col_wrapper'>
                        <h2>Autist usaqlar haqqinda</h2>
                        <img src="images/green_sketch.png">
                        <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class = 'col-md-4'>
                    <div class = 'col_wrapper'>
                        <h2>Son elave olunan serhler</h2>
                        <img src="images/yellow_sketch.png">
                        <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class = 'col-md-4'>
                    <div class = 'col_wrapper'>
                        <h2>Kontakt</h2>
                        <img src="images/red_sketch.png">
                        <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</p>
                        <h3>We are social</h3>
                        <div class = 'social'>
                            <input type="text" name="">
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section><!-- aysel -->
        <section id="footer">
            <div class = 'container'>
                <div class = 'row marginTop wdt'>
                    <div class = 'col-md-6'>
                        <p>© 2014 Kids Life. All rights reserved. </p>
                    </div>
                    <div class = 'col-md-6'>
                        <!-- <p>Follow Us</p> -->
                        <div class = 'follow'>
                            <ul>
                                <li><p>Follow Us</p></li>
                                <li><a class = 'one' href="https://www.facebook.com"><i class="fa  fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a class = 'two' href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class = 'three' href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class = 'four' href="https://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </section><!-- aysel -->
        </body>
    </html>
</html>
<script src="assets/js/main.js"></script>