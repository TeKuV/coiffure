@extends('pages.master')
@section('content')


<div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Accueil</a></span> <span>Blog</span></p>
          <h1 class="mb-3 bread">Blog</h1>
        </div>
      </div>
    </div>
  </div>
  @include('sections.promotion')
    
@endsection