<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="_nK">
    <title>P4Game</title>
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap-rtl.min.css')}}">

    <!-- FontAwesome -->
    <script defer src="{{asset("assets/vendor/fontawesome-free/js/all.js")}}"></script>
    <script defer src="{{asset("assets/vendor/fontawesome-free/js/v4-shims.js")}}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/revolution/css/navigation.css')}}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{asset('assets/vendor/flickity/dist/flickity.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Photoswipe -->
    <link rel="stylesheet" href="{{asset('assets/vendor/photoswipe/dist/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css')}}">

    <!-- DateTimePicker -->
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.min.css')}}">

    <!-- Summernote -->
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote-bs4.css')}}">

    <!-- GODLIKE -->
    <link rel="stylesheet" href="{{asset('assets/css/godlike.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>

    <!-- END: Styles -->

    <!-- jQuery -->
    <style>
        body{
            background-image: url({{asset('image/image/back1.jpg')}});
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            backface-visibility: inherit;
        }
    </style>

</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
<!-- START: Page Preloader -->
<div class="nk-preloader">
    <!--
         Preloader animation
         data-close-... data used for closing preloader
         data-open-...  data used for opening preloader
    -->
    <div class="nk-preloader-bg"
         style="background-image: url(image/image/back1.jpg)"
         data-close-frames="23"
         data-close-speed="1.2"
         data-close-sprites="{{asset('./assets/images/preloader-bg.png')}}"
         data-open-frames="23"
         data-open-speed="1.2"
         data-open-sprites="{{asset('./assets/images/preloader-bg-bw.png')}}">
    </div>

    <div class="nk-preloader-content">
        <div>
            <img class="nk-img" src="{{asset('assets/images/logo.svg')}}" alt="GodLike - Gaming Bootstrap 4 Template" width="170">
            <div class="nk-preloader-animation"></div>
        </div>
    </div>

    <div class="nk-preloader-skip">خروج</div>
{{--    ارور--}}
</div>
<!-- END: Page Preloader -->
*
<!--
START: Page Video Background

Additional Attributes:
data-video - Youtube/Vimeo/self-hosted video urls.
    self-hosted video example:
    data-video="mp4:./video/local-video.mp4,webm:./video/local-video.webm,ogv:./video/local-video.ogv"
data-video-loop - loop video (true/false)
data-video-mute - mute video music (true/false)
data-video-volume - volume of video music (0-100)
data-video-start-time - video start time in seconds
data-video-end-time - video end time in seconds
data-video-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<!-- END: Page Background -->

<!--
    START: Page Audio Background

    Additional Attributes:
        data-audio - URL to audio file
        data-audio-volume - audio volume (0-100)
        data-audio-autoplay - autoplay audio (true/false)
        data-audio-loop - loop audio (true/false)
        data-audio-pause-on-page-leave - pause video when the page not in focus (true/false)
-->
<!-- END: Page Background -->



<!-- START: Page Border -->

<div class="nk-page-border">
    <div class="nk-page-border-t"></div>
    <div class="nk-page-border-r"></div>
    <div class="nk-page-border-b"></div>
    <div class="nk-page-border-l"></div>
</div>
<!-- END: Page Border -->







<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">



    <!--
        START: Top Contacts

        Additional Classes:
            .nk-contacts-top-light
    -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li><a href="page-contact.html">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="nk-contacts-right">
                <div class="nk-navbar">
                    <ul class="nk-nav">
                        <li><a href="https://twitter.com/nkdevv" target="_blank"><span class="ion-social-twitter"></span></a></li>
                        <li><a href="https://dribbble.com/_nK" target="_blank"><span class="ion-social-dribbble-outline"></span></a></li>
                        <li><a href="#"><span class="ion-social-instagram-outline"></span></a></li>
                        <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->



    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
            .nk-navbar-light
            .nk-navbar-no-link-effect
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="{{route('home')}}" class="nk-nav-logo">
                    <img src="{{asset('assets/images/logo1.png')}}" alt="" width="90">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="active  nk-drop-item">
                        <a href="{{route('home')}}">
                            صفحه‌ی‌اصلی</a>
                    </li>
                    <li class="  nk-drop-item">
                        <a href="{{route('newsList')}}">
                            اخبار</a>

                    </li>
                    <li class="  nk-drop-item">
                        <a href="{{route('ticket')}}">خرید تیکت</a>
                    </li>

                    <li class="  nk-drop-item">
                        <a href="store.html">راهنمای شروع مسابقه </a>
                        <ul class="dropdown">
                            <li class="  ">
                                <a href="store.html">گام اول:</a>
                            </li>
                            <li class="  ">
                                <a href="store-product.html">گام دوم:</a>
                            </li>
                            <li class="  ">
                                <a href="store-cart.html">گام سوم:</a>
                            </li>
                        </ul>
                    </li>

                    @php
                        $cats = \App\EventCat::where('parent_id',null)->get();
                    @endphp

                    <li class="  nk-drop-item">
                    <li class=" nk-mega-item nk-drop-item">
                        <a href="#">مسابقات</a>
                        <div class="dropdown">
                            <div class="bg-image">
                                <img src="assets/images/resolt1.jpeg" alt="" class="jarallax-img">
                            </div>
                            <ul>
                                @foreach($cats as $cat)
                                    <li>
                                        <h4 class="text-center">{{$cat->name}}</h4>
                                        <ul>
                                            @if($cat->children()->count() > 0)
                                                @foreach($cat->children()->get() as $child)

                                                     <li class="text-justify">
                                                        <a href="{{ route('GameList',$child)}}">{{$child->name}}</a>
                                                    </li>

                                                @endforeach

                                            @endif
                                        </ul>

                                    </li>
                                @endforeach



                            </ul>
                        </div>
                    </li>
                    @Auth
                        <li>

                         <a href="{{route('activeGame',Auth::user()->id)}}">مسابقات جاری شما</a>

                        </li>

                    @endauth
                </ul>

                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                        </a>
                    </li>

                    @Auth
                    <li class="single-icon">
                        <a href="{{route('profile',Auth::user()->id)}}" class="">
                            <span class="fa fa-user"></span>
                        </a>
                    </li>
                    @endauth

                    @Auth
                    <li class="single-icon">
                        <a href="#" class="nk-cart-toggle no-link-effect">
                            <span class="nk-icon-toggle">
                                <span class="nk-icon-toggle-front">

                                    <span class="fa fa-dollar-sign"></span>
                                    <span class="nk-badge">{{Auth::user()->tickets}}</span>

                                </span>
                                <span class="nk-icon-toggle-back">
                                    <span class="nk-icon-close"></span>
                                </span>
                            </span>

                        </a>
                    </li>
                    @endauth


                    <li class="single-icon">
                        <a href="#" class="nk-sign-toggle no-link-effect">
                            <span class="nk-icon-toggle">
                                <span class="nk-icon-toggle-front">
                                    @Auth
                                    <span class="fa fa-sign-in"></span>
                                     @else
                                        <span class="fa fa-sign-out"></span>
                                    @endauth
                                </span>
                                <span class="nk-icon-toggle-back">
                                    <span class="nk-icon-close"></span>
                                </span>
                            </span>
                        </a>
                    </li>



                    <li class="single-icon">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>








<!--
    START: Right Navbar

    Additional Classes:
        .nk-navbar-right-side
        .nk-navbar-left-side
        .nk-navbar-lg
        .nk-navbar-align-center
        .nk-navbar-align-right
        .nk-navbar-overlay-content
        .nk-navbar-light
        .nk-navbar-no-link-effect
-->

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

    <div class="nk-navbar-bg">
        <div class="bg-image">
{{--            <img src="assets/images/resolt1.jpeg" alt="" class="jarallax-img">--}}
{{--            گوشه--}}
        </div>
    </div>


    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="" width="150">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="page-contact.html">
                                Contact</a>
                        </li><li class=" ">
                            <a href="page-coming-soon.html">
                                Coming Soon</a>
                        </li><li class=" ">
                            <a href="page-404.html">
                                404</a>
                        </li><li class=" ">
                            <a href="page-age-check.html">
                                Age Check</a>
                        </li><li class=" nk-drop-item">
                            <a href="#">
                                Sub Menu Example</a><ul class="dropdown">
                                <li class=" ">
                                    <a href="#1">
                                        Sub Item 1</a>
                                </li><li class=" nk-drop-item">
                                    <a href="#2">
                                        Sub Item 2</a><ul class="dropdown">
                                        <li class=" ">
                                            <a href="#1">
                                                Sub Item 1</a>
                                        </li><li class=" ">
                                            <a href="#2">
                                                Sub Item 2</a>
                                        </li>
                                    </ul>
                                </li><li class=" nk-drop-item">
                                    <a href="#3">
                                        Sub Item 3</a><ul class="dropdown">
                                        <li class=" ">
                                            <a href="#">
                                                Sub Item</a>
                                        </li>
                                    </ul>
                                </li><li class=" nk-drop-item">
                                    <a href="#4">
                                        Sub Item 4</a><ul class="dropdown">
                                        <li class=" ">
                                            <a href="#">
                                                Sub Item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nk-nav-row">
                    <div class="nk-nav-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Right Navbar -->



<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
.nk-navbar-light
.nk-navbar-no-link-effect
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{route('home')}}" class="nk-nav-logo">
                <img src="{{asset('assets/images/logo.svg')}}" alt="" width="90">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->



<div class="nk-main">


    <!-- START: Header Title -->
    <!--
        Additional Classes:
            .nk-header-title-sm
            .nk-header-title-md
            .nk-header-title-lg
            .nk-header-title-xl
            .nk-header-title-full
            .nk-header-title-parallax
            .nk-header-title-parallax-opacity
            .nk-header-title-boxed
    -->
    <!-- END: Header Title -->


@yield('content')


    <!-- START: Footer -->
    <!--
        Additional Classes:
            .nk-footer-parallax
            .nk-footer-parallax-opacity
    -->
    <footer class="nk-footer nk-footer-parallax nk-footer-parallax-opacity">
        <img class="nk-footer-top-corner" src="{{asset('assets/images/footer-corner.png')}}" alt="">



        <div class="container">
            <div class="nk-gap-2"></div>
            <div class="nk-footer-logos">
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{asset('assets/images/footer-logo-godlike.png')}}" alt="" width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{asset('assets/images/footer-logo-yp3.png')}}" alt="" width="120"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{asset('assets/images/footer-logo-nk-team.png')}}" alt="" width="150"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{asset('assets/images/footer-logo-pegi-18.png')}}" alt="" width="46"></a>
                <a href="https://themeforest.net/user/_nk/portfolio?ref=_nK" target="_blank"><img class="nk-img" src="{{asset('assets/images/footer-logo-18-restricted.png')}}" alt="" width="160"></a>
            </div>
            <div class="nk-gap"></div>

            <p>
                &copy; 2018 nK Group Inc. Developed in association with LoremInc. IpsumCompany, SitAmmetGroup, CumSit and related logos are registered trademarks. GodLike and related logos are registered trademarks or trademarks of id Software LLC in the U.S. and/or other countries. All other trademarks or trade names are the property of their respective owners. All Rights Reserved.
            </p>
            <p>
                GodLike &reg;: The Darkness&trade; is a fowl beginning there Over had moveth so land wherein, fruit very gathering of, female creepeth. Dominion above sea gathered unto whales. Subdue to, have Life fowl firmament wherein. Great air without for, great him he That let earth together thing sea fly gathering. Air whose. Green in face tree to spirit life. Place stars. It two. Deep seed man isn't third. Own he is may had darkness waters you'll forth fifth their don't also fruitful be years in spirit to tree. Sixth fourth open female.
            </p>

            <div class="nk-footer-links">
                <a href="#" class="link-effect">Terms of Service</a> <span>|</span> <a href="#" class="link-effect">Privacy Policy</a>
            </div>

            <div class="nk-gap-4"></div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>



<!--
START: Share Buttons
    .nk-share-buttons-left
-->
<div class="nk-share-buttons nk-share-buttons-left d-none d-md-flex">
    <ul>
        <li>
            <span class="nk-share-icon" title="Share page on Facebook" data-share="facebook">
                <span class="icon fa fa-facebook"></span>
            </span>
            <span class="nk-share-name">Facebook</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Twitter" data-share="twitter">
                <span class="icon fa fa-twitter"></span>
            </span>
            <span class="nk-share-name">Twitter</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on Google+" data-share="google-plus">
                <span class="icon fa fa-google-plus"></span>
            </span>
            <span class="nk-share-name">Google Plus</span>
        </li>
        <!--
        <li>
            <span class="nk-share-icon" title="Share page on Pinterest" data-share="pinterest">
                <span class="icon fa fa-pinterest"></span>
            </span>
            <span class="nk-share-name">Pinterest</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on LinkedIn" data-share="linkedin">
                <span class="icon fa fa-linkedin"></span>
            </span>
            <span class="nk-share-name">LinkedIn</span>
        </li>
        <li>
            <span class="nk-share-icon" title="Share page on VK" data-share="vk">
                <span class="icon fa fa-vk"></span>
            </span>
            <span class="nk-share-name">Vkontakte</span>
        </li>
        -->
    </ul>
</div>


<!--
START: Side Buttons
    .nk-side-buttons-visible
-->
<div class="nk-side-buttons nk-side-buttons-visible">
    <ul>
        <li>
            <a href="https://nkdev.info" target="_blank" class="nk-btn nk-btn-lg link-effect-4">Keep in Touch</a>
        </li>
        <li>
            <span class="nk-btn nk-btn-lg nk-btn-icon nk-bg-audio-toggle">
                <span class="icon">
                    <span class="ion-android-volume-up nk-bg-audio-pause-icon"></span>
                    <span class="ion-android-volume-off nk-bg-audio-play-icon"></span>
                </span>
            </span>
        </li>
        <li class="nk-scroll-top">
            <span class="nk-btn nk-btn-lg nk-btn-icon">
                <span class="icon ion-ios-arrow-up"></span>
            </span>
        </li>
    </ul>
</div>
<!-- END: Side Buttons -->



<!--
START: Search

Additional Classes:
.nk-search-light
-->
<div class="nk-search">
    <div class="container">
        <form action="#">
            <fieldset class="form-group nk-search-field">
                <input type="text" class="form-control" id="searchInput" placeholder="Search..." name="s">
                <label for="searchInput"><i class="ion-ios-search"></i></label>
            </fieldset>
        </form>
    </div>
</div>
<!-- END: Search -->




<!--
START: Shopping Cart

Additional Classes:
.nk-cart-light
-->
<div class="nk-cart">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="nk-store nk-store-cart">
            <div class="table-responsive">
                <table class="table nk-store-cart-products">
                    <tbody>



                    </tbody>
                </table>
            </div>

            <div class="nk-gap-2"></div>
        @if(Auth::check())
            <div class="nk-cart-total">
                تیکت ها <span>{{Auth::user()->tickets}}</span>
            </div>
            @endif

            <div class="nk-gap-3"></div>
            <div class="nk-cart-btns">
                <a href="{{route('ticket')}}" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                    خرید تیکت
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('cellTicket')}}" class="nk-btn nk-btn-lg link-effect-4 nk-cart-toggle">
                    فروش تیکت
                </a>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
<!-- END: Shopping Cart -->




<!--
START: Sign Form

Additional Classes:
.nk-sign-form-light
-->
@if(!Auth::check())

<div class="nk-sign-form">
    <div class="nk-gap-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3">
                <div class="nk-sign-form-container">
                    <div class="nk-sign-form-toggle h3">
                        <a href="#" class="nk-sign-form-login-toggle active">ورود</a>
                        <a href="#" class="nk-sign-form-register-toggle">ثبت‌ نام</a>
                    </div>

                        @include('errors')
                    <div class="nk-gap-2"></div>

                    <!-- START: Login Form -->
                    <form class="nk-sign-form-login active" action="{{route('login')}}" method="post">
                        @csrf
                        <input class="form-control" type="text" value="{{old('email')}}" name="email" placeholder="ایمیل">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" name="password" placeholder="رمز عبور">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">ورود</button>

                        <div class="clearfix"></div>
                        <div class="nk-gap-1"></div>
                        <a class="nk-sign-form-lost-toggle float-right" href="#">Lost Password?</a>
                    </form>
                    <!-- END: Login Form -->

                    <!-- START: Lost Password Form -->
                    <form class="nk-sign-form-lost" action="#">
                        <input class="form-control" type="text" placeholder="Username or Email">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">Get New Password</button>
                    </form>
                    <!-- END: Lost Password Form -->

                    <!-- START: Register Form -->
                    <form class="nk-sign-form-register" action="{{route('register')}}" method="post">
                        @csrf
                        <input class="form-control" value="{{old('name')}}" type="text" name="name" placeholder="نام کاربری">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" value="{{old('email')}}" type="email" name="email" placeholder="ایمیل">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" name="password" placeholder="رمز عبور">
                        <div class="nk-gap-2"></div>

                        <input class="form-control" type="password" name="password_confirmation" placeholder="تکرار رمز عبور">
                        <div class="nk-gap-2"></div>

                        <button class="nk-btn nk-btn-color-white link-effect-4 float-right">ثبت نام</button>
                    </form>
                    <!-- END: Register Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>

@else
    <div class="nk-sign-form">
        <div class="nk-gap-5"></div>
        <div class="container">
            <div class="row">
                <form action="{{route('logout')}}" method="post">
                    {{csrf_field()}}
                    <button class="btn btn-dark">خروج</button>
                </form>
            </div>
        </div>
    </div>


@endif
<!-- END: Sign Form -->

<script src="{{asset('assets/js/ajax.js')}}"></script>


<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="{{asset('assets/vendor/object-fit-images/dist/ofi.min.js')}}"></script>

<!-- GSAP -->
<script src="{{asset('assets/vendor/gsap/src/minified/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js')}}"></script>

<!-- Popper -->
<script src="{{asset('assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Sticky Kit -->
<script src="{{asset('assets/vendor/sticky-kit/dist/sticky-kit.min.js')}}"></script>

<!-- Jarallax -->
<script src="{{asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendor/jarallax/dist/jarallax-video.min.js')}}"></script>

<!-- imagesLoaded -->
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>

<!-- Flickity -->
<script src="{{asset('assets/vendor/flickity/dist/flickity.pkgd.min.js')}}"></script>

<!-- Isotope -->
<script src="{{asset('assets/vendor/isotope-layout/dist/isotope.pkgd.min.js')}}"></script>

<!-- Photoswipe -->
<script src="{{asset('assets/vendor/photoswipe/dist/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js')}}"></script>

<!-- Typed.js -->
<script src="{{asset('assets/vendor/typed.js/lib/typed.min.js')}}"></script>

<!-- Jquery Validation -->
<script src="{{asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{asset('assets/vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/vendor/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js')}}"></script>

<!-- Hammer.js -->
<script src="{{asset('assets/vendor/hammerjs/hammer.min.js')}}"></script>

<!-- NanoSroller -->
<script src="{{asset('assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js')}}"></script>

<!-- SoundManager2 -->
<script src="{{asset('assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js')}}"></script>

<!-- DateTimePicker -->
<script src="{{asset('assets/vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{asset('assets/vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<!-- Keymaster -->
<script src="{{asset('assets/vendor/keymaster/keymaster.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('assets/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>
<!-- GODLIKE -->
<script src="{{asset('assets/js/godlike.min.js')}}"></script>
<script src="{{asset('assets/js/godlike-init.js')}}"></script>
<!-- END: Scripts -->



<script type="text/javascript">
    var tpj=jQuery;
    var revapi50;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_50_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_50_1");
        }else{
            revapi50 = tpj("#rev_slider_50_1").show().revolution({
                sliderType:"carousel",
                jsFileLocation:"{{asset('assets/vendor/revolution/js/')}}",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    onHoverStop:"off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -90,
                    stretch: "off"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[800,600,400,320],
                gridheight:[600,400,320,280],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"on",
                stopAfterLoops:0,
                stopAtSlide:0,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>
