<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Meal Management System</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets') }}/images/mms-logo3.PNG">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('dashboard_assets') }}/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('dashboard_assets') }}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('dashboard_assets') }}/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{ asset('dashboard_assets') }}/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/lib/helper.css" rel="stylesheet">
    <link href="{{ asset('dashboard_assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>

    @include('backend.partial.sidebar')
    @include('backend.partial.header')

    <div class="content-wrap">
        @yield('main')
    </div>

    <!-- jquery vendor -->
    <script src="{{ asset('dashboard_assets') }}/js/lib/jquery.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/jquery.nanoscroller.min.js"></script>

    <!-- nano scroller -->
    <script src="{{ asset('dashboard_assets') }}/js/lib/menubar/sidebar.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="{{ asset('dashboard_assets') }}/js/lib/bootstrap.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="{{ asset('dashboard_assets') }}/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/calendar-2/pignose.calendar.min.js"></script>
    {{-- <script src="{{ asset('dashboard_assets') }}/js/lib/calendar-2/pignose.init.js"></script> --}}


    <script src="{{ asset('dashboard_assets') }}/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/weather/weather-init.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/circle-progress/circle-progress-init.js"></script>
    {{-- <script src="{{ asset('dashboard_assets') }}/js/lib/chartist/chartist.min.js"></script> --}}
    <script src="{{ asset('dashboard_assets') }}/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    {{-- <script src="{{ asset('dashboard_assets') }}/js/lib/sparklinechart/sparkline.init.js"></script> --}}
    <script src="{{ asset('dashboard_assets') }}/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('dashboard_assets') }}/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->

    {{-- tostr --}}
    {{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "preventDuplicates": true,
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "200",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    {!! Toastr::message() !!}
    @stack('js')
</body>

</html>
