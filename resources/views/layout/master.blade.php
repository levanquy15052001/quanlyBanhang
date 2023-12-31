<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('template/assets/dest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/dest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/dest/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/dest/rs-plugin/css/responsive.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('template/assets/dest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/dest/css/animate.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('template/assets/dest/css/huong-style.css') }}">
    <link rel="stylesheet" href="{{asset('template/assets/dest/css/productstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
    @stack('style')
</head>

<body>

    @include('layout.header')
    <!-- #header -->

    <!--slider-->
    </div>

    @yield('content')
   <!-- .container -->

    @include('layout.footer')
    <!-- #footer -->

    @include('layout.copyright')

    <!-- include js files -->
    <script src="{{ asset('template/assets/dest/js/jquery.js') }}"></script>
    <script src="{{ asset('template/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/vendors/animo/Animo.js') }}"></script>
    <script src="{{ asset('template/assets/dest/vendors/dug/dug.js') }}"></script>
    <script src="{{ asset('template/assets/dest/js/scripts.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/assets/dest/js/custom2.js') }}"></script>
    <script src="{{asset('js/toastr.js')}}"></script>
    @stack('script')
    @include('common.toastr')
</body>

</html>
