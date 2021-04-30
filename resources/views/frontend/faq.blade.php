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
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                Apa itu Rangkong Indonesia? </button>
                                        </h5>
                                    </div>
                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Rangkong Indonesia adalah salah satu unit penelitian dari Yayasan Rekam
                                                Nusantara. Kami berangkat dari kepedulian bahwa semua 13 jenis burung
                                                enggang di Indonesia harus tetap berada di hutan, menjaga 98 juta hektar
                                                hutan hujan tropis yang tersisa.</p>
                                            <p>Keyakinan kami berfokus pada konservasi jenis burung indah ini, habitatnya
                                                dan orang-orang yang mendapat banyak manfaat dari keberadaan mereka.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                Bagaimana kondisi Enggang di Indonesia? </button>
                                        </h5>
                                    </div>
                                    <div id="collapse2" class="collapse " aria-labelledby="heading2"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Hilangnya hutan dan perburuan tak terkendali menyebabkan populasi Enggang
                                                menurun. Tampilan fisik dan warna balung yang menarik menjadi target utama
                                                pemburu.</p>
                                            <p>Sementara itu pada tahun 2013 tercatat sekitar enam ribu Rangkong Gading
                                                dewasa diburu untuk diambil paruhnya di Kalimantan Barat. Sedangkan pada
                                                2015 tercatat sekitar 2.343 paruh Rangkong Gading berhasil disita dari pasar
                                                ilegal di Indonesia, Tiongkok dan Amerika, yang setelah ditelusuri semua
                                                paruh itu berasal dari Indonesia.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
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
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                Apa perbedaan Enggang, Rangkong, Julang dan Kangkareng? </button>
                                        </h5>
                                    </div>
                                    <div id="collapse5" class="collapse " aria-labelledby="heading5"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Dalam Kamus Besar Bahasa Indonesia, Enggang diartikan sebagai burung besar
                                                dengan ciri khas tonjolan menyerupai cula di atas paruhnya. Enggang juga
                                                dikenal dengan nama Rangkong, Julang, dan Kangkareng. Sebenarnya,
                                                masing-masing jenis tersebut memiliki keunikan morfologi yang dapat dikenali
                                                melalui bentuk paruh.</p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Indonesian name</strong></td>
                                                        <td><strong>Enggang</strong></td>
                                                        <td><strong>Rangkong</strong></td>
                                                        <td><strong>Julang</strong></td>
                                                        <td><strong>Kangkareng</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Genus</td>
                                                        <td><em>Buceros, Berenicornis, Anorrhinus </em></td>
                                                        <td><em>Rhinoplax</em></td>
                                                        <td><em>Aceros, Rhyticeros</em></td>
                                                        <td><em>Penelopides, Anthracoceros</em></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Species Names (English and Indonesian Names)</td>
                                                        <td>
                                                            <p>White-crowned hornbill/Enggang Jambul</p>
                                                            <p>Great hornbill/Enggang Papan</p>
                                                            <p>Rhinoceros hornbill/Enggang Cula</p>
                                                            <p>Bushy-crested hornbill/Enggang Klihingan</p>
                                                        </td>
                                                        <td>Helmeted hornbill/ Rangkong Gading</td>
                                                        <td>
                                                            <p>Wrinkled hornbill/Julang Jambul Hitam</p>
                                                            <p>Knobbed hornbill/Julang Sulawesi</p>
                                                            <p>Sumba hornbill/Julang Sumba</p>
                                                            <p>Wreathed hornbill/Julang Emas</p>
                                                            <p>Papuan hornbill/Julang Irian</p>
                                                        </td>
                                                        <td>
                                                            <p>Black hornbill/ Kangkareng Hitam</p>
                                                            <p>Oriental pied hornbill/ Kangkareng Perut Putih</p>
                                                            <p>Sulawesi hornbill/ Kangkareng Sulawesi</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beak Shape</td>
                                                        <td>
                                                            <p>Cylindrical and elongated</p>
                                                        </td>
                                                        <td>Elongated</td>
                                                        <td>
                                                            <p>Vertical lines on base of upper and/or lower beak</p>
                                                        </td>
                                                        <td>
                                                            <p>Smaller in size</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Beak Color</td>
                                                        <td>
                                                            <p>Generally bright to dark, such as yellow, red and black</p>
                                                        </td>
                                                        <td>Yellow tip and red towards the base underneath casque</td>
                                                        <td>
                                                            <p>Males are generally bright and striking</p>
                                                            <p>The knobbed hornbill and wrinkled hornbill are yellow, while
                                                                Sumba hornbill, wreathed hornbill, and Papuan hornbill are
                                                                pale white</p>
                                                        </td>
                                                        <td>Most are black, though some are white. Male black hornbill are
                                                            white while females are white.&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Casque Shape</td>
                                                        <td>
                                                            <p>Rhinoceros hornbills have upward turned cylindrical casques.
                                                            </p>
                                                            <p>Great hornbills&rsquo; casques are flattened and curve
                                                                upward, with branched end.</p>
                                                        </td>
                                                        <td>Large beak shaped like a solid, red protuberance</td>
                                                        <td>&nbsp;Relatively low and wrinkled</td>
                                                        <td>Casque prominent and extends nearly half the bill&rsquo;s
                                                            length&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Casque Color</td>
                                                        <td>
                                                            <p>Great hornbill: yellow</p>
                                                            <p>Rhinoceros hornbill: orange, brick red</p>
                                                            <p>White-crowned hornbill and bushy-crested hornbill: black</p>
                                                        </td>
                                                        <td>&nbsp;Yellow-dark red</td>
                                                        <td>Pale white</td>
                                                        <td>Casques are generally pale white and black</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body and Wing Feather Color</td>
                                                        <td>
                                                            <p>Black</p>
                                                            <p>White-crowned hornbill has white chest and abdomen</p>
                                                            <p>Bushy-crested hornbill is dark brown</p>
                                                        </td>
                                                        <td>Whitish yellow body, wings mostly black with white on tips of
                                                            wing feathers</td>
                                                        <td>&nbsp;Black</td>
                                                        <td>Black body; Oriental pied hornbill&rsquo;s belly and tips of
                                                            flight feathers white&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Head and Neck Color</td>
                                                        <td>
                                                            <p>White-crowned hornbill white</p>
                                                        </td>
                                                        <td>Male red, female white</td>
                                                        <td>Male&rsquo; head and neck white or brick red</td>
                                                        <td>Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tail Feather Color</td>
                                                        <td>
                                                            <p>White with black band across the middle.</p>
                                                            <p>White-crowned hornbill has white tail.</p>
                                                            <p>Bushy-crested hornbill tail is grayish brown with wide black
                                                                band on the tip.</p>
                                                        </td>
                                                        <td>Tail is predominantly white, with black band near the tip.</td>
                                                        <td>
                                                            &nbsp;
                                                            <p>White.</p>
                                                            <p>Sumba hornbill has black tail.</p>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                            <p>Black hornbill has black tail.</p>
                                                            <p>Oriental pied hornbill has white crissum and white outer tail
                                                                feather.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Body Size</td>
                                                        <td>
                                                            <p>Large</p>
                                                        </td>
                                                        <td>Large</td>
                                                        <td>Medium-large</td>
                                                        <td>Small</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distinct Features</td>
                                                        <td>
                                                            <p>Stunning casque shape</p>
                                                            <p>White-crowned hornbill has white crown feathers</p>
                                                        </td>
                                                        <td>Two central tail feathers elongated</td>
                                                        <td>&nbsp;Gular pouch brightly colored</td>
                                                        <td>&nbsp;Small body</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading6">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                Mengapa Indonesia penting bagi perlindungan Enggang? </button>
                                        </h5>
                                    </div>
                                    <div id="collapse6" class="collapse " aria-labelledby="heading6"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>Hutan alami menjadi satu-satunya habitat bagi kehidupan Enggang. Dengan
                                                segala keunikannya, hutan tropis telah menyediakan sumber pakan yang
                                                berlimpah dan tersedia sepanjang tahun. Sementara itu, Enggang membutuhkan
                                                pohon berlubang untuk bersarang. Begitu pun sebaliknya, Enggang menjadi agen
                                                regenerasi hutan yang ikut melestarikan ekosistem dengan memencarkan
                                                biji-bijian.</p>
                                            <p>Indonesia menjadi salah satu negara dengan jumlah spesies Enggang terbanyak
                                                di Asia. Persebaran Enggang mencakup wilayah Sumatera, Jawa, Kalimantan,
                                                Sulawesi, Kepulauan Sunda Kecil dan Papua. Sebenarnya, dengan luas
                                                persebarannya, Enggang memiliki potensi ekowisata yang dapat dimanfaatkan
                                                oleh masyarakat tanpa harus diburu. Misalnya, pengamatan burung Rangkong
                                                Gading di alam.</p>
                                            <p>Untuk mengenal lebih tentang 13 jenis enggang di Indonesia, berikut kami
                                                rangkum informasinya dalam tabel di bawah ini:</p>
                                            <p style="text-align: center;"><strong>Hornbills of Indonesia</strong>&nbsp;</p>
                                            <table style="height: 321px;" width="863">
                                                <tbody>
                                                    <tr>
                                                        <td>No.</td>
                                                        <td>Scientific Name</td>
                                                        <td>Indonesian Name</td>
                                                        <td>English Name</td>
                                                        <td>Distribution</td>
                                                        <td>Range</td>
                                                        <td>IU</td>
                                                        <td>CI</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><em>Berenicornis comatus&nbsp;</em>(Raffles, 1822)</td>
                                                        <td>Enggang Jambul</td>
                                                        <td>White-crowned Hornbill</td>
                                                        <td>S K&nbsp;</td>
                                                        <td>&lt;</td>
                                                        <td>NT</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td><em>Anorrhinus galeritus&nbsp;</em>(Temminck, 1831)</td>
                                                        <td>Enggang Klihingan</td>
                                                        <td>Bushy-crested Hornbill</td>
                                                        <td>S K</td>
                                                        <td>&lt;</td>
                                                        <td>LC</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td><em>Penelopides exarhatus&nbsp;</em>(Temminck, 1823)</td>
                                                        <td>Kangkareng Sulawesi</td>
                                                        <td>Sulawesi Hornbill</td>
                                                        <td>C</td>
                                                        <td>E</td>
                                                        <td>VU</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td><em>Aceros corrugatus&nbsp;</em>(Temminck, 1832)</td>
                                                        <td>Julang Jambul-hitam</td>
                                                        <td>Wrinkled Hornbill</td>
                                                        <td>S K</td>
                                                        <td>&lt;</td>
                                                        <td>NT</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td><em>Aceros cassidix&nbsp;</em>(Temminck, 1823)</td>
                                                        <td>Julang Sulawesi</td>
                                                        <td>Knobbed Hornbill</td>
                                                        <td>C</td>
                                                        <td>E</td>
                                                        <td>VU</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><em>Rhyticeros undulatus&nbsp;</em>(Shaw, 1811)</td>
                                                        <td>Julang Emas</td>
                                                        <td>Wreathed Hornbill</td>
                                                        <td>S K J</td>
                                                        <td>&lt;</td>
                                                        <td>LC</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td><em>Rhyticeros plicatus (J. R. Forster, 1781)</em></td>
                                                        <td>Julang Irian</td>
                                                        <td>Blyth&rsquo;s Hornbill</td>
                                                        <td>M P&nbsp;</td>
                                                        <td>&gt;</td>
                                                        <td>LC</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td><em>Rhyticeros everetti&nbsp;(Rothschild, 1897)</em></td>
                                                        <td>Julang Sumba</td>
                                                        <td>Sumba Hornbill</td>
                                                        <td>T</td>
                                                        <td>E</td>
                                                        <td>VU</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td><em>Anthracoceros malayanus&nbsp;(Raffles, 1822)</em></td>
                                                        <td>Kangkareng Hitam</td>
                                                        <td>Black Hornbill</td>
                                                        <td>S K</td>
                                                        <td>&lt;</td>
                                                        <td>NT</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td><em>Anthracoceros albirostris&nbsp;(Shaw, 1807)</em></td>
                                                        <td>Kangkareng Perut-putih</td>
                                                        <td>Oriental Pied Hornbill</td>
                                                        <td>S K J&nbsp;</td>
                                                        <td>&lt;</td>
                                                        <td>LC</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td><em>Buceros rhinoceros&nbsp;(Linnaeus, 1758)</em></td>
                                                        <td>Enggang Cula</td>
                                                        <td>Rhinoceros Hornbill</td>
                                                        <td>S K J&nbsp;</td>
                                                        <td>&lt;</td>
                                                        <td>NT</td>
                                                        <td>II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td><em>Buceros bicornis&nbsp;(Linnaeus, 1758)</em></td>
                                                        <td>Enggang Papan</td>
                                                        <td>Great Hornbill</td>
                                                        <td>S&nbsp;</td>
                                                        <td>&lt;</td>
                                                        <td>NT</td>
                                                        <td>I</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td><em>Rhinoplax vigil&nbsp;(J. R. Forster, 1781)</em></td>
                                                        <td>Rangkong Gading</td>
                                                        <td>Helmeted Hornbill</td>
                                                        <td>S K&nbsp;</td>
                                                        <td>&lt;</td>
                                                        <td>CR</td>
                                                        <td>I</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>&nbsp;</p>
                                            <p><strong>Keterangan</strong>: S= Sumatera, K= Kalimantan, J= Jawa, M= Maluku,
                                                P= Papua, C= Celebes/Sulawesi, dan T= Nusa Tenggara. Sementara di Wilayah
                                                Jelajah atau WJ, &ldquo;&lt;&rdquo;= spesies tersebut tercatat di Filipina
                                                atau Asia Tenggara, &ldquo;&gt;&rdquo;= spesies tercatat di Kepulauan
                                                Bismarck, Solomon dan Australia, serta &ldquo;E&rdquo;= endemik.</p>
                                            <p>IU= IUCN (<em>International Union for Conservation of Nature</em>), CI= CITES
                                                (<em>the Convention on International Trade in Endangered Species of Wild
                                                    Fauna and Flora</em>).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!----------Maim Contain------------->
    @endsection
