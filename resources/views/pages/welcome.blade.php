@extends('pages.master')
@section('content')

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <h1 class="mb-4">Miss B African Hair Braiding</h1>
                </div>
            </div>
        </div>
    </div>

    @include('pages.components.catalog')

    @include('pages.components.services')

    <section class="ftco-services">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master"
                            role="tab" aria-controls="v-pills-master" aria-selected="true"><img width="50px"
                                src="images/icon/icn.png" alt="" srcset="">About Us </a>

                        <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet"
                            role="tab" aria-controls="v-pills-buffet" aria-selected="false"><img width="85px"
                                src="images/icon/icn4.png" alt="" srcset="">Our Service</a>

                        <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness"
                            role="tab" aria-controls="v-pills-fitness" aria-selected="false"><img width="50px"
                                src="images/icon/icn2.png" alt="" srcset="">Hairdresser</a>

                        <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception"
                            role="tab" aria-controls="v-pills-reception" aria-selected="false"><img width="80px"
                                src="images/icon/icn3.png" alt="" srcset=""> Home intervention</a>

                        <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab"
                            aria-controls="v-pills-sea" aria-selected="false"><img width="45px" src="images/icon/icn1.png"
                                alt="" srcset=""> How to get in touch?</a>

                    </div>
                </div>
                <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

                    <div class="tab-content pl-md-5" id="v-pills-tabContent">

                        <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel"
                            aria-labelledby="v-pills-master-tab">
                            <img width="150px" src="images/icon/icon.png" alt="" srcset="">
                            <h2 class="mb-4">About us </h2>
                        </div>

                        <div class="tab-pane fade py-5" id="v-pills-buffet" role="tabpanel"
                            aria-labelledby="v-pills-buffet-tab">
                            <img width="150px" src="images/icon/icon4.png" alt="" srcset="">
                            <h2 class="mb-4">Our services</h2>

                        </div>

                        <div class="tab-pane fade py-5" id="v-pills-fitness" role="tabpanel"
                            aria-labelledby="v-pills-fitness-tab">
                            <img width="100px" src="images/icon/icon2.png" alt="" srcset="">
                            <h2 class="mb-4">Le salon de coiffure</h2>
                        </div>

                        <div class="tab-pane fade py-5" id="v-pills-reception" role="tabpanel"
                            aria-labelledby="v-pills-reception-tab">
                            <img width="100px" src="images/icon/icon3.png" alt="" srcset="">
                            <h2 class="mb-4">Home intervention</h2>

                        </div>

                        <div class="tab-pane fade py-5" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                            <img width="150px" src="images/icon/icon1.png" alt="" srcset="">
                            <h2 class="mb-4"><a href="{{ route('contacts.index') }}">Conctact us?</a></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
