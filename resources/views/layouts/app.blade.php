<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Url -->
    <meta name="app-url" content="{{ url('/') }}">
    <title>@yield('title')</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/')}}asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('/')}}asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('/')}}asset/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}asset/css/adminlte.min.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="{{asset('/')}}asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('/')}}asset/css/custom.css">
    {{--    <link rel="stylesheet" href="{{asset('/')}}asset/css/custom-media.css">--}}
    @yield('style')
</head>
<body>
<div id="app">
    <section class="px-2 py-2">
        <header class="container mx-auto">
            <h1>NiBook</h1>
        </header>
    </section>
    <section class="px-2">
        <main class="container mx-auto">
            @yield('content')
        </main>
    </section>
</div>
</body>
</html>
