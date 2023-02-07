@extends('admin.layouts.header')
@section('title','Edit Applications')
@section('main-content')

<div id="layoutSidenav">
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid px-4">
				<section class="mt-3 mb-5">
				<div class="container">
					<div class="row">  
						<div class="d-flex justify-content-between mb-3">  
						<h3>Edit Applications</h3>
						<div><a href="{{ url('/admin/view-resumes') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</a></div>
						</div>
						<hr>  
						<div class="col-md-10 offset-md-1">
						<form action="{{ url('/admin/update-resume') }}" method="post" enctype="multipart/form-data" autocomplete="off">
							@csrf
							@if (session()->has('success'))
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								<strong>Success!</strong> {{ session('success') }}
							</div>
							@endif
							<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">
							<b>Name</b>
							</label>
							<input type="text" class="form-control form-control-lg" name="name" 
							value="{{$resume->name}}" required>
							<input type="hidden" name="id" 
							value="{{ $resume->id }}">
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6 mb-3">
									<label for="exampleFormControlInput1" class="form-label">
									<b>Email</b>
									</label>
									<input type="email" class="form-control form-control-lg" name="email" 
									value="{{$resume->email}}"required>
									</div>
									<div class="col-md-6 mb-3">
									<label for="exampleFormControlInput1" class="form-label">
									<b>Contact Number</b>
									</label>
									<input type="text" class="form-control form-control-lg" name="phone" 
									value="{{$resume->contact_number}}" required>
									</div>
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">
								<b>Resume</b>
								</label>
								
								<a target="_blank" href="{{url('public/resumes/'.$resume->resume)}}" class="btn btn-success btn-block btn-sm">Download Resume</a>
							</div>
							<div class="col-md-12 mb-3">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Update</button>
							</div>
						</form>
						</div>

				</section>
			</div>
		</main>
	</div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript">
	    CKEDITOR.replace('job_description', {
	        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
	        filebrowserUploadMethod: 'form'
	    });
	</script>

@endsection