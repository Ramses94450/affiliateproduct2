<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from big-skins.com/frontend/foxic-html-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 11:50:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AFFILIATE PRODUCT 2</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/front/images/favicon.ico') }}" />
    <link href="{{ asset('assets/front/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/vendor/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/fonts/icomoon/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    @yield('stylesheets')
</head>
<body class="has-smround-btns has-loader-bg equal-height">
<!--Header section-->
@include('front.layouts.header')

<!--Content section -&#45;&#45; content place in app for each view that extend app-->
@yield('content')

<!--Footer section-->
@include('front.layouts.footer')

<script src="{{ asset('assets/front/js/vendor-special/lazysizes.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor-special/ls.bgset.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor-special/ls.aspectratio.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor-special/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontjs/vendor-special/jquery.ez-plus.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/vendor.min.js') }}"></script>
<script src="{{ asset('assets/front/js/app-html.js') }}"></script>
@yield('javascripts')
</body>

<!-- Mirrored from big-skins.com/frontend/foxic-html-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Feb 2021 11:52:49 GMT -->
</html>
