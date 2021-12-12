<!--<div class="col-md-6 col-lg-3 ftco-animate">-->
<div class="col-md-6 col-lg-3">
    <div class="block-2">
        <div class="flipper">
            <div class="front" style="background-image: url({{ $coiffure->image()->path }});">
                <div class="box">

                    <p class="text-white"><strong>{{ $coiffure->intitule }}</strong></p>
                </div>
            </div>
            <div class="back">
                <!-- back content -->
                <blockquote>
                    <p>{{ $coiffure->details }}</p>
                </blockquote>
                <div class="author d-flex">
                    <div class="image mr-3 align-self-center">
                        <div class="img" style="background-image: url({{ $coiffure->image()->path }});">
                        </div>
                    </div>
                    <div class="name align-self-center"> <span class="position text-xl">{{ $coiffure->intitule }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .flip-container -->
</div>
