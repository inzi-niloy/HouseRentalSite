<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{asset('/front/')}}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/')}}/styles/responsive.css">



</head>

<body>

<div class="super_container">

    <!-- Header -->

@include('front.includes.header')
@include('front.includes.banner')


  @yield('body')

@include('front.includes.newsletter')
@include('front.includes.brands')
    <!-- Footer -->

 @include('front.includes.footer')
    <!-- Copyright -->

@include('front.includes.copyright')
</div>

<script src="{{asset('/front/')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/front/')}}/styles/bootstrap4/popper.js"></script>
<script src="{{asset('/front/')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{asset('/front/')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('/front/')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('/front/')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('/front/')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('/front/')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('/front/')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{asset('/front/')}}/plugins/slick-1.8.0/slick.js"></script>
<script src="{{asset('/front/')}}/plugins/easing/easing.js"></script>
<script src="{{asset('/front/')}}/js/custom.js"></script>
</body>

</html>