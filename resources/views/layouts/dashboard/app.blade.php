<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Home</title>
    <!-- Favicon -->
    <link rel="icon" href="{{url('/')}}/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/argon.css?v=1.2.1" type="text/css">
        @notifyCss
    @livewireStyles
    @stack('css')
</head>

<body>
<!-- Sidenav -->
@include('layouts.dashboard.partials.navbar')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.dashboard.partials.topnav')
    <!-- Header -->
    <!-- Header -->
    <x-dashboard.breadcamb title="Home" />
    <!-- Page content -->
    <div class="container-fluid mt--6">
        @yield('content')
        <!-- Footer -->
            @include('notify::messages')
{{--        @include('layouts.dashboard.partials.footer')--}}
    </div>


    <x-dashboard.form.transfer />
    <x-dashboard.form.withdraw />
    <x-dashboard.form.topup />


</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{url('/')}}/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{url('/')}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="{{url('/')}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{url('/')}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="{{url('/')}}/assets/js/argon.js?v=1.2.1"></script>

@stack('js')

@notifyJs
@livewireScripts

</body>

</html>
