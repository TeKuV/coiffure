@extends('pages.master')
@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Accueil</a></span> <span>catalogue</span></p>
          <h1 class="mb-3 bread">WELL EXPERIENCED HAIRDRESSER</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
    <div class="row">
        @foreach ($coiffures as $coiffure)
        
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-2">
              <div class="flipper">
                <div class="front" style="background-image: url({{$coiffure->image()->path}});">
                  <div class="box">
                    <h2>{{$coiffure->prix}} $</h2>
                    <p>{{$coiffure->intitule}}</p>
                  </div>
                </div>
                <div class="back">
                  <!-- back content -->
                  <blockquote>
                    <p>{{$coiffure->details}}</p>
                  </blockquote>
                  <div class="author d-flex">
                    <div class="image mr-3 align-self-center">
                      <div class="img" style="background-image: url({{$coiffure->image()->path}});"></div>
                    </div>
                    <div class="name align-self-center">{{$coiffure->prix}} $ <span class="position">{{$coiffure->intitule}}</span></div>
                  </div>
                </div>
              </div>
            </div> <!-- .flip-container -->
          </div>
        @endforeach
        
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <!--<li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>-->
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</section>


@endsection