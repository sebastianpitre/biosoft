@extends('layouts.main')

@section('content')

<body class="about-us bg-gray-100">

@include('includes.panel.nav')
<main class="main-content mt-0 ps">
<div class="page-header min-vh-100" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/error-500.jpg');">
<span class="mask bg-gradient-success opacity-4"></span>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-7 mx-auto text-center">
<h1 class="display-1 text-bolder text-white fadeIn1 fadeInBottom mt-5">¡Oh, no!</h1>
<h2 class="fadeIn3 fadeInBottom mt-3 text-white">Ave no encontrada</h2>
<p class="lead fadeIn2 fadeInBottom text-white">No se encontraron aves con el nombre "{{ $searchTerm }}" </p>
<a href="{{ route('welcome') }}" class="btn bg-gradient-dark mt-4 fadeIn2 fadeInBottom">Ir a ala pagína de inicio</a>
</div>
</div>
</div>
</div>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>
  

    
@include('includes.panel.footerlan')
</body>
@endsection
