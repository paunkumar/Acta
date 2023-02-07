@extends('admin.layouts.header')
@section('title','Current Openings')
@section('main-content')
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4">
	        	<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">
	        				<div class="d-flex justify-content-between mb-3">
	        					<h3>List Applications</h3>
	        					<div><a href="{{ url('/admin/Add-Current-Openings') }}" class="btn btn-danger"><i class="fa-solid fa-square-plus"></i> Add New Openings</a></div>
	        				</div>
	        				<hr>
	        				@if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Success!</strong> {{ session('success') }}
								</div>
                            @endif
	        				<table class="table table-bordered table-striped" id="resumeTable">
								<thead>
									<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Name</th>
									<th class="text-center">Email</th>
									<th class="text-center">Contact Number</th>
									<th class="text-center">Job Type</th>
									<th class="text-center">Current Location</th>
									<th class="text-center">Experience</th>
									<th class="text-center">Resume</th>
									<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($resumes as $resume)
									<tr id="cid{{$resume->id}}">
									<td class="text-center">{{ $resume->id }}</td>
									<td>{{ $resume->name }}</td>
									<td>{{ $resume->email }}</td>
									<td class="text-center">{{ $resume->contact_number }}</td>
									<td class="text-center">{{ $resume->job_type }}</td>
									<td class="text-center">{{ $resume->current_location }}</td>
									<td class="text-center">{{ $resume->experience }}</td>
									<td class="text-center"><a target="_blank" href="{{url('public/resumes/'.$resume->resume)}}">Download</a></td>
									<td class="align-middle">
										<div class="d-flex justify-content-between ">  
										<a href="{{ url('/admin/EditApplications/'.$resume->id) }}"
										class="btn btn-success btn-md me-1"><i class="fa-solid fa-pen-to-square"></i></a>
										<button type="button" class="btn btn-danger btn-md" onclick="DeleteResume({{ $resume->id }});"><i class="fa-solid fa-trash"></i></button>
										</div>
									</td>
									</tr>
									@endforeach
								</tbody>
								</table>

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
		function DeleteMenu(id)
			{
				var userid = id;
				if(confirm("Do you realy want to delete this record?"))
				{  
					$.ajax({
						type: "GET",
						url: '/deleteSpecificOpening',
						data:{
							'id':userid,
							'_token': $("input[name=_token]").val()
						},
						success: function(data)
						{
							$("#cid"+userid).remove();
							console.log(data);
						}

					});
				}
			}
		

		$(function(){
			$(".toggle-class").change(function(){
				var status =$(this).prop('checked') == true ? 1 : 0;
				var career_id =$(this).data('id');
				// alert(status);
				// alert(blog_id);
				$.ajax({
					type: "GET",
					dataType: "json",
					url: '/changeCareerStatus',
					data:{
						'status': status,
						'id': career_id,
					},
					success: function(data){
						console.log('Success');
					}
				});
			});

		});

		$(document).ready( function () {
		    $('#blogTable').DataTable();
		} );
	</script>
@endsection