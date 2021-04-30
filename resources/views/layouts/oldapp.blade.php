<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> ইশকুল | @yield('title') </title>
    <link rel="shortcut icon" href="{{asset('public/frontend/img/logo-1.png')}}" />
    <link href="{{asset('public/frontend/assets/A.vendor%2c%2c_bootstrap%2c%2c_css%2c%2c_bootstrap.min.css%2bvendor%2c%2c_font-awesome%2c%2c_css%2c%2c_font-awesome.min.css%2bvendor%2c%2c_magnific-popup%2c%2c_magnific-popup.css%2bcss%2c%2c_creative.css%2bcss%2c%2c_animate.css%2bcs')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/log.css')}}">
    <style>
        .rangkongbesar img {
            width: 300px !important;
            height: 300px !important
        }
    </style>
</head>

<body id="page-top">
    <div id="loader-box">
        <div id="preloader">
            <img class="logonya" src="{{asset('public/frontend/img/logo-1.png')}}" alt="" width="200" height="183">
            <img class="loadingnya" src="{{asset('public/frontend/assets/img/4241025c-854e-4027-80b7-811b6a459263.svg')}}" alt="">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"
        style="padding-top: 15px; background-color: #e8e8e8;">
        <div class="container"
            style="position: relative; margin-top:-10px;height: 50px;padding-top: 15px; background-color: #e8e8e8;">
            <div class="language">
                <ul>
                    <li><a href="{{route('login')}}" style="color: black; text-decoration: none;"><img id="toplogo" src="{{asset('public/frontend/img/login_circle-512.webp')}}" /> &nbsp; <span
                            id="logowrite">সাইন ইন</span></a></li>
                    <li>
                        <!---search-->
                        <a href="#" style="text-decoration:none ; color: whitesmoke; ">
                            <!-- Trigger/Open The Modal -->
                            <button style="background: none; border: none;" id="myBtn">
                                <img id="toplogo" src="{{asset('public/frontend/img/search icon.png')}}" />
                        </a>
                        &nbsp; <span id="logowrite">অনুসন্ধান</span> </button>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div id="modlcon" class="modal-content">
                                <div class="row" style="padding: 15px;">
                                    <div class="col-md-9">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder=" এখানে লিখুন.....">
                                                <div class="input-group-btn">
                                                    <button style="border: 1px solid rgb(141, 136, 136);"
                                                        class="btn btn" type="submit">
                                                        <i class="glyphicon glyphicon-search"> অনুসন্ধান করুন</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="close">&times;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get the button that opens the modal
                            var btn = document.getElementById("myBtn");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks the button, open the modal 
                            btn.onclick = function () {
                                modal.style.display = "block";
                            }

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function () {
                                modal.style.display = "none";
                            }

                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function (event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                        </a>
                        <!---search-->
                    </li>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="{{URL::to('/')}}">
                    <img style="padding: 10px; margin-top: -25px;" src="{{asset('public/frontend/img/logo-1.png')}}" width="120" height="63" />
                </a>
            </div>
            <div style="margin-top: 15px;" class="js-menu-trigger hamburger__container">
                <span class="hamburger__title main-menu__heading">সূচী</span>
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <div class="navigation">
        <div class="main-menu">
            <span class="main-menu__background main-menu__background--dark js-menu-background-dark"></span>
            <span class="main-menu__background main-menu__background--light js-menu-background-light"></span>
            <div class="navigate">
                <ul>
                    @php
                        use App\Models\Category;

                        $parents = Category::where('parent_id', 0)->select('id', 'name')->get();

                    @endphp

                    @foreach ($parents as $parent)
                        @php
                            
                            $chileds = Category::where('parent_id', $parent->id)->select('id', 'name')->get();
                        @endphp

                    @if ($chileds->isEmpty())
                    <li>
                        <a href="{{route('blogs', [$parent->id, strtolower(str_replace(' ', '-', $parent->name))])}}"> {{$parent->name}} </a>
                    </li>
                    @else
                    <li>
                        <div class="level0">
                            <span class="main-menu__link main-menu__link--level-0"><a
                                    href="{{route('blogs', [$parent->id, strtolower(str_replace(' ', '-', $parent->name))])}}">{{$parent->name}}</a></span>
                        </div>
                        <ul class="submenu">
                            @foreach ($chileds as $chiled)
                                <li><a href="{{route('blogs', [$chiled->id, strtolower(str_replace(' ', '-', $chiled->name))])}}">{{$chiled->name}}</a></li>
                            @endforeach   
                        </ul>
                    </li>
                    @endif
                    @endforeach
                    <li>
                        <a class="" href="#">ছবি গ্যালারী </a>
                    </li>
                    <li>
                        <a class="" href="#">ভিডিও গ্যালারী </a>
                    </li>
                    <li>
                        <a class="" href="#">ই-গ্রন্থ কেন্দ্র </a>
                    </li>
                    <li>
                        <a class="" href="#">সম্পাদকীয়</a>
                    </li>
                    <li>
                        <a class="" href="#">যোগাযোগ </a>
                    </li>
                    <li>
                        <a class="" href="#"> অনুদান </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!----------Maim Contain------------->
        @section('frontend-content')
            
        @show
    <!----------Maim Contain------------->

    <!---------------Footer--------------->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="menufooter">
                        <li><a href="tentang-kami.html"> অনুদান </a></li>
                        <li><a href="tentang-kami.html"> সম্পাদকীয়</a></li>
                        <li><a href="laporan-tahunan.html">কিশোর জিজ্ঞাসা</a></li>
                        <li><a href="newsletter.html">পর্যালোচনা</a></li>
                        <li><a href="faq.html">যোগাযোগ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="menusocmed">
                        <li><a target="_blank" href="https://www.facebook.com/rangkongid"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://instagram.com/rangkongid/"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/rangkongid"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <p style="margin: 0px;">সম্পাদক</p>
                    <p><b>প্রিতম ফকির</b></p>
                    <p>
                        বাংলাদেশ ছাত্র ইউনিয়নের জাতীয় স্কুল সংগঠন <a href="./index.html"><img src="{{asset('public/frontend/img/logo-1.png')}}"
                                width="80px" height="20px" alt=""></a> এর মুখপত্র
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">ishkul.org &copy; All Rights Reserved</div>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <div class="copyright">Design & Developed by &copy; <a href="https://www.ictbanglabd.com/contact">ICT Bangla BD</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!---------------Footer--------------->
    <!---------------Footer--------------->
    <!---------------Footer--------------->
    <script src="{{asset('public/frontend/assets/vendor/jquery/jquery.min.js.pagespeed.jm.r0B4QCxeCQ.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendor/bootstrap%2c_js%2c_bootstrap.bundle.min.js%2bjquery-easing%2c_jquery.easing.min.js%2bscrollreveal%2c_scrollreveal.min.js.pagespeed.jc.i6VUHp1JLc.js')}}"></script>
    <script>eval(mod_pagespeed_yFLV$P04nh);</script>
    <script>eval(mod_pagespeed_dczxA7NnjJ);</script>
    <script>eval(mod_pagespeed_eXE_CIztzF);</script>
    <script src="{{asset('public/frontend/assets/vendor%2c_magnific-popup%2c_jquery.magnific-popup.min.js%2bjs%2c_creative.min.js.pagespeed.jc.yNryeyhBhf.js')}}"></script>
    <script>eval(mod_pagespeed_9l0S$qnVJ5);</script>
    <script>eval(mod_pagespeed_McC665yAAR);</script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>$(window).on("load", function (e) { $("#loader-box").fadeOut("slow"); $(".navigate").hide(); })
        var lastScrollTop = 0; $(window).scroll(function () { var st = $(this).scrollTop(); if (st > lastScrollTop) { $(".image1 img").css("margin-top", "20px"); $(".image2 img").css("margin-top", "-20px"); $(".image3 img").css("margin-top", "-20px"); $(".image4 img").css("margin-bottom", "-20px"); $(".image5 img").css("margin-bottom", "-20px"); $(".image6 img").css("margin-bottom", "20px"); $(".image7 img").css("margin-bottom", "20px"); } else { $(".image1 img").css("margin-top", "-20px"); $(".image2 img").css("margin-top", "20px"); $(".image3 img").css("margin-top", "20px"); $(".image4 img").css("margin-bottom", "20px"); $(".image5 img").css("margin-bottom", "20px"); $(".image6 img").css("margin-bottom", "-20px"); $(".image7 img").css("margin-bottom", "-20px"); } lastScrollTop = st; }); var resizeId; $(window).resize(function () { clearTimeout(resizeId); resizeId = setTimeout(doneResizing, 500); }); function doneResizing() { var heightlayar = $(window).height(); var widthlayar = $(window).width(); if (widthlayar < 991) { heightlayar = heightlayar - 150; $(".navigate").css("height", "auto"); $(".navigate").css("overflow", "scroll"); } } $(document).ready(function () { $(this).scrollTop(0); var heightlayar = $(window).height(); var widthlayar = $(window).width(); setTimeout(function () { bottomnya() }, 1000); setTimeout(function () { bottomnya1() }, 2000); $(".js-menu-trigger").click(function () { if ($(".hamburger--squeeze").hasClass("is-active")) { $(".hamburger--squeeze").removeClass("is-active"); $(".main-menu__heading").removeClass("is-active"); $(".main-menu__background--dark").css("width", "0%"); $(".main-menu__background--light").css("width", "0%"); $(".main-menu").removeClass("open"); $(".navigate ul li span.main-menu__link").removeClass("garislurus"); if (widthlayar > 991) { $("ul.submenu").hide(); } hideMenu(); $("body").removeAttr("style"); } else { $(".main-menu__background--dark").css("width", "100%"); $(".main-menu__background--light").css("width", "100%"); setTimeout(function () { showMenu() }, 500); $(".hamburger--squeeze").addClass("is-active"); $(".main-menu__heading").addClass("is-active"); $(".main-menu").addClass("open"); $("body").css("overflow", "hidden"); } }); if (widthlayar > 991) { $(".navigate ul li span.main-menu__link").hover(function () { $(".navigate ul li span.main-menu__link").removeClass("garislurus"); $("ul.submenu").hide(); $(this).parent().next().show(); $(this).addClass("garislurus"); $(".main-menu__background--dark").css("width", "50%"); }); } else { heightlayar = heightlayar - 150; $(".navigate").height(heightlayar); $(".navigate").css("overflow", "scroll"); } $(".scrolldown").click(function () { $('html, body').animate({ scrollTop: $("#petani").offset().top }, 2000); }); }); function showMenu() { $(".navigate").show(); } function hideMenu() { $(".navigate").hide(); } function bottomnya() { setTimeout(function () { topnya() }, 1000); } function topnya() { setTimeout(function () { bottomnya() }, 1000); } function bottomnya1() { $(".rangkongkecil img").addClass("gotop"); $(".rangkongkecil img").removeClass("gobottom"); $(".rangkongkecil2 img").addClass("gotop"); $(".rangkongkecil2 img").removeClass("gobottom"); $(".rangkongbesar img").addClass("gotop"); $(".rangkongbesar img").removeClass("gobottom"); setTimeout(function () { topnya1() }, 2000); } function topnya1() { $(".rangkongkecil img").addClass("gobottom"); $(".rangkongkecil img").removeClass("gotop"); $(".rangkongkecil2 img").addClass("gobottom"); $(".rangkongkecil2 img").removeClass("gotop"); $(".rangkongbesar img").addClass("gobottom"); $(".rangkongbesar img").removeClass("gotop"); setTimeout(function () { bottomnya1() }, 2000); } $(document).ready(function () { }); (function ($) { jQuery.scrollSpeed = function (step, speed, easing) { var $document = $(document), $window = $(window), $body = $('html, body'), option = easing || 'default', root = 0, scroll = false, scrollY, scrollX, view; if (window.navigator.msPointerEnabled) return false; $window.on('mousewheel DOMMouseScroll', function (e) { var deltaY = e.originalEvent.wheelDeltaY, detail = e.originalEvent.detail; scrollY = $document.height() > $window.height(); scrollX = $document.width() > $window.width(); scroll = true; if (scrollY) { view = $window.height(); if (deltaY < 0 || detail > 0) root = (root + view) >= $document.height() ? root : root += step; if (deltaY > 0 || detail < 0) root = root <= 0 ? 0 : root -= step; $body.stop().animate({ scrollTop: root }, speed, option, function () { scroll = false; }); } if (scrollX) { view = $window.width(); if (deltaY < 0 || detail > 0) root = (root + view) >= $document.width() ? root : root += step; if (deltaY > 0 || detail < 0) root = root <= 0 ? 0 : root -= step; $body.stop().animate({ scrollLeft: root }, speed, option, function () { scroll = false; }); } return false; }).on('scroll', function () { if (scrollY && !scroll) root = $window.scrollTop(); if (scrollX && !scroll) root = $window.scrollLeft(); }).on('resize', function () { if (scrollY && !scroll) view = $window.height(); if (scrollX && !scroll) view = $window.width(); }); }; jQuery.easing.default = function (x, t, b, c, d) { return -c * ((t = t / d - 1) * t * t * t - 1) + b; }; })(jQuery);
    </script>

    

    @section('footer')
        
    @show
</body>

</html>