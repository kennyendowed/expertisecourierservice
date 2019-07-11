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
  <div id="app">
      <!--==========================
  Header
============================-->


<!-- Navigation -->
@include('sitelayout.nav')

<br />


<!-- Page Content -->
<!-- <section class="py-5">
  <div class="container">
    <h1 class="font-weight-light">Half Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
  </div>
</section> -->
   <!-- Page Content -->
   <div class="container-fluid">

   <!--==========================
       Intro Section
     ============================-->
