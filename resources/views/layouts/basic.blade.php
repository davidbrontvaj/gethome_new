<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

      @include('layouts.head-assets')

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


  @include('layouts.topbar')
  @include('layouts.header')
  @include('layouts.navigation')  


</header>
<!--Header Ends-->



  @yield('content')



 <!--Footer-->

@include('layouts.footer-big')
<!-- Footer end -->  

@include('layouts.scripts')

</body>
</html>