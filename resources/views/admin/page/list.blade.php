@extends('admin.layouts.header')
@section('title','View AllPageList')
@section('main-content')
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4 pb-3">
				<section class="mt-4">
					<div class="container">
						<div class="row">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center">ID</th>
										<th class="text-center">Page Url</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($pages as $page)
									<tr>
										<td class="text-center">{{ $page->id }}</td>
										<td>{{ $page->page_title }}</td>
										<td class="text-center"><a href="{{ url('admin/Edit-MetaContent/'.$page->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> EDIT</a></td>
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