@extends('layouts.app')

@section('title', 'FAQS')
@section('frontend-content')
    <!----------Maim Contain------------->
    <section id="bannerprofil2">
        <img class="banner" src="{{ asset('public/frontend/uploads/pages/x20181023193102_faq.png.pagespeed.ic.uY20eRtuvl.png') }}" width="1393"
            height="650" />
        <div class="scrolldown">
            <div class="titlescrolldown">Scroll Down</div>
            <div class="imagescrolldown"><img src="{{ asset('public/frontend/assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png') }}" width="18"
                    height="28" /></div>
        </div>
    </section>
    <div class="background_robekan tentangkami"></div>
    <div id="content_tentang" class="faq" style="position: relative;">
        <div class="daunkanan"><img src="{{ asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png') }}" width="167" height="185" />
        </div>
        <div class="daunkiri"><img src="{{ asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png') }}" width="225" height="148" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10" style="position: relative; z-index: 24;margin:auto;">
                    <div class="aboutus_pertama" style="margin-bottom: 80px;">Ketahui lebih banyak dan temukan jawaban Anda
                        atas pertanyaan yang berhubungan dengan apa yang kami lakukan. Jangan ragu untuk menghubungi kami.
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">FAQ</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="accordion" id="accordionExample">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($faqs as $item)
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $i; ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                               {{ $item->question }} </button>
                                        </h5>
                                    </div>
                                    <div id="collapse<?php echo $i; ?>" class="collapse " aria-labelledby="heading<?php echo $i; ?>"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            {{ $item->answer }}
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $i++;
                                @endphp

                                @endforeach

                                {{-- <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Apa yang kami lakukan dalam upaya penyelamatan Enggang di Indonesia?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse3" class="collapse " aria-labelledby="heading3"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Pengetahuan dan kesadaran masyarakat tentang Enggang masih minim. Padahal,
                                                enggang adalah petani hutan sejati, yang secara langsung menjaga
                                                keseimbangan ekosistem hutan. Untuk itu, Rangkong Indonesia menginisiasi
                                                kegiatan edukasi dan penyadartahuan masyarakat melalui kampanye di tingkat
                                                lokal, nasional dan internasional.</p>
                                            <p>Kami mengambil aksi perlindungan dengan melibatkan masyarakat adat, serta
                                                ikut terlibat dalam Penyusunan Rencana Strategi dan Rencana Aksi Konservasi
                                                (SRAK) Rangkong Gading bersama para pihak strategis, hingga mendorong
                                                Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor
                                                P.20/Menlhk/Setjen/Kum.1/6/2018.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Bagaimana perlindungan Enggang di Indonesia? Apa tantangannya? </button>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse " aria-labelledby="heading4"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Semua jenis Enggang di Indonesia termasuk dalam satwa yang dilindungi.
                                                Perlindungannya diatur dalam UU No. 5 tahun 1990, PP No. 7 tahun 1999 dan
                                                Peraturan Menteri Lingkungan Hidup dan Kehutanan Republik Indonesia Nomor
                                                P.20/Menlhk/Setjen/Kum.1/6/2018.</p>
                                            <p>Meskipun perlindungannya telah ditetapkan, namun perburuan enggang khususnya
                                                Rangkong Gading yang berstatus krisis masih terus terjadi. Ditambah dengan
                                                hilangnya hutan sebagai habitat alami semakin menekan populasi enggang di
                                                alam bebas.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!----------Maim Contain------------->
    @endsection
