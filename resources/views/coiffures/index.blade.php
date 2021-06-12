@extends('coiffures.main')

@section('sub-content')
    <div class="wrapper wrapper-content animated fadeInRight">
         
        <div class="row">
            @foreach ($coiffures as $coiffure)
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <img class="product-imitation" style="width: 100%" src="{{$coiffure->image()->path}}" alt="">
                        <div class="product-desc">
                            <span class="product-price">
                                $ {{$coiffure->prix}}
                            </span>
                            <small class="text-muted">{{$coiffure->category()->intitule}}</small>
                            <a href="{{route('coiffures.show', $coiffure->id)}}" class="product-name"> {{$coiffure->intitule}} </a>

                            <div class="small m-t-xs">
                                {{$coiffure->intitule}}
                            </div>
                            <div class="m-t text-righ">

                                <a href="{{route('coiffures.show', $coiffure->id)}}" class="btn btn-xs btn-outline btn-primary">More <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

    </div>
@endsection