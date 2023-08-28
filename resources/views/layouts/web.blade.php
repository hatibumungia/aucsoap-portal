<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'AUCSOAP Portal') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap4.min.css') }}">

    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
</head>
<body class="hold-transition register-page">
<div class="register-box wrapper">
    <div class="register-logo mt-4">
        <a href="/">
            <img src="{{ asset('images/AU_logo.png') }}" width="250" alt="AUCSOAP Logo"
                 class="brand-image"
                 style="opacity: .8">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        @yield('content')

        @include('shared.flash-message')
    </div>
</div>
<!-- /.login-box -->
@vite('resources/js/app.js')
</body>
</html>
