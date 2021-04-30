@extends('layouts.app')

@section('title', 'Videos')
@section('frontend-content')
    <div class="container">

        <div id="content_tentang" style="position: relative; padding-top:110px;">
        <div class="daunkanan"><img src="{{ asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png') }}" width="167"
                height="185" /></div>
        <div class="daunkiri"><img src="{{ asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png') }}" width="225"
                height="148" /></div>
        <div class="daunkanan2 paralax"><img src="{{ asset('public/frontend/assets/img/xdaunkiri.png.pagespeed.ic.nPuJPzAKAX.png') }}" width="225"
                height="148" /></div>

        <div class="daunbawah1"><img src="{{ asset('public/frontend/assets/img/xdaunkanan.png.pagespeed.ic.Q9nv0BEbko.png') }}" width="167"
                height="185" /></div>


            <!-- *****************************Video Gallery******************************* -->
            <div class="container mt-4" style="margin-top: 50px;">


                <div class="row">
                    <hr>
                    <h4
                        style="text-align: center;border-top: 2px solid black; border-bottom: 2px solid black; padding-top: 10px;padding-bottom: 10px;">
                        VIDEO GALLERY</h4>
                    <hr>
                </div>



                <div class="row" style="margin-top: 50px;">

                    @foreach ($videos as $key => $item)
                        
                    
                    <div class="col-md-4">
                        <a data-target="#modalYT{{ $key }}" data-toggle="modal" href="#" class="color-gray-darker td-hover-none">
                            <div class="ba-0 ds-1">
                                <img alt="Card image cap" class="card-img-top" src="https://img.youtube.com/vi/<?php echo $item->video; ?>/hqdefault.jpg">
                                <div class="card-body">
                                    <h4 class="card-title color-gray-darker">{{ $item->title }}
                                    </h4>
                                    <p class="card-text color-gray-darker">{{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    @endforeach
                </div>


            </div>



            @foreach ($videos as $key => $item)
                
            
            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalYT{{ $key }}" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body mb-0 p-0">
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $item->video; ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- *****************************Video Gallery End******************************* -->


        </div>
@endsection