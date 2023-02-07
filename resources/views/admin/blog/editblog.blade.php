@extends('admin.layouts.header')
@section('title','Dashboard Page')
@section('main-content')

<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4">
	        	<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">	
	        				<div class="d-flex justify-content-between mb-3">  
		        				<h3>Edit Blog</h3>
		        				<div><a href="{{ url('/view-blog') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</a></div>
		        			</div>
	        				<hr>	
	        				<div class="col-md-10 offset-md-1">
		        				<form action="{{ url('blog/update') }}" method="post" enctype="multipart/form-data" autocomplete="off">
									@csrf
									@if (session()->has('success'))
	                                    <div class="alert alert-success alert-dismissible">
										  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
										  <strong>Success!</strong> {{ session('success') }}
										</div>
	                                @endif
									<div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  	<b>Blog Title</b>
									  </label>
									  <input type="text" class="form-control form-control-lg" name="blog_title" value="{{ $blog->blog_title }}" required>
									  <input type="hidden" name="id" value="{{ $blog->id }}">
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="col-md-12">
												<label for="exampleFormControlInput1" class="form-label">
												  	<b>Blog Image</b>
												 </label>
												<input type="file" class="form-control form-control-lg" name="blog_image">
											</div>
											<div class="col-md-12 mt-3">
												<label for="exampleFormControlInput1" class="form-label">
												  	<b>Blog Introduction</b>
												 </label>
												<input type="text" class="form-control form-control-lg" name="blog_intro" 
												value="{{ $blog->blog_intro }}"required>	
											</div>
										</div>
										<div class="col-md-6">
											<div class="col-md-12">
											
											    <img src="{{ url('/admin/blogs/'.$blog->blog_image) }}" alt="..." style="height:200px;weight:200px;">
											</div>
										</div>
									</div>
									<div class="mb-3 mt-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  	<b>Blog SubTopic</b>
									  </label>
									  <input type="text" class="form-control form-control-lg" name="blog_subtopic1" value="{{ $blog->blog_subtopic1 }}" required>
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlTextarea1" class="form-label">
									  <b>Blog Description</b>
									  </label>
									  <textarea class="form-control form-control-lg" name="blog_description" rows="3" required>{{ $blog->blog_description }}
									  </textarea>
									</div>
									<div class="mb-3 mt-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  	<b>Blog SubTopic 2</b>
									  </label>
									  <input type="text" class="form-control form-control-lg" name="blog_subtopic2" value="{{ $blog->blog_subtopic2 }}" required>
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlTextarea1" class="form-label">
									  <b>Blog Content</b>
									  </label>
									  <textarea class="ckeditor form-control" name="blog_content" required>{{ $blog->blog_content }}</textarea>	  
									</div>
									<div class="mt-4 mb-0">
	                                    <input type="submit" class="btn btn-success btn-lg" value="Update Blog">
	                                </div>
		        				</form>
	        				</div>
	        			</div>
	        		</div>
	        	</section>
	        </div>
	    </main>
	</div>
</div>


@endsection

@section('scripts')
	<script type="text/javascript">
	    CKEDITOR.replace('blog_content', {
	        filebrowserUploadUrl: "{{route('ckeditor.blogimage-upload', ['_token' => csrf_token() ])}}",
	        filebrowserUploadMethod: 'form'
	    });
	</script>

@endsection