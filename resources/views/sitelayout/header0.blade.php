     <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>@yield('title') - {{config('app.name')}}</title>
    <meta name="description" content=" ">
     <meta name="Author" content=" ">
<meta name="keywords" content=" " />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 days">
<!-- Favicons -->
<link href="{{URL::asset('img/favicon.png')}}" rel="icon">
<link href="{{URL::asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap core CSS -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2"> -->

    <!-- Styles -->
   <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <!-- Scripts -->


  </head>
    <body class="well">

      <!--==========================
  Header
============================-->


<!-- Navigation -->
@include('sitelayout.nav')

<br />
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/slider/download.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Expertise Courier Service</h2>
          <!-- <p class="lead">This is a description for the first slide.</p> -->
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slider/1562741152186.png')">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h2 class="display-4">Expertise Courier Service</h2>
          <p class="lead">This is a description for the second slide.</p> -->
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slider/IMG_20190710_093720_728.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Expertise Courier Service</h2>
          <!-- <p class="lead">This is a description for the second slide.</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<!-- Page Content -->
<!-- <section class="py-5">
  <div class="container">
    <h1 class="font-weight-light">Half Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
  </div>
</section> -->
   <!-- Page Content -->
   <div class="container">

   <!--==========================
       Intro Section
     ============================-->
