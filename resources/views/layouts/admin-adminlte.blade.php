<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEMA | CRUD</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- @yield('css') --}}
</head>

<body class="hold-transition sidebar-mini">
{{-- <body class="body"> --}}
<div class="wrapper">
{{-- <div class="container-fluid"> --}}
    <!-- Navbar -->
    @include('layouts.partials.header')

    <!-- Main Sidebar Container -->
    @include('layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    {{-- <div class="content-wrapper">
            @yield('content_header')
    </div> --}}

    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Main Footer -->
    @include('layouts.partials.footer')
</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>

@yield('js')
</body>
</html>
