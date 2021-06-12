@extends('coiffures.main')
    
@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
    <link href="{{asset('admin/css/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/plugins/slick/slick-theme.css')}}" rel="stylesheet">
@endsection

@section('sub-content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox product-detail">
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-md-5">


                                <div class="product-images">
                                    @foreach ($coiffure->images() as $image)
                                    <div>
                                        <div class="image-imitation">
                                            <img style="width: 100%" src="{{asset($image->path)}}" alt="{{$coiffure->intitule}}">
                                        </div>
                                    </div>
                                    @endforeach
                                    


                                </div>

                            </div>
                            <div class="col-md-7">

                                <h2 class="font-bold m-b-xs">
                                    {{$coiffure->intitule}}
                                </h2>
                                <div class="m-t-md">
                                    <h2 class="product-main-price">$ {{$coiffure->prix}} <small class="text-muted">Exclude Tax</small> </h2>
                                </div>
                                <hr>

                                <h4>Hairstyle description</h4>

                                <div>
                                    <form action="{{route('coiffures.destroy', $coiffure->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i> Post</button>
                                            <button class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit </button>
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </div>
                                    </form>
                                    
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="ibox-footer">
                        <span class="pull-right">
                            Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                        </span>
                        The generated Lorem Ipsum is therefore always free
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('bottom')
    <!-- slick carousel-->
    <script src="{{asset('admin/js/plugins/slick/slick.min.js')}}"></script>

    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>
@endsection