@extends('layouts.app')
@section('title', 'Blogs')
@section('frontend-content')
    <!----------Maim Contain------------->
    <section id="bannerprofil2">
        <img class="banner" src="{{asset('public/frontend/uploads/pages/x20181023190643_1_rev_hal_13_jenis_enggang.png.pagespeed.ic.o1gBTzEla1.png')}}" width="1393" height="650" />
        <div class="scrolldown">
            <div class="titlescrolldown">Scroll Down</div>
            <div class="imagescrolldown"><img src="{{asset('public/frontend/assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png')}}" width="18" height="28" /></div>
        </div>
    </section>
    <div class="background_robekan tentangkami"></div>
    <div id="content_tentang" style="position: relative;">
        <div class="daunkanan"><img src="{{asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png')}}" width="167" height="185" /></div>

        <div class="daunkiri"><img src="{{asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png')}}" width="225" height="148" /></div>

        <div class="daunkanan2 paralax"><img src="{{asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png')}}" width="225" height="148" /></div>

        <div class="daunbawah1"><img src="{{asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png')}}" width="167" height="185" /></div>

        <div class="container-fluid">
            <div class="container">
                <div class="row" style="position: relative; z-index: 24">
                    <div class="header_content">
                        <h2>Enggang di Indonesia</h2>
                    </div>
                    <div class="subheader_content">
                        <p>Selain berjasa untuk kelestarian hutan, Enggang juga memiliki suara, fisik, dan pola
                            perkembangbiakkan yang khas. Tiap jenis Enggang pun memberikan makna yang beragam bagi
                            manusia. Itulah mengapa di beberapa wilayah, Enggang merupakan bagian tak terpisahkan dari
                            kehidupan masyarakat. Yuk jelajahi keunikan dari 13 jenis Enggang di Indonesia!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="listjenis" style="position: relative; z-index: 24">
                    <ul>
                        @foreach ($blogs as $blog)  
                            @if ($loop->odd)
                                <li>
                                    <a href="{{route('blog', $blog->slug)}}">
                                        <div class="boximage">
                                            <div class="boximageout">
                                                <div id="overlay3"></div>
                                                <img src="{{asset($blog->photo)}}" width="253" height="252" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="desc-listjenis">
                                        <div class="jenistitle"><a href="{{route('blog', $blog->slug)}}">{{Str::limit($blog->title, 50)}}</a></div>
                                        <div class="jenisdesc">
                                            <p>{!! Str::limit($blog->detail, 200) !!}</p>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a href="{{route('blog', $blog->slug)}}">
                                        <div class="boximage">
                                            <div class="boximageout">
                                                <div id="overlay3"></div>
                                                <img src="{{asset($blog->photo)}}" width="253" height="252" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="desc-listjenis">
                                        <div class="jenistitle"><a
                                                href="{{route('blog', $blog->slug)}}">{{Str::limit($blog->title, 50)}}</a>
                                        </div>
                                        <div class="jenisdesc">
                                            <p>{!! Str::limit($blog->detail, 200) !!}</p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="tentanghutan"><img src="{{asset('public/frontend/assets/img/xhutan1.png.pagespeed.ic.Xicz5vc3Rz.png')}}" width="1361" height="514" /></div>
        <div class="tentanghutan2"><img src="{{asset('public/frontend/assets/img/ximage2.png.pagespeed.ic.eBbxPHn0nk.png')}}" width="354" height="370" /></div>
        <div class="tentanghutan3"><img src="{{asset('public/frontend/assets/img/xhutan3.png.pagespeed.ic.azFYiUmp9F.png')}}" width="449" height="318" /></div>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!----------Maim Contain------------->
@endsection