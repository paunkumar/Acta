<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link href="{{ url('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication" class="register-bg d-flex justify-content-center align-items-center">
        <div class="col-lg-7 col-md-6 col-sm-8 col-10 log-in-content">
            <div class="card shadow-lg border-0 rounded-lg">
            <img src="img/logo/Acta.png" class="mx-auto mt-sm-3 logo-img-hd" alt="company-logo">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-md-4 mb-0">Create Account</h3>
                </div>
                <div class="card-body py-0 py-sm-2">
                    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
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
                        <div class="row mb-sm-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" name="name" placeholder="Enter your first name" required value="{{ old('name') }}" />
                                    <label for="inputFirstName">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="text" placeholder="Enter your Phone number" name="phone" value="{{ old('phone') }}" required />
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="email" value="{{ old('email') }}" required />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="row mb-sm-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required />
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm password" required />
                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-sm-4 mt-2 mb-0">
                            <div class="d-flex justify-content-center">
                                <input type="submit" class="btn login-btn" value="Create Account">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="{{ url('/admin/login') }}">Have an account? Go to login</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ url('admin/js/scripts.js') }}"></script>
</body>

</html>