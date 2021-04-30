@extends('layouts.app')

@section('title', 'Photo Gallery')
@section('frontend-content')
    <!----Main content-->

<div class="container">

    <!----Main content-->

    <div class="row photo-animation" style="text-align: center; margin: auto;">
        <hr>
        <h1 style="margin: auto;" class="nzup2 p-hade">Photo Gallery</h1>
        <hr>
    </div>

    <div class="row">
        <div class="tz-gallery photo-animation2">

            <div class="row">
                @foreach ($photos as $item)
                    
                
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset($item->photo) }}">
                        <img style="width: 100%;height: 250px;" src="{{ asset($item->photo) }}" alt="Bridge">
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="row" style="text-align: center; margin: auto;margin-top: 10px;">
         {{ $photos->links() }}
    </div>


    <!-- *****************************Video Gallery End******************************* -->


</div>    
@endsection

@section('footer')
     <script src="{{ asset('public/frontend/js/gallery.js')}}"></script>
    <script>
        //baguetteBox.run('.tz-gallery');
    </script>
@endsection