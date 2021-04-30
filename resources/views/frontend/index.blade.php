@extends('layouts.app')

@section('title', 'Home')
@section('frontend-content')
    <header class="masthead text-center text-white d-flex">
        <div class="image1"><img src="{{asset('public/frontend/assets/img/xhutan1.png.pagespeed.ic.Xicz5vc3Rz.png')}}" width="1361" height="514" />
        </div>
        <div class="image2"><img src="{{asset('public/frontend/assets/img/ximage2.png.pagespeed.ic.eBbxPHn0nk.png')}}" width="354" height="370" />
        </div>
        <div class="image3"><img src="{{asset('public/frontend/assets/img/xhutan3.png.pagespeed.ic.azFYiUmp9F.png')}}" width="449" height="318" />
        </div>
        <div class="image4"><img src="{{asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png')}}" width="225" height="148" />
        </div>
        <div class="image5"><img src="{{asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png')}}" width="167" height="185" />
        </div>
        <div class="image8"><img src="{{asset('public/frontend/assets/img/xgarisbelokbelok.png.pagespeed.ic.sORw3v3t9x.png')}}" width="1392"
                height="439" /></div>
        <div style="width: 300px !important; height: 300px !important;" class="rangkongbesar">
            <img src="{{asset('public/frontend/assets/img/rangkong-terbang.gif.pagespeed.ce.cUdqGRUcE6.gif')}}" width="2480" height="2480" />
        </div>
        <div class="container my-auto">
            <div class="row">
                <div class="hashtag">
                    <img src="{{asset('public/frontend/img/logo-1.png')}}" width="746" height="auto" />
                </div>
            </div>
        </div>
        <div class="scrolldown">
            <div class="titlescrolldown">নিচে নামুন</div>
            <div class="imagescrolldown"><img src="{{asset('public/frontend/assets/img/xscrolldown.png.pagespeed.ic.ErxMf_Pswa.png')}}" width="18" height="28" /></div>
        </div>
    </header>
    
    <section id="petani" style="position: relative; overflow: hidden">
        <div class="image1"><img src="{{asset('public/frontend/assets/img/xhutan1.png.pagespeed.ic.Xicz5vc3Rz.png')}}" width="1361" height="514" />
        </div>
        <div class="image6"><img src="{{asset('public/frontend/assets/img/xhutanbottomleft.png.pagespeed.ic.VNr7wS5BEN.png')}}" width="443"
                height="276" /></div>
        <div class="image7"><img src="{{asset('public/frontend/assets/img/xhutanbottomright.png.pagespeed.ic.OOfnZnE9m2.png')}}" width="1043"
                height="411" /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="headerpetani">
                        <div class="titlepetani">{{$blogs[0]->title}}</div>
                        <div class="subtitlepetani">{{$blogs[0]->user}}</div>
                    </div>
                    {!! Str::limit($blogs[0]->detail, 1000) !!}
                </div>
                <div class="col-lg-5 mx-auto">
                    <div class="burungpetani"><img src="{{asset('public/frontend/uploads/sangpetani/x20181008015017_burunghome.png.pagespeed.ic.G9WHeT8XJ8.png')}}"
                            width="467" height="707" /></div>
                </div>
            </div>
            <div class="selengkapnya" style="margin-top: -214px;margin-bottom:60px;"><a href="{{route('blog', $blogs[0]->slug)}}">আরো
                    পড়ুন</a>
            </div>
        </div>
    </section>
    <!----------Slider------------>
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4 id="sldhed" style=" padding: 15px;">আমরাতো মিলেছি পৃথিবীর লাঞ্ছিত সংগ্রামী মানুষের
                                    কাফেলায়
                                </h4>
                                <p id="slddtl">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
                                    <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.
                                </p>
                                <a href="#">বিস্তারিত দেখুন</a>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img class="img-2" src="{{asset('public/frontend/img/slid1.jpg')}}" style="width: 97%;" class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4 id="sldhed" style=" padding: 15px;">”সর্বোপরি, একজন বিপ্লবীকে সবসময় দৃঢ়ভাবে বিশ্বের
                                    যেকোন
                                </h4>
                                <p id="slddtl">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
                                    <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.
                                </p>
                                <a href="#">বিস্তারিত দেখুন</a>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1">
                                <img src="{{asset('public/frontend/img/slid2.jpg')}}" class="mx-auto img-2" alt="slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4 id="sldhed" style=" padding: 15px;">উঠো, দাঁড়াও, দাঁড়াও তোমার অধিকারের জন্য।
                                </h4>
                                <p id="slddtl">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum
                                    <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.
                                </p>
                                <a href="#">বিস্তারিত দেখুন</a>
                            </div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img class="img-2" src="{{asset('public/frontend/img/slid3.jpg')}}"
                                    class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------Slider------------>
    <!----------Maim Contain------------->
    <div class="container-fluid bodyp1" style="width: 80%;margin-bottom: 20px;margin-top: 20px;">
        <div class="row" style="border-bottom: 2px solid rgba(116, 113, 113, 0.623); padding-bottom: 10px;">
            @php
                $blogs = $blogs->toArray();

                $firstThree = array_slice($blogs, 0, 3);
                $secondThree = array_slice($blogs, 3, 3);

            @endphp
            @foreach ($firstThree as $key => $first)
                <div class="col-md-<?php if($key == 0) echo '5'; elseif($key == 1) echo '3'; else echo '4';  ?> nb{{++$key}}">
                    <hr style="margin-top: 0px; max-width: 100%; ">
                    <div class="row">
                        <div class="col-md-8">
                            <p style="margin: 0px; color: rgb(98, 98, 155); "><small><i><a style="text-decoration: none;" href="{{route('blogs', [$first->category_id, strtolower(str_replace(' ', '-', $first->category))])}}">{{$first->category}}</a></i></small></p>
                            <h2 style="margin: 0px;font-size: 20px; ">{{Str::limit($first->title, 20)}}</h2>
                            <small><i>{{$first->user}}</i></small>
                            <p style="margin: 0px;text-align: justify;"> {{Str::limit(strip_tags($first->detail), 100)}}<a href="{{route('blog', $first->slug)}}"> <i>আরো পড়ুন</i></a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('public/frontend/img/bob 2.jpg')}}" style="width: 100%;padding: 10px;" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row" style="margin-top: 10px;border-bottom: 1px solid black;padding-bottom: 10px;">
            <hr style="max-width: 100%;">
            @foreach ($secondThree as $key => $second)
                
            
            <div class="col-md-<?php if($key == 0) echo '3 ab2'; elseif($key == 1) echo '4 ab3'; else echo '5 ab1';  ?>">
                <p style="margin: 0px; color: rgb(98, 98, 155); "><small><i><a href="{{route('blogs', [$second->category_id, strtolower(str_replace(' ', '-', $second->category))])}}">{{$second->category}}</a></i></small>
                </p>
                <a href="#">
                    <h2 style="font-size: 20px;margin: 0px;">{{Str::limit($second->title, 20)}} </h2>
                </a>
                <small><i>{{$second->user}}</i></small>
                <p style="margin: 0px;text-align: justify;">{{Str::limit(strip_tags($second->detail), 100)}} <a href="{{route('blog', $second->slug)}}"><i>আরো পড়ুন
                        </i></a>
                </p>
            </div>
            @endforeach
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-color: #0a0f43;">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true"> সর্বশেষ </a>
                        {{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false"> সর্বাধিক পঠিত </a> --}}
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                
                            
                            <div class="col-md-4" style="margin-top: 10px;">
                                <a href="{{route('blog', $blog->slug)}}" style="text-decoration: none; color: black; text-align: justify; ">
                                    <div class="card">
                                        <img src="{{asset($blog->photo)}}" style="height: 200px;" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h2 style="font-size: 18px;">{{Str::limit($blog->title, 20)}}</h2>
                                        <p>
                                            {{Str::limit(strip_tags($blog->detail), 100)}}
                                            <a href="{{route('blog', $blog->slug)}}">read more</a>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            @endforeach
                        </div>
                        <hr style="max-width: 100%;">
                        {{-- <a href="#" style="text-decoration: none;color: black;">
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-4">
                                    <img src="{{asset('public/frontend/img/slid3.jpg')}}" width="100%" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 style="margin: 0px;">Lorem ipsum dolor, sit amet consectetur adipisicing.</h2>
                                    <p style="margin: 0px;text-decoration: underline;">
                                        <small><i>আরিফ,জামালপুর</i></small>
                                    </p>
                                    <p style="text-align: justify;margin: 0px;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusantium
                                        doloremque accusamus? Atque ipsum repellendus minima blanditiis dolorem ab
                                        voluptatem modi error iste maiores, voluptas, nostrum tenetur. Modi, eos
                                        deserunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus
                                        vitae molestiae hic dicta harum expedita, officiis iste in recusandae fugit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <hr style="max-width: 100%;"> --}}
                    </div>
                    {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <a href="#" style="text-decoration: none;text-align: justify;">
                            <h2>
                                <span><i>1.</i></span>
                                <span><img src="{{asset('public/frontend/img/bob 2.jpg')}}" height="50px" alt=""></span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </h2>
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4">
                <a href="./Donation.html">
                    <img src="{{asset('public/frontend/img/x20181023190200_3_hal_donasi.png.pagespeed.ic.3EOGpIxcWv.png')}}"
                        style="height: 350px;width: 100%;" alt="">
                </a>
                <a href="#" style="margin-top: 10px;">
                    <img src="{{asset('public/frontend/img/book.jpg')}}" style="height: 350px;width: 100%;margin-top: 10px;" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="container add" style="text-align: center;">
        <hr style="max-width: 100%;">
        <img src="{{asset('public/frontend/img/14958770495137131674.gif')}}" alt="">
        <hr style="max-width: 100%;">
    </div>
    <div class="container-fluid bodyp2" style="width: 80%;">
        <div class="row">
            @foreach ($categories as $category)
                
            
            <div class="col-md-3">
                <a href="{{route('blogs', [$category->id, strtolower(str_replace(' ', '-', $category->name))])}}" style="text-decoration: none; color: black; border-bottom: 1px solid black; ">
                    <span style="font-size: 20px; font-weight: 700; ">{{$category->name}}</span> <span style="color: red;">></span>
                    <img src="@if($loop->odd) {{asset('public/frontend/img/ggg.webp')}} @else {{asset('public/frontend/img/gggggggg.webp')}} @endif" style="width: 100%;margin-top: 10px;height: 200px;" width="100%" alt="">
                    <p style="margin: 0px;"> <small><i>{{$category->name}}</i></small> </p>
                </a>
                @foreach ($category->blogs as $item)
                    
                
                <hr style="max-width: 100%;">
                <a href="{{route('blog', $item->slug)}}" style="text-decoration: none;color: black;">
                    <p style="margin: 0px;font-size: 18px; font-weight: 600; "> {{Str::limit($item->title, 50)}} </p>
                </a>
                <hr style="max-width: 100%;">
                @endforeach
            </div>

            @endforeach
        </div>
    </div>
    <!----------Maim Contain------------->
@endsection