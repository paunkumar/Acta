@extends('admin.layouts.header')
@section('title','Contact list')
@section('main-content')
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4">
	        	<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">
	        				<div class="d-flex justify-content-between mb-3">
	        					<h3>All Enquires</h3>
                            </div>
	        				<hr>
	        				
	        				<table class="table table-bordered table-striped" id="blogTable">
								<thead>
									<tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
										<th>Message</th>
                                        <th>Date</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($contacts as $contact)
									<tr id="cid{{$contact->id}}">
                                    <td>{{ $contact->firstname }}</td>
                                    <td>{{ $contact->lastname }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->contact_number }}</td>
									<td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at }}</td>
										<td class="align-middle">
											
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