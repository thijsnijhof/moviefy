<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- HEADER -->
        <!-- ============================================================== -->
        @include('admin.includes.header')
        <!-- ============================================================== -->
        <!-- NAVBAR -->
        <!-- ============================================================== -->
        @include('admin.includes.sidenav')
        <!-- ============================================================== -->
        <!-- WRAPPER  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    {{-- JQUERY --}}
    {{-- BOOTSTRAP --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.flash_message').slideDown('slow');

            setTimeout(function(){
                $('.flash_message').slideUp('slow');
            },5000)
        })
    </script>

</body>

</html>
