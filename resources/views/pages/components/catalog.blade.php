    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our realization</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($coiffures as $coiffure)

                    @include('pages.components.hairstyle')

                @endforeach
            </div>
        </div>
    </section>
