@extends('pages.master')
@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span>
                        <span>Blog</span>
                    </p>
                    <h1 class="mb-3 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 text-white">
                    <p><span>Address:</span><a
                            href="http://maps.google.com/?q=10700 woodmeadow Pkwy Dallas Tx 75228, Dallas Texas"> 10700
                            woodmeadow Pkwy Dallas Tx 75228,Dallas Texas</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+214 2511804</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:contact@nomdedomaine.com">contact@nomdedomaine.com</a></p>
                </div>
                {{-- <<div class="col-md-3">
      p><span>Website</span> <a href="#">yoursite.com</a></p>
    </div> --}}
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your whatsapp number">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="subject" id="subject">
                                <option value="" class="text-gray-300">Select a hairstyle</option>
                                @foreach ($coiffures as $coiffure)

                                    <option value="{{ $coiffure->id }}">{{ $coiffure->intitule }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6" id="map"></div>
            </div>
        </div>
    </section>
@endsection
