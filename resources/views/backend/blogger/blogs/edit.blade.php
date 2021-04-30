

@extends('backend.layouts.app')
@section('title', 'Update Blog')
@section('backend-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{__('Update Blog')}}</h3>
                <div class="card-tools">
					<a href="{{route('blogger.blogs.index')}}" class="btn btn-sm bg-teal"><i class="fas fa-list-alt"></i> {{__('Blogs')}}</a>
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
                <form action="{{route('blogger.blogs.update', $blog->id)}}" method="post" id="blogForm" enctype="multipart/form-data">
					@csrf
					@method('PUT')
                    <div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Title')}}</label>
											<input type="text" name="title" class="form-control" placeholder="{{__('Title')}}" required="" autocomplete="off" id="title" value="{{$blog->title}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Slug')}}</label>
											<input type="text" name="slug" class="form-control" placeholder="{{__('Slug')}}" required="" autocomplete="off" id="slug" value="{{$blog->slug}}"/>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-4">
									<div class="form-group">
										<label>{{__('Category')}}</label>
										<select class="form-control select2" style="width: 100%;" name="category_id" required="">
											
											@foreach ($categories as $category)
												<option value="{{$category->id}}">{{$category->name}} 
													@if ($category->parent_name != null) 
													({{$category->parent_name}})       
													@endif
												</option>
											@endforeach
										</select>
									</div>
									<!-- /.form-group -->
								</div>
								<!-- /.col -->
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-12">
											<label>{{__('Detail')}}</label>
											<textarea id="summernote" name="detail" required="">
												{{$blog->detail}}
											</textarea>
										</div>
									</div>
									<!-- /.form-group -->
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-primary card-outline">
								<div class="card-body box-profile">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="{{asset($blog->photo)}}" alt="User profile picture" id="userPhoto">
										
									</div>
									<br>
									<input type="file" name="photo" onchange="readPicture(this)" style="width: 100%">
								</div>
								<!-- /.card-body -->
							</div>
						</div>
                        <div class="col-md-12">
                            <center>
                                <button type="reset" class="btn btn-sm bg-red">{{__('Reset')}}</button>
                                <button type="submit" class="btn btn-sm bg-blue">{{__('Save')}}</button>
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
    $(function () {
      $('#blogForm').validate({
        rules: {
          	title: {
            	required: true,
            	maxlength: 255,
          	},
          	slug: {
            	//required: true,
            	maxlength: 355,
          	},
			category_id: {
            	required: true,
				//numeric: true
          	},
          	detail: {
            	required: true,
          	},
        },

        messages: {
          	title: {
            	required: "Please enter Your title",
            	maxlength: "Your title can be 255 characters long max",
				lettersonly: "Please enter alphabetical characters"
          	},
          	slug: {
            	required: "Please enter Your slug",
            	maxlength: "Your slug can be 355 characters long max",
				lettersonly: "Please enter alphabetical characters"
          	},
			category_id: {
				required: "Please select a category",
				numeric: "Only Numeric value"
			},
			detail: {
				required: "Please write some blog detail",
			},
          
        },

        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote();
  })
  function readPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $('#userPhoto')
                .attr('src', e.target.result)
                .width(100)
                .height(100);
            };
        
            reader.readAsDataURL(input.files[0]);
        }
    }

	$("#title").keyup(function(){
        
		var title = $("#title").val();

		var slug = (title.replace(/ /g, '-')).toLowerCase();
		$("#slug").val(slug);

	});

</script>
@endsection

