@extends('admin.layouts.header')
@section('title','View AllPageList')
@section('main-content')

<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4 ">
				<section class="mt-3 mb-5">
					<div class="container">
						<div class="row">
							<div class="d-flex justify-content-between mb-2">
	        					<h3><i class="fa-solid fa-pen-to-square"></i>
									Edit Meta Data</h3>
	        					<div><a href="{{ url('admin/view-page-list') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</a></div>
	        				</div>
	        				<hr>
	        				<div class="col-md-10 offset-md-1">
								<form action="{{ url('admin/updateMeta/'.$title->id) }}" method="post" enctype="multipart/form-data"
								autocomplete="off">
									@csrf
									@if (session()->has('success'))
	                                    <div class="alert alert-success alert-dismissible">
										  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
										  <strong>Success!</strong> {{ session('success') }}
										</div>
	                                @endif
									<div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  	<b>Page Url</b>
									  </label>
									  @isset($title)
									  	<input type="text" class="form-control form-control-lg" name="page_title" value="{{ $title->page_title }}" readonly>
									  @endisset
									  @empty($title)
									  	<input type="text" class="form-control form-control-lg" name="page_title" required>
									  @endempty
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  <b>Meta Title</b>
									  </label>
									  @isset($metadata)
									  	<input type="text" class="form-control form-control-lg" name="meta_title" value="{{ $metadata->meta_title }}" required>
									  @endisset
									  @empty($metadata)
									  	<input type="text" class="form-control form-control-lg" name="meta_title" required>
									  @endempty
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlTextarea1" class="form-label"><b>Meta Description</b></label>
									  @isset($metadata)
									  	<textarea class="form-control form-control-lg" name="meta_description" rows="4" required>{{ $metadata->meta_description }}</textarea>
									  @endisset
									  @empty($metadata)
									  	<textarea class="form-control form-control-lg" name="meta_description" rows="4" required></textarea>
									  @endempty
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlTextarea1" class="form-label"><b>Meta Keywords</b></label>
									  @isset($metadata)
									  	<textarea class="form-control form-control-lg" name="meta_keywords" rows="4" required>{{ $metadata->meta_keywords }}</textarea>
									  @endisset
									  @empty($metadata)
									  	<textarea class="form-control form-control-lg" name="meta_keywords" rows="4" required></textarea>
									  @endempty
									</div>
									<div class="mb-3">
									  <label for="exampleFormControlInput1" class="form-label">
									  <b>Meta Author</b>
									  </label>
									  @isset($metadata)
									  	<input type="text" class="form-control form-control-lg" name="meta_author" value="{{ $metadata->meta_author }}" >
									  @endisset
									  @empty($metadata)
									  	<input type="text" class="form-control form-control-lg" name="meta_author" >
									  @endempty
									</div>
									<div class="mt-4 mb-0">
	                                    <input type="submit" class="btn btn-success btn-lg" value="Update Meta Data">
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