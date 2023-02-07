@extends('admin.layouts.header')
@section('title','Profile')
@section('main-content')
<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	    <main>
	        <div class="container-fluid px-4">
	        	<section class="mt-3 mb-5">
	        		<div class="container">
	        			<div class="row">
	        				<div class="d-flex justify-content-between mb-3">
	        					<h3>Profile Settings</h3>
	        					<div><a href="{{ url('/dashboard') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> BACK</a></div>
	        				</div>
	        				<hr>
	        				<div class="container mt-3">
							  	<!-- Nav pills -->
							  	<ul class="nav nav-pills" role="tablist">
							    	<li class="nav-item">
							      		<a class="nav-link active" data-bs-toggle="pill" href="#home">Home</a>
							    	</li>
							    	<li class="nav-item">
							      		<a class="nav-link" data-bs-toggle="pill" href="#menu1">Change Password</a>
							    	</li>
							  	</ul>

							  	<!-- Tab panes -->
							  	<div class="tab-content">
							    	<div id="home" class="container tab-pane active"><br>
								      	@if (session()->has('success'))
			                                <div class="alert alert-success alert-dismissible">
											  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
											  <strong>Success!</strong> {{ session('success') }}
											</div>
			                            @endif
			                            <div class="col-md-10 offset-md-1">
									      	<form action="{{ url('/Profile-update') }}" method="post" enctype="multipart/form-data" autocomplete="off">
									      		@csrf
									      		<div class="mb-3 mt-3">
												    <label for="name" class="form-label"><b>User Name :</b></label>
												    <input type="text" class="form-control form-control-lg" id="name" name="name"
												    value="{{ Auth::user()->name }}">
												    @error('name')
													    <div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<div class="mb-3 mt-3 ">
												    <label for="phone" class="form-label"><b>Phone No:</b></label>
												    <input type="text" class="form-control form-control-lg" id="phone" 
												    name="phone" value="{{ Auth::user()->phone }}" maxlength="10">
												    @error('phone')
													    <div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>	
												<div class="mb-3 mt-3">
												    <label for="email" class="form-label"><b>E-Mail Address :</b></label>
												    <input type="text" class="form-control form-control-lg" id="email" name="email"
												    value="{{ Auth::user()->email }}">
												    @error('email')
													    <div class="alert alert-danger">{{ $message }}</div>
													@enderror
												</div>
												<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									      	</form>
									    </div>
							    	</div>
								    <div id="menu1" class="container tab-pane fade"><br>
								    	@if (session()->has(''))
			                                <div class="alert alert-success alert-dismissible">
											  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
											  <strong>Success!</strong> {{ session('') }}
											</div>
			                            @endif
			                            <div class="col-md-10 offset-md-1">
										    <form action="{{ url('') }}" method="post" enctype="multipart/form-data" autocomplete="off">
									      		@csrf
									      		<div class="mb-3 mt-3">
												    <label for="pwd" class="form-label"><b>Old Password :</b></label>
												    <input type="Password" class="form-control form-control-lg" id="pwd" name="pwd"
												    placeholder="Enter your Old Password">
												</div>
												<div class="mb-3 mt-3">
												    <label for="pwd" class="form-label"><b>New Password :</b></label>
												    <input type="Password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your New Password">
												</div>
												<div class="mb-3 mt-3">
												    <label for="pwd" class="form-label"><b>Re Enter New Password :</b></label>
												    <input type="Password" class="form-control form-control-lg" id="password" name="Cpassword" placeholder="Re Enter your New Password">
												</div>
												<button type="submit" class="btn btn-primary btn-lg">Submit</button>
										    </form>
										</div>
								    </div>
							  	</div>
							</div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>
