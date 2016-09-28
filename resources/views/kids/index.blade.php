@extends('layouts.index')
@section('content')
{{-- <?php
    use App\Texts;
    $text=Texts::all();
?> --}}
<section id="slider" class="col-md-12 col-xs-12 col-sm-12" style="position: relative;top:50px;">
    <div class="row">
        <!-- Frame3 -->
        <img src="assets/images/slider/bg3.jpg" class="bg3 img img-responsive frame3">
        <img src="assets/images/slider/aplus.png" class="a img img-responsive frame3">
        <img src="assets/images/slider/swirl-3.png" class="swirl3 img img-responsive frame3">
        <img src="assets/images/slider/swirl-2.png" class="swirl2 img img-responsive frame3">
        <img src="assets/images/slider/cap.png" class="cap img img-responsive frame3">
        <img src="assets/images/slider/apple.png" class="apple img img-responsive frame3">
        <img src="assets/images/slider/swirl-4.png" class="swirl4 img img-responsive frame3">
        <img src="assets/images/slider/common-swirl.png" class="cs img img-responsive frame3">
        <img src="assets/images/slider/boom.png" class="boom img img-responsive frame3">
        <img src="assets/images/slider/awesome-gallery.png" class="ag img img-responsive frame3">
        <img src="assets/images/slider/parallax-bg.png" class="parallax img img-responsive frame3">
        <img src="assets/images/slider/creative-design.png" class="cd img img-responsive frame3">
        <img src="assets/images/slider/mega-menu.png" class="mm img img-responsive frame3">
        <img src="assets/images/slider/common-swirl.png" class="cs2 img img-responsive frame3">
        <img src="assets/images/slider/common-swirl.png" class="cs3 img img-responsive frame3">
        <img src="assets/images/slider/common-swirl.png" class="cs4 img img-responsive frame3">
        <img src="assets/images/slider/star-2.png" class="star img img-responsive frame3">
        <img src="assets/images/slider/common-star.png" class="csa1 img img-responsive frame3">
        <img src="assets/images/slider/common-star.png" class="csa2 img img-responsive frame3">
        <img src="assets/images/slider/common-star.png" class="csa3 img img-responsive frame3">
        <img src="assets/images/slider/common-star.png" class="csa4 img img-responsive frame3">
        <!-- Frame2 -->
        <img src="assets/images/slider/bg2.jpg" class="bg img img-reponsove frame2">
        <img src="assets/images/slider/school-kid.png" class="schoolKid img img-responsive frame2">
        <img src="assets/images/slider/school-kid.png" class="schoolKid img img-responsive frame2">
        <img src="assets/images/slider/b-bulb.png" class="bulb img img-responsive frame2">
        <img src="assets/images/slider/b-cloud.png" class="cloud img img-responsive frame2">
        <img src="assets/images/slider/b-comment.png" class="comment img img-responsive frame2">
        <img src="assets/images/slider/b-glass.png" class="glass img img-responsive frame2">
        <img src="assets/images/slider/b-game.png" class="game img img-responsive frame2">
        <img src="assets/images/slider/of8EGABW7A6NGNk7CwAAAABJRU5ErkJggg==.png" class="cloud2 img img-responsive frame2">
        <img src="assets/images/slider/purchase-theme.png" class="purchase img img-responsive frame2">
        <img src="assets/images/slider/text-desc.png" class="textDesc img img-responsive frame2">
        <img src="assets/images/slider/welcome-text.png" class="welcome img img-responsive frame2">
        <img src="assets/images/slider/chalk-effect.png" class="chalk img img-responsive frame2">
        <!-- Frame1 -->
        <img src="assets/images/slider/bg.jpg" class="bg img img-reponsove frame1">
        <img src="assets/images/slider/girl1.png" class="girl1 img img-responsive child frame1">
        <img src="assets/images/slider/girl2.png" class="girl2 img img-responsive child frame1">
        <img src="assets/images/slider/boy1.png" class="boy1 img img-responsive child frame1">
        <img src="assets/images/slider/bring.png" class="bring tekst img img-responsive frame1">
        <img src="assets/images/slider/fun.png" class="fun tekst img img-responsive frame1">
        <img src="assets/images/slider/two.png" class="two tekst img img-responsive frame1">
        <img src="assets/images/slider/life.png" class="life tekst img img-responsive frame1">
        <img src="assets/images/slider/cup-divider.png" class="cup tekst img img-responsive frame1">
        <img src="assets/images/slider/trendy.png" class="trendy tekst img img-responsive frame1">
        <img src="assets/images/slider/boy3.png" class="boy2 child img img-responsive frame1">
        <img src="assets/images/slider/boy2.png" class="boy3 child img img-responsive frame1">
        <img src="assets/images/slider/grass.png" class="grass img img-responsive frame1">
        <div class="circleSet col-md-12">
            <div class="circle first"></div>
            <div class="circle second space"></div>
            <div class="circle third space"></div>
        </div>
    </div>
    </section><!-- murad -->
    <section id="primary" class="col-md-12 col-sm-12 col-xs-12">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="img">
                        <img src="assets/images/service1.jpg" alt="">
                        <div class="circle"></div>
                        <i class="fa fa-link"></i>
                    </div>
                    <h4><?php echo $text->find($id=8)->value; ?></h4>
                    <p><?php echo $text->find($id=9)->value; ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="img">
                        <img src="assets/images/service2.jpg" alt="">
                        <div class="circle"></div>
                        <i class="fa fa-link"></i>
                    </div>
                    <h4><?php echo $text->find($id=10)->value; ?></h4>
                    <p><?php echo $text->find($id=11)->value; ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="img">
                        <img src="assets/images/service3.jpg" alt="">
                        <div class="circle"></div>
                        <i class="fa fa-link"></i>
                    </div>
                    <h4><?php echo $text->find($id=12)->value; ?></h4>
                    <p><?php echo $text->find($id=13)->value; ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="img">
                        <img src="assets/images/service4.jpg" alt="">
                        <div class="circle"></div>
                        <i class="fa fa-link"></i>
                    </div>
                    <h4><?php echo $text->find($id=14)->value; ?></h4>
                    <p><?php echo $text->find($id=15)->value; ?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="slider2" class="col-md-12 col-xs-12 col-sm-12">
        <div class="container">
            <div class="col-md-6">
                <div class="row">
                    <h2><?php echo $text->find($id=16)->value; ?></h2>
                    <div class="col-md-6">
                        <div class="row">
                            <ul>
                                <li>
                                    <i class="fa fa-glass"></i>
                                    <p class="heading"><?php echo $text->find($id=18)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=19)->value; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-pencil"></i>
                                    <p class="heading"><?php echo $text->find($id=20)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=21)->value; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-bullseye"></i>
                                    <p class="heading"><?php echo $text->find($id=22)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=23)->value; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <ul>
                                <li>
                                    <i class="fa fa-tachometer"></i>
                                    <p class="heading"><?php echo $text->find($id=24)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=25)->value; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-magic"></i>
                                    <p class="heading"><?php echo $text->find($id=26)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=27)->value; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-music"></i>
                                    <p class="heading"><?php echo $text->find($id=28)->value; ?></p>
                                    <p class="text"><?php echo $text->find($id=29)->value; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h2><?php echo $text->find($id=17)->value; ?></h2>
                    
                    <div class="tablet">
                        <img src="assets/images/add1.jpg" class="img img-responsive">
                    </div>
                    <div class="circleSet text-center">
                        <div class="circle circle1"></div>
                        <div class="circle circle2"></div>
                        <div class="circle circle3"></div>
                    </div>
                </div>
            </div>
        </div>
        </section><!-- murad -->
        <section id="portfolio" class="col-md-12 col-xs-12 col-sm-12">
            <div class="container text-center">
                <h2><?php echo $text->find($id=30)->value; ?></h2>
                <img src="assets/images/gt.png" alt="">
                <!-- HECTAGONS+++++++++++++++++++++++++++================ -->
                <div class="hexa text-center">
                    <div class="row">
                        <div class="firstCol">
                            <div class="hexagon one">
                                <img src="assets/images/img2.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="hexagon two">
                                <img src="assets/images/img4.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                        </div>
                        <div class="secondCol">
                            <div class="hexagon three">
                                <img src="assets/images/img1.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="hexagon four">
                                <img src="assets/images/img5.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="hexagon five">
                                <img src="assets/images/img7.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                        </div>
                        <div class="thirdCol">
                            <div class="hexagon six">
                                <img src="assets/images/img3.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="hexagon seven">
                                <img src="assets/images/img6.jpg" class="img img-responsive">
                                <i class="fa fa-link"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button>Hit here to view all <i class="glyphicon glyphicon-chevron-right"></i></button>
                </div>
            </div>
            </section><!-- murad -->
            <section id="blog" class="col-md-12 col-xs-12 col-sm-12">
                <div class="container text-center">
                    <h2><?php echo $text->find($id=31)->value; ?></h2>
                    <img src="assets/images/gt3.png" class="line">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="data col-md-3 col-sm-3 col-xs-3 text-center">
                                <img src="assets/images/service1.jpg" alt="">
                                <div class="date">
                                    <span>27</span>
                                    <p>Aug <br> 2014</p>
                                </div>
                                <div class="comments date">
                                    <span>12</span>
                                    <p><i class="fa fa-comment"></i></p>
                                </div>
                                <div class="image date">
                                    <i class="fa fa-image"></i>
                                </div>
                            </div>
                            <div class="textAndPhoto col-md-9 text-left col-sm-9 col-xs-9">
                                <div class="row">
                                    <img src="assets/images/blog_img1.jpg" class="img img-responsive">
                                    <a href="#"><h3><b>Activities Improves Mind</b></h3></a>
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums.</p>
                                    <button>Read More <i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="data col-md-3 col-sm-3 col-xs-3 text-center">
                                <img src="assets/images/service1.jpg" alt="">
                                <div class="date">
                                    <span>27</span>
                                    <p>Aug <br> 2014</p>
                                </div>
                                <div class="comments date">
                                    <span>12</span>
                                    <p><i class="fa fa-comment"></i></p>
                                </div>
                                <div class="image date">
                                    <i class="fa fa-image"></i>
                                </div>
                            </div>
                            <div class="textAndPhoto col-md-9 text-left col-sm-9 col-xs-9">
                                <div class="row">
                                    <img src="assets/images/blog_img2.jpg" class="img img-responsive">
                                    <a href="#"><h3><b>Weekly Reader Zone</b></h3></a>
                                    <p>Iid venenatis nibh accums. Doinbibe ndum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accumsan...</p>
                                    <button>Read More <i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </section><!-- murad -->
                <section id="staffs" class="col-md-12 col-xs-12 col-sm-12">
                    <div class="container text-center">
                        <h2><?php echo $text->find($id=32)->value; ?></h2>
                        <img src="assets/images/gt.png" class="line">
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team1.jpg" alt="">
                            <h4><?php echo $text->find($id=33)->value; ?></h4>
                            <span><?php echo $text->find($id=34)->value; ?></span>
                            <p><?php echo $text->find($id=35)->value; ?></p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team2.jpg" alt="">
                            <h4><?php echo $text->find($id=36)->value; ?></h4>
                            <span><?php echo $text->find($id=37)->value; ?></span>
                            <p><?php echo $text->find($id=38)->value; ?></p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team3.jpg" alt="">
                            <h4><?php echo $text->find($id=39)->value; ?></h4>
                            <span><?php echo $text->find($id=40)->value; ?></span>
                            <p><?php echo $text->find($id=41)->value; ?></p>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-12">
                            <img src="assets/images/team4.jpg" alt="">
                            <h4><?php echo $text->find($id=42)->value; ?></h4>
                            <span><?php echo $text->find($id=43)->value; ?></span>
                            <p><?php echo $text->find($id=44)->value; ?></p>
                        </div>
                    </div>
                    </section><!-- murad -->
                    <section id="products" class="col-md-12 col-xs-12 col-sm-12">
                        <div class="container text-center">
                            <h2>Recent Products</h2>
                            <img src="assets/images/gt2.png" class="line">
                            <!-- PRODUCTS+++++++++++++++=====================  -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="margin">
                                    <div class="row">
                                        <img src="assets/images/p1.jpg" class="product">
                                        <div class="hover"></div>
                                        <button>Add to cart</button>
                                        <div class="desc col-md-12 col-xs-12 col-sm-12">
                                            <h5 class="name pull-left">Ellents Style Grade</h5>
                                            <h5 class="price pull-right">$20.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="margin">
                                    <div class="row">
                                        <img src="assets/images/p2.jpg" class="product">
                                        <div class="hover"></div>
                                        <button>Add to cart</button>
                                        <div class="desc col-md-12 col-xs-12 col-sm-12">
                                            <h5 class="name pull-left">Ellents Style Grade</h5>
                                            <h5 class="price pull-right">$20.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="margin">
                                    <div class="row">
                                        <img src="assets/images/p3.jpg" class="product">
                                        <div class="hover"></div>
                                        <button>Add to cart</button>
                                        <div class="desc col-md-12 col-xs-12 col-sm-12">
                                            <h5 class="name pull-left">Ellents Style Grade</h5>
                                            <h5 class="price pull-right">$20.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="margin">
                                    <div class="row">
                                        <img src="assets/images/p4.jpg" class="product">
                                        <div class="hover"></div>
                                        <button>Add to cart</button>
                                        <div class="desc col-md-12 col-xs-12 col-sm-12">
                                            <h5 class="name pull-left">Ellents Style Grade</h5>
                                            <h5 class="price pull-right">$20.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section><!-- murad -->

                        <img src="assets/images/top.png" title="Go To Top" class="top">

                        @stop