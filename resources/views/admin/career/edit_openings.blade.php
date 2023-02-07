@extends('admin.layouts.header')
@section('title','Add Current Openings')
@section('main-content')

<div id="layoutSidenav">
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid px-4">
				<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">	
	        				<div class="d-flex justify-content-between mb-3">  
		        				<h3>Edit Openings</h3>
		        				<div><a href="{{ url('/admin/View-Openings') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</a></div>
		        			</div>
	        				<hr>	
	        				<div class="col-md-10 offset-md-1">
		        				<form action="{{ url('/admin/updateCareer') }}" method="post" enctype="multipart/form-data" autocomplete="off">
									@csrf
									@if (session()->has('success'))
	                                    <div class="alert alert-success alert-dismissible">
										  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
										  <strong>Success!</strong> {{ session('success') }}
										</div>
	                                @endif
									<div class="mb-3">
									  	<label for="exampleFormControlInput1" class="form-label">
									  	<b>Job Title</b>
									  	</label>
									  	<input type="text" class="form-control form-control-lg" name="job_title" 
									  	value="{{$data->job_title}}" required>
									  	<input type="hidden" name="id" 
									  	value="{{ $data->id }}">
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Location</b>
											  	</label>
											  	<input type="text" class="form-control form-control-lg" name="job_location" 
											  	value="{{$data->job_location}}"required>
											</div>
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Job Type</b>
											  	</label>
											  	<select name="job_type" class="form-control form-control-lg" required>
											    	<option value="" >-- Select Job Type --</option>
											  		<option value="Full Time"
											  		{{ $data->job_type == 'Full Time' ? 'selected':''}}>Full Time</option>
											  		<option value="Part Time"
											  		{{ $data->job_type == 'Part Time' ? 'selected':''}}>Part Time</option>
												</select>
											</div>
										</div>
									</div>
									<div class="mb-3">
									  	<label for="exampleFormControlInput1" class="form-label">
									  	<b>Job Skills</b>
									  	</label>
									  	<input type="text" class="form-control form-control-lg" name="job_skills"
									  	value="{{$data->job_skills}}" >
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Required Job Vacancies</b>
											  	</label>
											  	<input type="text" class="form-control form-control-lg" name="job_vacancy" required
											  	value="{{$data->job_vacancy}}">
											</div>
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Required Job Experience</b>
											  	</label>
											  	<input type="text" class="form-control form-control-lg" name="job_experience" required
											  	value="{{$data->job_experience}}">
											</div>
										</div>
									</div>
									<div class="col-md-12" >
										<div class="row">
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Required Gender</b>
											  	</label>
											  	<select name="job_gender" class="form-control form-control-lg" required>
											    	<option value="" >-- Select Gender --</option>
											  		<option value="Male"
											  		{{ $data->job_gender == 'Male' ? 'selected':'' }}>Male</option>
											  		<option value="Female"
											  		{{ $data->job_gender == 'Female' ? 'selected':'' }}>Female</option>
											  		<option value="Male,Female"
											  		{{ $data->job_gender == 'Male,Female' ? 'selected':'' }}>Male,Female</option>
												</select>
											</div>
											<div class="col-md-6 mb-3">
											  	<label for="exampleFormControlInput1" class="form-label">
											  	<b>Required Qualification</b>
											  	</label>
											  	<input type="text" class="form-control form-control-lg" name="job_qualification" required value="{{$data->job_qualification}}">
											</div>
										</div>
									</div>
									<div class="mb-3">
									  	<label for="exampleFormControlInput1" class="form-label">
									  	<b>Job expiry date</b>
									  	</label>
									  	<input type="date" class="form-control form-control-lg" name="job_expiry_date"
									  	value="{{$data->job_expiry_date}}">
									</div>
									<div class="mb-3">
									  	<label for="exampleFormControlInput1" class="form-label">
									  	<b>Job Description</b>
									  	</label>
									  	<textarea class="ckeditor form-control" name="job_description">{{ $data->job_description }}</textarea>
									</div>
									<div class="d-flex flex-row-reverse">
										<input type="submit" class="btn btn-success btn-lg" value="Submit">
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
	    CKEDITOR.replace('job_description', {
	        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
	        filebrowserUploadMethod: 'form'
	    });
	</script>

@endsection