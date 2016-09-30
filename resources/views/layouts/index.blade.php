<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/awesome/css/font-awesome.css') }}">
        <link href="{{url('https://fonts.googleapis.com/css?family=Lato" rel="stylesheet')}}">
        <link rel="stylesheet" href="{{ url('https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous')}}">
       

    </head>
    <body>
        <script src="{{ url('assets/js/jquery-3.1.0.js')}}"></script>
        <script src="{{ url('assets/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ url('assets/js/main.js')}}"></script>
        <script src="{{ url('assets/js/slider.js')}}"></script>
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
                            xxx@xxx.com
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </p>
                        <p>
                            1234567890
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

                            <li><a class ='pink' href="{{url('/stats')}}">Məqalələr</a></li>
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
        <div class = 'container-fluid'>
            <div class = 'row '>
                <div class = 'col-md-2 col-md-offset-2'>
                    <div class = 'col_wrapper'>
                        <h5>Autist uşaqlar haqqında</h5>
                        <img src="images/green_sketch.png">
                        <h5>Lorem ipsh5um dolor sit amet.Lorem ipsum dolor sit amet</h5>
                    </div>
                </div>
                <div class = 'col-md-2 '>
                    <div class = 'col_wrapper'>
                        <h5>Son əlavə olunan şərhlər</h5>
                        <img src="images/yellow_sketch.png">
                        <h5>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</h5>
                    </div>
                </div>
                <div class = 'col-md-2'>
                    <div class = 'col_wrapper'>
                        <h5>Kontakt</h5>
                        <img src="images/red_sketch.png">
                        <h5>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</h5>
                    </div>
                </div>
                <div class= 'col-md-3 ' >
                    <div class= 'col_wrapper'>
                        <h5>We're social</h5>
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
    <script src="assets/js/main.js"></script>