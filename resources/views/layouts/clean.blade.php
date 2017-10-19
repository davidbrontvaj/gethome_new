<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href=" {{ asset('css/reality-icon.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/search.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/range-Slider.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/cubeportfolio.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('lib/bootstrap-datepicker/dist/css/bootstrap-datepicker.standalone.min.css') }}">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin-ext"
          rel="stylesheet">

</head>
<body>


<!--Loader-->
<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>
<!--Loader-->


<!--Header-->
<header class="layout_default">

    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo"><a href="/"><img alt="" src="images/logo_gethome.png"></a></div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 right">
                    <div class="info-box first">
                        <div class="icons"><i class="icon-telephone114"></i></div>
                        <ul>
                            <li><strong>Phone Number</strong></li>
                            <li>+1 900 234 567 - 68</li>
                        </ul>
                    </div>

                    <div class="info-box">
                        <div class="icons"><i class="icon-icons142"></i></div>
                        <ul>
                            <li><strong>Email Address</strong></li>
                            <li><a href="javascript:void(0)">info@castle.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Header Ends-->


@yield('content')




<!-- Scripts -->
<script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootsnav.js') }}"></script>
<script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/jquery-countTo.js') }}"></script>
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/range-Slider.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/selectbox-0.2.min.js') }}"></script>
<script src="{{ asset('js/zelect.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('lib/moment/src/moment.js') }}"></script>
<script src="{{ asset('lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>


<!--    <script src="{{ asset('js/neary-by-place.js') }}"></script>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script> 
	<script src="js/google-map.js') }}"></script>  -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/validate_form.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>

<!-- Scripts end -->

</body>
</html>