@extends('admin.layouts.header')
@section('title','Blog list')
@section('main-content')
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4">
	        	<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">
	        				<div class="d-flex justify-content-between mb-3">
	        					<h3>All Blogs</h3>
	        					<div><a href="{{ url('/admin/blog') }}" class="btn btn-danger"><i class="fa-solid fa-square-plus"></i> Add Blog</a></div>
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
										<th class="text-center">Introduction</th>
										<th class="text-center">Subtopic1</th>
										<th class="text-center">Subtopic2</th>
										<th class="text-center">Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($blogs as $blog)
									<tr id="bid{{$blog->id}}">
										<td class="text-center">{{ $blog->id }}</td>
										<td>{{ $blog->blog_title }}</td>
										<td>{{ $blog->blog_intro }}</td>
										<td>{{ $blog->blog_subtopic1 }}</td>
										<td>{{ $blog->blog_subtopic2 }}</td>
										<td class="align-middle">
											<input type="checkbox" data-id="{{ $blog->id }}" class="toggle-class" data-onstyle="success" data-offstyle="danger"
											data-toggle="toggle" data-on="Active" data-off="Inactive"
											{{ $blog->status ? 'checked' : '' }} >
											
										</td>
										<td class="align-middle">
											<div class="d-flex justify-content-between ">	
											<a href="{{ url('/EditBlog/'.$blog->id) }}"
											class="btn btn-success btn-md me-1"><i class="fa-solid fa-pen-to-square"></i></a>
											<button type="button" class="btn btn-danger btn-md" onclick="DeleteMenu({{ $blog->id }});"><i class="fa-solid fa-trash"></i></button>
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
				//alert(userid);
				if(confirm("Do you realy want to delete this record?"))
				{  
					$.ajax({
						type: "GET",
						url: '/deleteSpecificBlog',
						data:{
							'id':userid,
							'_token': $("input[name=_token]").val()
						},
						success: function(data)
						{
							$("#bid"+userid).remove();
							//console.log(data);
						}

					});
				}
			}
		

		$(function(){
			$(".toggle-class").change(function(){
				var status =$(this).prop('checked') == true ? 1 : 0;
				var blog_id =$(this).data('id');
				// alert(status);
				// alert(blog_id);
				$.ajax({
					type: "GET",
					dataType: "json",
					url: '/changeBlogStatus',
					data:{
						'status': status,
						'blog_id': blog_id,
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