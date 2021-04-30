@extends('layouts.app')

@section('title', 'Blog Detail')
@section('frontend-content')
    <!----------Maim Contain------------->
    <section id="bannerprofil2">
        <img class="banner" src="{{asset('public/frontend/uploads/pages/x20181023190422_6_tentang_enggang.png.pagespeed.ic.PwHwqf0ju3.png')}}" width="1393" height="650" />
        <div class="scrolldown">
            <div class="titlescrolldown">নিচে নামুন</div>
            <div class="imagescrolldown"><img src="{{asset('public/frontend/assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png')}}" width="18" height="28" /></div>
        </div>
    </section>
    <!-- **********dtl******** -->
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-9" style="text-align: justify;">
                <h2>{{$blog->title}}</h2>
                <p>{{$blog->user}}</p>
                <p><small><i>{{date('d M, Y h:i A', strtotime($blog->created_at))}}</i></small></p>
                <img src="{{asset($blog->photo)}}" width="100%" height="400px" alt="">
                <br/><br/>
                
                {!! $blog->detail !!}
                <b>শেয়ার করুনঃ</b>
                <br>
                <a href="#">
                    <img src="{{asset('public/frontend/img/fb.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/twter.jpg')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/g+.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/g2.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/li.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/mail.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <a href="#">
                    <img src="{{asset('public/frontend/img/rd.png')}}" alt="" width="35px" height="35px"
                        style="border-radius: 50%;height: 35px; width: 35px;">
                </a>
                <br><br>
            </div>
            <div class="col-md-3">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-color: #0a0f43;">
                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Related Blogs</a>
                        {{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> --}}
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach ($blogs as $item)
                                
                            <div class="col-md-12" style="margin-top: 10px;">
                                <a href="{{route('blog', $blog->slug)}}" style="text-decoration: none; color: black; text-align: justify; ">
                                    <div class="card">
                                        <img src="{{asset($item->photo)}}" style="height: 200px;" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h2 style="font-size: 18px;">{{Str::limit($item->title, 50)}}</h2>
                                        <p>
                                            {!! Str::limit($item->detail, 200) !!}
                                            <a href="{{route('blog', $item->slug)}}">read more</a>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>1.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>2.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>3.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>4.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>5.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>1.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>2.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>3.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>4.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                        <a href="#" style="text-decoration: none;text-align: justify; margin-top: 10px; ">
                            <h2 style="margin-top: 25px; font-size: 18px;">
                                <span><i>5.</i></span>
                                <span><img src="img/bob 2.jpg" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                        <hr>
                    </div> --}}
                </div>
                <img src="{{asset('public/frontend/img/add.gif')}}" width="100%" style="width: 100%; padding-top: 10px; " alt="">
            </div>
        </div>
    </div>
    <!-- **********dtl End********* -->
    <!----------Maim Contain------------->
    <!----------Maim Contain------------->
    <!----------Maim Contain------------->
@endsection