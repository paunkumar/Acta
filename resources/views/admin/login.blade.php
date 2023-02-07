<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="{{ url('admin/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutAuthentication" class="login-bg d-flex justify-content-center align-items-center">
            <!-- <div id="layoutAuthentication_content"> -->
                    <div class="col-lg-4 col-md-6 col-10 log-in-content" >
                        <div class="card shadow-lg border-0 rounded-lg">
                            <img src="{{ url('assets/images/logo.png') }}" width="200px" height="80px" class="mx-auto mt-3" alt="company-logo">
                            <div class="card-header border-0" >
                                <h3 class="text-center font-weight-light my-3 text-white">Login</h3>
                            </div>
                            <div class="card-body border-0">
                                <form action="{{ url('/admin/login') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    
                                    @if (session()->has('message'))
                                    <div class="alert alert-danger">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="text" placeholder="name@example.com" 
                                        name="email" value="{{ old('email') }}" required />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password" type="password" placeholder="Password" required />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex flex-row-reverse mt-4 mb-0">
                                        <input type="submit" class="btn login-btn"
                                        value="Login">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer border-0 text-center py-3">
                                <div class="small"><a href="{{ url('/register') }}">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
            <!-- </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('admin/js/scripts.js') }}"></script>
    </body>
</html>
