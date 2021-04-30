@extends('backend.layouts.app')
@section('title', 'New Gallery')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('New Gallery') }}</h3>
                    <div class="card-tools">
                        
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('includes.error')
					@if(isset($gallery))
                    <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="post" id="galleryForm"
                        enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Type') }}</label>
                                               <select name="type" id="type" class="form-control" style="width: 100%" required="" onchange="showHidePhotoAndVideo()">
												   <option value="Photo" @if ($gallery->type == 'Photo') {{'selected'}}
													   
												   @endif>{{__('Photo')}}</option>
												   <option value="Video" @if ($gallery->type == 'Video') {{'selected'}}
													   
												   @endif>{{__('Video')}}</option>
											   </select>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
									
										
									<div class="col-md-4 video" style="display: @if($gallery->type != 'Video') {{'none'}} @endif">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Title') }}</label>
												<input type="text" name="title" class="form-control"
													placeholder="{{ __('Title') }}" autocomplete="off"
													id="title" value="{{ $gallery->title }}" />
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-4 video" style="display: @if($gallery->type != 'Video') {{'none'}} @endif">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Video') }}</label>
												<input type="text" class="form-control"
													placeholder="{{ __('Video') }}" autocomplete="off"
													id="video" value="{{ $gallery->video }}" onkeyup="youtube_parser();"/>
													<input type="text" name="video" id="video-link" value="{{ $gallery->video }}">
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12 video" style="display: @if($gallery->type != 'Video') {{'none'}} @endif">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Description') }}</label>
												<textarea type="text" name="description" class="form-control" placeholder="{{ __('Description') }}" autocomplete="off"  > {{ $gallery->description }} </textarea>
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
                                </div>
                            </div>
                            <div class="col-md-3" id="photoSection" style="display: @if($gallery->type != 'Photo') {{'none'}} @endif">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="{{asset($gallery->photo)}}"
                                                alt="User profile picture" id="userPhoto">
                                        </div>
                                        <br>
                                        <input type="file" name="photo" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Update') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
					@else
                    <form action="{{ route('admin.galleries.store') }}" method="post" id="galleryForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Type') }}</label>
                                               <select name="type" id="type" class="form-control" style="width: 100%" required="" onchange="showHidePhotoAndVideo()">
												   <option value="Photo" @if (old('type') == 'Photo') {{'selected'}}
													   
												   @endif>{{__('Photo')}}</option>
												   <option value="Video" @if (old('type') == 'Video') {{'selected'}}
													   
												   @endif>{{__('Video')}}</option>
											   </select>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
									
										
									<div class="col-md-4 video" style="display: none">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Title') }}</label>
												<input type="text" name="title" class="form-control"
													placeholder="{{ __('Title') }}" autocomplete="off"
													id="title" value="{{ old('title') }}" />
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-4 video" style="display: none">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Video') }}</label>
												<input type="text" class="form-control"
													placeholder="{{ __('Video') }}" autocomplete="off"
													id="video" value="{{ old('video') }}" onkeyup="youtube_parser();"/>
													<input type="text" name="video" id="video-link" value="{{ old('video') }}">
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
									<div class="col-md-12 video" style="display: none">
										<div class="form-group">
											<div class="col-md-12">
												<label>{{ __('Description') }}</label>
												<textarea type="text" name="description" class="form-control" placeholder="{{ __('Description') }}" autocomplete="off"  > {{ old('description') }} </textarea>
											</div>
										</div>
										<!-- /.form-group -->
									</div>
									<!-- /.col -->
                                </div>
                            </div>
                            <div class="col-md-3" id="photoSection">
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="//placehold.it/200x200"
                                                alt="User profile picture" id="userPhoto">
                                        </div>
                                        <br>
                                        <input type="file" name="photo" onchange="readPicture(this)" style="width: 100%">
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="reset" class="btn btn-sm bg-red">{{ __('Reset') }}</button>
                                    <button type="submit" class="btn btn-sm bg-blue">{{ __('Save') }}</button>
                                </center>
                            </div>
                        </div>
                    </form>
					@endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10%">{{ __('Sl') }}</th>
                                <th style="width: 20%">{{ __('Type') }}</th>
                                <th style="width: 40%">{{ __('Video') }}</th>
                                <th style="width: 20%">{{ __('Photo') }}</th>
                                <th style="width: 10%">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->video }}</td>
                                    <td>
                                        <img src="{{ asset($item->photo) }}" alt="" style="width: 50px; height: 50px;">
                                    </td>
                                    <td>
                                        <a class="btn btn-sm bg-blue" href="{{ route('admin.galleries.edit', [$item->id]) }}"><span class="fas fa-edit"></span></a>

                                        <form action="{{ route('admin.galleries.destroy', [$item->id]) }}" method="post" style="display: none;" id="delete-form-{{ $item->id }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a class="btn btn-sm bg-red" href="" onclick="if(confirm('Are You Sure To Delete?')){
                                                event.preventDefault();
                                                getElementById('delete-form-{{ $item->id }}').submit();
                                                }else{
                                                event.preventDefault();
                                                }"><span class="fas fa-trash"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('footer')

    <script>
        function readPicture(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#userPhoto')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		function showHidePhotoAndVideo() {

			let type = $('#type').val();

            if (type == 'Video') {

                $('.video').show();
                $('#photoSection').hide();
                
            } else {

                $('.video').hide();
                $('#photoSection').show();
            }
		}

		function youtube_parser() {

            let url = $('#video').val();

            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
            var match = url.match(regExp);

            if ((match && match[7].length == 11)) $("#video-link").val(match[7]);
        }

    </script>
@endsection
