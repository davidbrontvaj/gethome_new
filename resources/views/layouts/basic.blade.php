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
  <div class="topbar grey">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>U nás si zaručene nájdeš svoj podnájom.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
      <li><a href="submit_property.html"><i class="icon-icons215"></i>Pridať inzerát</a></li>
      <li><a href="login.html"><i class="icon-icons179"></i>Prihlásiť sa / Zaregistrovať sa</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="attr-nav">
            <ul class="social_share clearfix">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="#"><i class="icon-google4"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand sticky_logo" href="index3.html"><img src="images/logo-white.png" class="logo" alt=""></a>
          </div> <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
              
              <li><a href="contact.html">Úvod</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->


<!-- Search -->
<section class="property-query-area padding_bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">Vyhľadávanie</h2>
        <p class="heading_space">Vyfiltrujte si to, čo potrebujete</p>
      </div>
    </div>
    <div class="row">
      <form class="callus">
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select>
                <option selected="" value="any">Location</option>
                <option>All areas</option>
                <option>Bayonne </option>
                <option>Greenville</option>
                <option>Manhattan</option>
                <option>Queens</option>
                <option>The Heights</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select>
                <option class="active">Property Type</option>
                <option>All areas</option>
                <option>Bayonne </option>
                <option>Greenville</option>
                <option>Manhattan</option>
                <option>Queens</option>
                <option>The Heights</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select>
                <option class="active">Property Status</option>
                <option>All areas</option>
                <option>Bayonne </option>
                <option>Greenville</option>
                <option>Manhattan</option>
                <option>Queens</option>
                <option>The Heights</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="row search-2">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Min Beds</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Min Baths</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8 bottom15">
              <div class="single-query-slider">
                <label>Price Range:</label>
                <div class="price text-right">
                  <span>$</span>
                  <div class="leftLabel"></div>
                  <span>to $</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-right form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="group-button-search">
      <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
        <div class="text-1">Show more search options</div>
        <div class="text-2 hide">less more search options</div>
      </a>
    </div>
    <div class="search-propertie-filters collapse">
      <div class="container-2">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Search End -->



  @yield('content')



 <!--Footer-->
<footer class="padding_top footer2">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="javascript:void(0)" class="logo bottom30"><img src="images/logo-white.png" alt="logo"></a>
          <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
            tempor cum consectetuer 
            adipiscing.
          </p>
          <p class="bottom15">If you are interested in castle do not wait and <a href="javascript:void(0)">BUY IT NOW!</a></p>
          <ul class="social_share">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
            <li class="active"><a href="javascript:void(0)"><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
            <li><a href="javascript:void(0)"> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>West Side, New York</a></li>
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>Upper East Side, New York</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Get in Touch</h4>
          <ul class="getin_touch">
            <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
            <li><a href="javascript:void(0)"><i class="icon-icons142"></i>info@castle.com</a></li>
            <li><a href="javascript:void(0)"><i class="icon-browser2"></i>www.castle.com</a></li>
            <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--CopyRight-->
<div class="copyright index2">
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p>Copyright &copy; 2017 <span>Castle</span>. All rights reserved.</p>
        </div>
        <div class="col-md-5 text-right">
          <p>Designed by <a href="javascript:void(0)">Brighthemes</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer end -->  

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
	<!--    <script src="{{ asset('js/neary-by-place.js') }}"></script> 
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script> 
	<script src="js/google-map.js') }}"></script>  -->
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>

	<!-- Scripts end -->

</body>
</html>