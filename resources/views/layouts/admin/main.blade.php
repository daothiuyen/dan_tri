<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- CSS -->
    <!-- Font Awesome CSS -->
    <link href="{{ asset('assets/admin/css/all.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Scrollbar CSS -->
    <link href="{{ asset('assets/admin/css/scrollbar.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/admin/css/style-db.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->

</head>

<body>

<!-- Start Wrapper -->
<div class="wrapper">
    @include('layouts.admin.sidebar')
    @yield('content')
</div>
<!-- End Wrapper -->



<!-- SCRIPT -->
<!-- Jquery JS -->
<script src="{{ asset('assets/admin/script/jquery-3.4.1.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/admin/script/popper.min.js') }}"></script>
<!-- Font Awesome JS -->
<script src="{{ asset('assets/admin/script/all.js') }}"></script>
<!-- Scrollbar JS -->
<script src="{{ asset('assets/admin/script/scrollbar.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/admin/script/bootstrap.js') }}"></script>
<script src="{{ asset('assets/admin/script/bootstrap-validate.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/admin/script/scr-db.js') }}"></script>
</body>

</html>
