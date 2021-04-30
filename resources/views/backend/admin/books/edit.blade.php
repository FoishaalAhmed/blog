@extends('backend.layouts.app')
@section('title', 'Update Book')
@section('backend-content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Update Book') }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.books.index') }}" class="btn btn-sm bg-teal"><i
                                class="fas fa-list-alt"></i> {{ __('Books') }}</a>
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
                    <form action="{{ route('admin.books.update', $book->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
						@method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Name') }}</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="{{ __('Name') }}" required="" autocomplete="off"
                                                    id="name" value="{{ $book->name }}" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Suitable For') }}</label>
                                                <input type="text" name="suitable_for" class="form-control"
                                                    placeholder="{{ __('Suitable For') }}" required="" autocomplete="off"
                                                    id="suitable_for" value="{{ $book->suitable_for }}" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Publish Year') }}</label>
                                                <input type="text" name="publish_year" class="form-control"
                                                    placeholder="{{ __('Publish Year') }}" required="" autocomplete="off"
                                                    id="publish_year" value="{{ $book->publish_year }}" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>{{ __('Author') }}</label>
                                                <input type="text" name="author" class="form-control"
                                                    placeholder="{{ __('Author') }}" required="" autocomplete="off"
                                                    id="author" value="{{ $book->author }}" />
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Book Photo') }}</h3>
                                            </div>
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <img class="profile-user-img img-fluid img-circle"
                                                        src="{{ asset($book->photo) }}" alt="User profile picture"
                                                        id="userPhoto">
                                                </div>
                                                <br>
                                                <input type="file" name="photo" onchange="readPicture(this)"
                                                    style="width: 100%">
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('PDF Book') }}</h3>
                                            </div>
                                            <div class="card-body box-profile">
                                                <div class="text-center">
                                                    <iframe src="{{ asset($book->pdf) }}" height="100" width="300"></iframe>
                                                </div>
                                                <br>
                                                <input type="file" name="pdf" style="width: 100%">
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
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

    </script>
@endsection
