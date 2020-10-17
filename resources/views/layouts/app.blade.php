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
    <section class="">
        <nav class="navbar navbar-expand-md bg-white navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <h3>{{ config('app.name', 'Laravel') }}</h3>
                </a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link dropdown-toggle"
                                   href="#" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="px-1 py-1">
        <main class="container mx-auto">
            @yield('content')
        </main>
    </section>
</div>

<!-- SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('/')}}asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Datepicker -->
<script src="{{asset('/')}}asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}asset/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{asset('/')}}asset/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Select2 -->
<script src="{{asset('/')}}asset/plugins/select2/js/select2.full.min.js"></script>

<!-- jquery-validation -->
<script src="{{asset('/')}}asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('/')}}asset/plugins/jquery-validation/additional-methods.min.js"></script>

<script type="text/javascript" charset="utf-8">
    /* Ajax global CSRF token setup */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    <!-- Tooltip Config -->
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    <!-- Navbar Active -->
    // /* add active class and stay opened when selected */
    // var url = window.location;
    //
    // // for sidebar menu entirely but not cover treeview
    // $('ul.nav-sidebar a').filter(function () {
    //     return this.href == url;
    // }).addClass('active');
    //
    // // for treeview
    // $('ul.nav-treeview a').filter(function () {
    //     return this.href == url;
    // }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

</script>
<script type="text/javascript">
    <!-- Sweetalert 2 config -->
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 5000
        });

        @if(Session::has('success'))
        Toast.fire({icon: 'success', title: `{{Session::get('success')}}`})
        @elseif(Session::has('warning'))
        Toast.fire({icon: 'warning', title: `{{Session::get('warning')}}`})
        @elseif(Session::has('error'))
        Toast.fire({icon: 'error', title: `{{Session::get('error')}}`})
        @elseif(Session::has('info'))
        Toast.fire({icon: 'info', title: `{{Session::get('info')}}`})
        @endif
    });

</script>

@yield('script')
</body>
</html>
