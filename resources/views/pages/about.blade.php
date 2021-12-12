@extends('pages.master')
  @section('content')
<div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread">About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section-2">
    <div class="container-fluid d-flex">
      <div class="section-2-blocks-wrapper row no-gutters">
        <div class="img col-sm-12 col-lg-6" style="background-image: url('images/about.jpg');">
          {{-- <a href="https://vimeo.com/45830194" class="button"><span class="ion-ios-play"></span></a> --}}
        </div>
        <div class="text col-lg-6 ftco-animate">
          <div class="text-inner align-self-start">

            <h3>text here</h3>
            <p>text</p>

            <p>text</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('pages.components.catalog')

  @include('pages.components.services')

  @endsection
