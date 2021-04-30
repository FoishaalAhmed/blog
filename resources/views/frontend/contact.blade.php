@extends('layouts.app')

@section('title', 'Contact')
@section('frontend-content')

<!----------Maim Contain------------->

    <section id="bannerprofil2">
        <img class="banner" src="{{ asset('public/frontend/uploads/pages/20181023190100_4_hal_kontak_kami.png') }}" />
        <div class="scrolldown">
            <div class="titlescrolldown">Scroll Down</div>
            <div class="imagescrolldown"><img src="{{ asset('public/frontend/assets/img/xscrolldown-white.png.pagespeed.ic.kI0NGzHQx3.png') }}"
                    width="18" height="28" /></div>
        </div>
    </section>
    <div class="background_robekan tentangkami"></div>
    <div id="content_tentang" style="position: relative;">
        <div class="daunkanan"><img src="{{ asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png') }}" width="167"
                height="185" /></div>
        <div class="daunkiri"><img src="{{ asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png') }}" width="225"
                height="148" /></div>
        <div class="container">
            <div class="row" style="position: relative; z-index: 24">
                <div class="col-lg-12">
                    <div class="aboutus_pertama">
                        <p>Hutan yang menjadi rumah bagi enggang terus mengalami kerusakan. Enggang yang mampu
                            memperbaiki hutan dengan menyebarkan berbagai jenis tanaman hutan, terus dibantai hingga
                            hampir punah.</p>
                        <p>Kami mempunyai harapan besar dan akan terus berupaya menjaga kehidupan enggang agar satwa
                            karismatik ini bisa terus menjaga kelestarian hutan tropis Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="position: relative; z-index: 24;margin:auto;">
                    <span id="form_output"></span>
                    <form class="contact" method="POST" action="#" id="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" required placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" required name="message" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row socmed" style="position: relative; z-index: 24">
                <div class="col-lg-12">
                    <ul>
                        <li>
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <div class="title">{{ $contact->phone }}</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="title">
                                {{ $contact->email }}
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-facebook"></i></div>
                            <div class="title">{{ $contact->facebook }}</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-twitter"></i></div>
                            <div class="title">{{ $contact->twitter }}</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa fa-instagram"></i></div>
                            <div class="title">{{ $contact->instagram }}</div>
                        </li>
                    </ul>
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
    
        $('#contact-form').submit(function(event) {
    
    
            event.preventDefault();
    
            var formData = $(this).serialize();
    
            var url = '{{route("send.query")}}';
    
    
    
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

                        $('#contact-form')[0].reset();
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