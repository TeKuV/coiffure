<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Nos réalisations </h2>
      </div>
    </div>
    <div class="row">
      @foreach ($coiffures as $coiffure)
        
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-2">
              <div class="flipper">
                <div class="front" style="background-image: url({{$coiffure->image()->path}});">
                  <div class="box">
                    <h2>{{$coiffure->prix}} $</h2>
                    <p><strong>{{$coiffure->intitule}}</strong></p>
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
    <div class="row">
        <div class="col-md-9 ftco-animate">
            <h4>Nous entretenons votre style ou vous en proposons de nouveau </h4>            
        </div>
    </div>
    </div>
    </section>