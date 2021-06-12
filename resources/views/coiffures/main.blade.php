@extends('admin.master')
    
@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">
        @include('admin.topbar')
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        <div class="wrapper wrapper-content">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Hairstyle list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <a>Catalog</a>
                        </li>
                    </ol>
                    <div class="pull-right">
                        <a href="{{route('coiffures.create')}}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            New
                        </a>
                    </div>
                </div>
                <div class="col-lg-2">
            
                </div>
            </div>

            @yield('sub-content')

        </div>
        @include('admin.footer')
    </div>
@endsection

@section('bottom')

@endsection