<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('public/frontend/images/icons/favicon.png') }}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800,900']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="public/frontend/bootstrap/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/demo3.min.css') }}">
    {{-- tostr notification --}}
    <link rel="stylesheet" href="{{ URL::asset('admin/css/toastr/toastr.min.css') }}">
</head>

<body class="@yield('pageClass')">

    @yield('mainSection')

    <!-- Plugins JS File -->
    <script src="{{ asset('public/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <!-- jQuery -->
    {{-- <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script> --}}
    {{-- bootstrap --}}
    {{-- <script src="{{ asset('public/frontend/bootstrap/slim.min.js') }}"></script> --}}
    <script src="{{ asset('public/frontend/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('public/frontend/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('public/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/vendor/sticky/sticky.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('public/frontend/js/main.min.js') }}"></script>
    {{-- toastr alert --}}
    <script src="{{ URL::asset('admin/js/toastr.min.js') }}"></script>
    @yield('script')
</body>

</html>
