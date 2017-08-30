<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/front/images/logo.svg') }}" style="width: 20px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav font1">
                <li><a href="{{ url('/') }}">მთავარი</a></li>
                <li><a href="{{ url('/blog') }}">ბლოგი</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">გალერეა <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/photos') }}">ფოტო</a></li>
                        <li><a href="{{ url('/videos') }}">ვიდეო</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">შესახებ <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">დავით ნემსაძე</a></li>
                        <li><a href="#">ორგანიზაციის შესახებ</a></li>
                        <li><a href="#">კონტაქტი</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right font1">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">ავტორიზაცია</a></li>
                    <li><a class="bg-default" href="{{ route('register') }}">რეგისტრაცია</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @hasanyrole('administrator|moderator')
                            <li><a href="{{ url('/') }}/app"><i class="icon-dash"></i> მართვის პანელი </a> </li>
                            @else
                                gfhfh
                                @endhasanyrole
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="row" style="margin-right: 0px">
    <div class="col-md-12 main-header">
        <div class="col-md-3 col-xs-12 col-sm-12"><img src="{{ asset('/front/images/logo.svg') }}" alt="" style="width: 100%;"></div>
        <div class="col-md-9 col-xs-12 col-sm-12 font1">
            <h1>საქართველოს შეიარაღებული ძალების</h1>
            <h2>სამოქალაქო კონტროლის ჯგუფი</h2>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12 no-padder" style="background-color: #fff;">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner">
                @foreach($posts as $key => $post)
                    @if($key == 0)
                        <div class="item active">
                            <div class="col-xs-4 no-padder"><a href="{{ url('/') }}/post/{{ $post->id }}"><img src="{{ url('/uploads/posts', $post->image) }}" class="img-responsive" style="width: 500px;height: 300px; overflow: hidden;"></a></div>
                        </div>
                    @endif
                    <div class="item">
                        <div class="col-xs-4 no-padder"><a href="{{ url('/') }}/post/{{ $post->id }}"><img src="{{ url('/uploads/posts', $post->image) }}" class="img-responsive" style="width: 500px;height: 300px;overflow: hidden;"></a></div>
                    </div>
            @endforeach

            <!--  Example item end -->
            </div>
            <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="background-color: #55552f; color: white;">
        <div class="main-content clear get-started">
            <div class="content-wrapper clear pt0 pb0">
                <div class="g12 pt0 pb0">
                    <div class="g9 nest pb30">
                        <h2>Get started with Unity</h2>
                        <h4 class="mb20">There are a wealth of free resources available to help you learn how to develop Unity.</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-md-12 no-padder parallax">
        <div class="caption">
            <span class="border font1">საქართველოს შეიარაღებული ძალები</span>
        </div>
    </div>
</div>






<div class="row">
    <div class="col-md-12" style="background-color: #fff;">
        asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>asdasd<br>
    </div>
</div>

<div class="col-md-12 no-padder">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <div class="logofooter font1">
                        <img src="{{ asset('/front/images/logo.svg') }}" style="width: 50px;">
                        დავით ნემსაძე
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
                    <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>

                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="#"> Career</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                        <li><a href="#"> Terms & Conditions</a></li>
                        <li><a href="#"> Client Gateway</a></li>
                        <li><a href="#"> Ranking</a></li>
                        <li><a href="#"> Case Studies</a></li>
                        <li><a href="#"> Frequently Ask Questions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">LATEST POST</h6>
                    <div class="post">
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                        <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2016 - All Rights with Webenlance</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">webenlance.com</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Site Map</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('front/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/app.js') }}" type="text/javascript"></script>
</body>
</html>