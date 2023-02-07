
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>ACTA 404</title>
        <meta content="ACTA" name="description">
        <meta content="ACTA" name="keywords">
        <!-- Favicons -->
        <link href="{{ url('assets/img/favicon.ico') }}" rel="icon">
        <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <meta name="robots" content="noindex,follow" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
	<body>
        <div class="main">
        <div class=" mt-5 pt-5"><div class="d-flex mt-lg-5 flex-column justify-content-center text-center align-items-center"><img src="{{ url('assets/images/404_plug.svg') }}" alt="404" width="250" height="180" title="404"><p class="mt-lg-5 mt-4 error_content">Error 404 <br>We can’t seem to find the <br> page you are looking for</p> <p class="mt-lg-5 mt-4 error_subContent">Herare are some helpful links instead</p><div class="mt-2 d-flex"><a class="redirection " href="{{ url('/') }}">HOME</a><a class="redirection mx-4" href="{{ url('/contact-us') }}">CONTACT US</a><a class="redirection" href="{{ url('/') }}">BLOGS</a></div></div></div>
        </div>

	</body>
</html>