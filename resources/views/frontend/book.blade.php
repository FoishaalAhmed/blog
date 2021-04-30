@extends('layouts.app')

@section('title', 'E Book')
@section('frontend-content')
    <!----------Maim Contain------------->

    <div class="background_robekan"></div>
    <div id="content_tentang" style="position: relative; padding-top:110px;">
        <div class="daunkanan"><img src="{{ asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png') }}" width="167" height="185" />
        </div>
        <div class="daunkiri"><img src="{{ asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png') }}" width="225" height="148" />
        </div>


        <div class="container">
            <div class="row" style="position: relative; z-index: 24;text-align: center; margin: auto;  ">
                <div style="text-align: center; margin: auto; " class="header_content">
                    <h2 style="text-align: center; margin: auto;margin-bottom: 20px;">ই-গ্রন্থ কেন্দ্র</h2>
                </div>
            </div>
            <div class="row">
                <div class="listnews" style="position: relative; z-index:23">
                    <ul>
                        @foreach ($books as $item)
                            
                        
                        <li>
                            <div class="listimagenews"><a title="Kontes Komik Rangkong Gading Sudah Selesai" href="{{ asset($item->pdf) }}"><img alt="Kontes Komik Rangkong Gading Sudah Selesai"
                                        src="{{ asset($item->photo) }}"
                                        width="220" height="220" /></a></div>
                            <div class="descnews">
                                <div class="listdatenews">{{ $item->publish_year }}</div>
                                <div class="garisdate">&nbsp;</div>
                                <div class="listtitlenews"><a
                                        href="{{ asset($item->pdf) }}">{{ $item->name }}</a></div>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!----------Maim Contain------------->
@endsection
