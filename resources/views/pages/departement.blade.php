@extends('pages.master')
@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/')}}">Accueil</a></span> <span>Departments</span></p>
          <h1 class="mb-3 bread">Departments</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="dept d-md-flex">
                    <a href="department-single.html" class="img" style="background-image: url(images/dept-1.jpg);"></a>
                    <div class="text p-4">
                        <h3><a href="department-single.html">Dental Department</a></h3>
                        <p><span class="loc">203 Fake St. California, USA</span></p>
                        <p><span class="doc">22 Doctors</span></p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul>
                            <li><span class="ion-ios-checkmark"></span>Emergency</li>
                            <li><span class="ion-ios-checkmark"></span>Laboratory</li>
                            <li><span class="ion-ios-checkmark"></span>Dental</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="dept d-md-flex">
                    <a href="department-single.html" class="img" style="background-image: url(images/dept-2.jpg);"></a>
                    <div class="text p-4">
                        <h3><a href="department-single.html">Surgical Department</a></h3>
                        <p><span class="loc">203 Fake St. California, USA</span></p>
                        <p><span class="doc">22 Doctors</span></p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul>
                            <li><span class="ion-ios-checkmark"></span>Emergency</li>
                            <li><span class="ion-ios-checkmark"></span>Laboratory</li>
                            <li><span class="ion-ios-checkmark"></span>Dental</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="dept d-md-flex">
                    <a href="department-single.html" class="img" style="background-image: url(images/dept-3.jpg);"></a>
                    <div class="text p-4">
                        <h3><a href="department-single.html">Neurological Department</a></h3>
                        <p><span class="loc">203 Fake St. California, USA</span></p>
                        <p><span class="doc">22 Doctors</span></p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul>
                            <li><span class="ion-ios-checkmark"></span>Emergency</li>
                            <li><span class="ion-ios-checkmark"></span>Laboratory</li>
                            <li><span class="ion-ios-checkmark"></span>Dental</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex ftco-animate">
                <div class="dept d-md-flex">
                    <a href="department-single.html" class="img" style="background-image: url(images/dept-4.jpg);"></a>
                    <div class="text p-4">
                        <h3><a href="department-single.html">Ophthalmological Department</a></h3>
                        <p><span class="loc">203 Fake St. California, USA</span></p>
                        <p><span class="doc">22 Doctors</span></p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <ul>
                            <li><span class="ion-ios-checkmark"></span>Emergency</li>
                            <li><span class="ion-ios-checkmark"></span>Laboratory</li>
                            <li><span class="ion-ios-checkmark"></span>Dental</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Laboratory Test</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div id="accordion">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Tummy Tuck <small>$99.00</small><span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menuone" class="collapse show">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Liposuction <small>$99.00</small> <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menutwo" class="collapse">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Cosmetic Surgery <small>$99.00</small> <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menu3" class="collapse">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">Facial Reconstruciton <small>$99.00</small> <span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menu4" class="collapse">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">Breast implants <small>$99.00</small><span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menu5" class="collapse">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-header">
                                      <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">Ear Pinning <small>$99.00</small><span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
                            </div>
                            <div id="menu6" class="collapse">
                              <div class="card-body">
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('sections.personnel')
@endsection