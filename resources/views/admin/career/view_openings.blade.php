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
	        					<h3>Current Openings</h3>
	        					<div><a href="{{ url('/admin/Add-Current-Openings') }}" class="btn btn-danger"><i class="fa-solid fa-square-plus"></i> Add New Openings</a></div>
	        				</div>
	        				<hr>
	        				@if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible">
								  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								  <strong>Success!</strong> {{ session('success') }}
								</div>
                            @endif
	        				<table class="table table-bordered table-striped" id="blogTable">
								<thead>
									<tr>
										<th class="text-center">ID</th>
										<th class="text-center">Title</th>
										<th class="text-center">Location</th>
										<th class="text-center">Vacancy</th>
										<th class="text-center">Experience</th>
										<th class="text-center">Apply Before</th>
										<th class="text-center">Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($datas as $data)
									<tr id="cid{{$data->id}}">
										<td class="text-center">{{ $data->id }}</td>
										<td>{{ $data->job_title }}</td>
										<td>{{ $data->job_location }}</td>
										<td class="text-center">{{ $data->job_vacancy }}</td>
										<td class="text-center">{{ $data->job_experience }}</td>
										<td class="text-center">{{ $data->job_expiry_date }}</td>
										<td class="align-middle text-center">
											<input type="checkbox" data-id="{{ $data->id }}" class="toggle-class" data-onstyle="success" data-offstyle="danger"
											data-toggle="toggle" data-on="Active" data-off="Inactive"
											{{ $data->status ? 'checked' : '' }} >
											
										</td>
										<td class="align-middle">
											<div class="d-flex justify-content-between ">	
											<a href="{{ url('/admin/EditOpenings/'.$data->id) }}"
											class="btn btn-success btn-md me-1"><i class="fa-solid fa-pen-to-square"></i></a>
											<button type="button" class="btn btn-danger btn-md" onclick="DeleteMenu({{ $data->id }});"><i class="fa-solid fa-trash"></i></button>
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