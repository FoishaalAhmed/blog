@extends('layouts.app')

@section('title', 'Donation')

@section('frontend-content')
    <!----------Maim Contain------------->

    <section id="bannerprofil2">
        <img class="banner" src="{{ asset('public/frontend/uploads/pages/x20181023190200_3_hal_donasi.png.pagespeed.ic.3EOGpIxcWv.png') }}"
            width="1393" height="650" />
        <div class="titlebanner">
            <div class="titleheader">Donasi</div>
            <div class="titledescription">Kami membutuhkan Anda untuk menyelamatkan enggang, khususnya Rangkong Gading.
                Saatnya membuat aksi dan perubahan.</div>
        </div>
        <div class="scrolldown">
            <div class="titlescrolldown">Scroll Down</div>
            <div class="imagescrolldown"><img src="{{ asset('public/frontend/assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png') }}"
                    width="18" height="28" /></div>
        </div>
    </section>

    <div class="container donate" style="text-align: center; margin: auto;">
        <div class="row">
            <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
        </div>
        <form action="" method="post" id="support-form">
            @csrf
            <div class="row" style="margin: auto; text-align: center; ">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="margin-bottom: 10px;text-align: left;padding-left: 0px;">
                    <select class="wtd" name="currency" id="catagory" style="padding: 8px; height:50px;margin-bottom: 10px; ">
                        <option value="TK">TK</option>
                        <option value="USD">USD</option>
                        <option value="EURO">EURO</option>
                        <option value="CAD">CAD</option>
                    </select>

                    <input class="wtd" type="text" placeholder="500"
                        style="padding: 7px;margin-bottom: 10px; height:50px; background-color:#eb1d5d; border: none; font-size: 18px;color: white;text-align: center; " name="amount">

                    {{-- <input class="wtd" type="text" placeholder="One-Time" 
                        style="padding: 7px;margin-bottom: 10px; height:50px; background-color:#eb1d5d; border: none; font-size: 18px;color: white;text-align: center; ">--}}

                    <br>
                    <input class="wtd" type="text" placeholder="First-Name"
                        style="padding: 7px;margin-top: 10px; height:50px; border: 1px solid black; font-size: 18px;color: black;text-align: left; " required name="first_name">
                    <input class="wtd" type="text" placeholder="Last-Name"
                        style="padding: 7px;margin-top: 10px; height:50px; border: 1px solid black; font-size: 18px;color: black;text-align: left; " required name="last_name">
                    <br>
                    <input class="wtd" type="text" placeholder="E-Mail"
                        style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " name="email">
                    <br>
                    <input class="wtd" type="text" placeholder="Mobile"
                        style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " required name="phone">
                    <br>
                    <input class="wtd" type="text" placeholder="Nationality"
                        style="padding: 7px; width: 100%; height:50px; border: 1px solid black; margin-top: 10px; font-size: 18px;color: black;text-align: left; " name="nationality">

                    <br>
                    <!-- <input class="wtd" type="checkbox" name="c-box" id="c-box" style="margin-top: 10px;"> -->
                    <label class="wtd" for="c-box"> <input type="checkbox"> I Declare that Iam citizien of
                        Bangladesh</label>

                    <br>
                    <button class="btn btn-btn" style="background-color: #eb1d5d;" type="submit"> PROCEED </button>

                </div>
            </div>
        </form>
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

                        //alert(data.success);
    
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