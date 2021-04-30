@extends('layouts.app')

@section('title', 'Donation')

@section('frontend-content')
    <!----------Maim Contain------------->


        <div class="modal fade" id="donatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Transfer Bank</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Nama Bank</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td>BNI</td>
                            </tr>
                            <tr>
                                <td>No Akun</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td>Yayasan Rekam Jejak Alam Nusantara</td>
                            </tr>
                            <tr>
                                <td>Nama Akun</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td>0304201374</td>
                            </tr>
                            <tr>
                                <td>Alamat Bank</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td>Bank BNI Cabang Cimanggu Bogor</td>
                            </tr>
                            <tr>
                                <td>Swift Code</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td>BNINIDJA</td>
                            </tr>
                            <tr>
                                <td>Jumlah Donasi</td>
                                <td style="width: 20px; text-align: center;">:</td>
                                <td id="amountpopup"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a class="submit mybutton donatenow" style="width: 100%; text-align: center;">Donasi Sekarang
                            &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="bannerprofil2">
            <img class="banner" src="uploads/pages/x20181023190200_3_hal_donasi.png.pagespeed.ic.3EOGpIxcWv.png"
                width="1393" height="650" />
            <div class="titlebanner">
                <div class="titleheader">Donasi</div>
                <div class="titledescription">Kami membutuhkan Anda untuk menyelamatkan enggang, khususnya Rangkong Gading.
                    Saatnya membuat aksi dan perubahan.</div>
            </div>
            <div class="scrolldown">
                <div class="titlescrolldown">Scroll Down</div>
                <div class="imagescrolldown"><img src="assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png"
                        width="18" height="28" /></div>
            </div>
        </section>
        <div class="background_robekan tentangkami"></div>
        <div id="content_tentang" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_content">Donasi</div>
                        <div class="subheader_content">
                            <p>Setiap bantuan yang Anda berikan dapat membuat perbedaan, dan sangat mendukung upaya kami
                                dalam pelestarian, perlindungan dan membangun pemahaman tentang enggang, khususnya Rangkong
                                Gading. Juga habitat hutan yang mereka huni saat ini. Karena mereka membutuhkan peran Anda,
                                yang harus dimulai dari sekarang jika kita ingin mereka tetap berada di alam bebas.</p>
                        </div>
                    </div>
                    <div class="col-lg-12" style="position: relative; z-index:34">
                        <div class="tabs-donasi">
                            <ul>
                                <li><a class="active info" href="#">Informasi Anda</a></li>
                                <li><a class="total" href="#">Jumlah Donasi</a></li>
                                <li><a class="metode" href="#">Metode Pembayaran</a></li>
                            </ul>
                        </div>
                        <div class="formdatadiri active">
                            <div class="errorformdatadiri alert alert-danger" role="alert" style="display: none;">
                                Mohon lengkapi informasi Anda
                            </div>
                            <div class="form-group">
                                <input type="text" required class="name" name="name" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="email" required class="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="hp" name="hp" placeholder="No. Handphone">
                            </div>
                            <div class="form-group" style="text-align: center;margin-top: 60px">
                                <a class="submit mybutton">Lanjut &raquo;</a>
                            </div>
                        </div>
                        <div class="amount_isi">
                            <div class="errorjumlahdonasi alert alert-danger" role="alert" style="display: none;">
                                Mohon lengkapi informasi Anda
                            </div>
                            <div class="pilihmatauang">Silahkan pilih mata uang</div>
                            <div class="matauanglist">
                                <ul>
                                    <li><a href="#" class="rp">(Rp) Rupiah</a></li>
                                    <li><a href="#" class="usd">(&dollar;) USD</a></li>
                                </ul>
                            </div>
                            <div class="jumlahdonasi">
                                <div class="totaldonasilist rupiah">
                                    <ul>
                                        <li>
                                            <div class="totaldonasi rupiah">Saya akan mendonasikan</div>
                                        </li>
                                        <li><a data-id="250000" href="#">Rp 250.000</a></li>
                                        <li><a data-id="500000" href="#">Rp 500.000</a></li>
                                        <li><a data-id="1000000" href="#">Rp 1.000.000</a></li>
                                        <li><a href="#" class="klik_lainnya">Jumlah Lainnya</a></li>
                                    </ul>
                                </div>
                                <div class="totaldonasilist dolar">
                                    <ul>
                                        <li>
                                            <div class="totaldonasi dolar">Saya akan mendonasikan</div>
                                        </li>
                                        <li><a data-id="25" href="#">&dollar;25</a></li>
                                        <li><a data-id="50" href="#">&dollar;50</a></li>
                                        <li><a data-id="100" href="#">&dollar;100</a></li>
                                        <li><a href="#" class="klik_lainnya">Jumlah Lainnya</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jumlahdonasilain" style="display: none;">
                                <div class="donasilainnya"></div>
                                <ul>
                                    <li>
                                        <div class="donasilainnyabaru">Saya akan mendonasikan</div>
                                    </li>
                                    <li>
                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text symbolcurrency">Rp</div>
                                            </div>
                                            <input type="text" name="jumlah_lainnya" class="jumlah_lainnya"
                                                class="form-control" class="jumlah_lainnya">
                                        </div>
                                </ul>
                            </div>
                            <div class="form-group" style="text-align: center;margin-top: 60px">
                                <a class="backto1 mybutton">&laquo; Kembali</a>
                                <a class="submitto3 mybutton">Lanjut &raquo;</a>
                            </div>
                        </div>
                        <div class="metode_isi">
                            <div class="express">Pilih Metode Pembayaran Anda</div>
                            <div class="metodelist">
                                <ul>
                                    <li><a href="#" data-id="transfer">Transfer</a></li>
                                    <li><a href="#" data-id="paypal">Paypal</a></li>
                                </ul>
                                <input type="hidden" id="base_urlnya" value="/" />
                                <input type="hidden" id="base_urlnya_all" value="/donasi" />
                            </div>
                            <div class="form-group" style="text-align: center;margin-top: 60px">
                                <a class="backto2 mybutton">&laquo; Kembali</a>
                                <a class="submit mybutton donatenow">Donasi Sekarang &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!----------Maim Contain------------->
@endsection

@section('footer')
<script>
    $(function(){
    
        $.ajaxSetup({
    
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });
    
        $('#support-form').submit(function(event) {

            event.preventDefault();
            var formData = $(this).serialize();
            var url = '{{route("send.support")}}';
    
            $.ajax({
    
                url: url,
                method: 'POST',
                data: formData,
                dataType: 'json',
    
                success: function(data){

                    if (data.error.length > 0) {
    
                        var error_html = '';
    
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }
    
                        $('#form_output').html(error_html);

                    } else {
    
                        Swal.fire({

                            position: 'top-end',
                            icon: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        
                        $('#support-form')[0].reset();
                    }
                    
                },
    
                error: function(error) {
    
                    console.log(error);
                }
    
    
            });
    
    
    });
    
    });
    
        
    
        
</script>
@endsection