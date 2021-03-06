@extends('admin.master')

@section('head')

@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">
        @include('admin.topbar')
        <div class="wrapper wrapper-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oups !</strong> Il y a eu quelques problèmes avec votre entrée.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Mise à jour <small> de la categorie.</small></h5>
                            <div class="ibox-tools">
                                <a href="{{route('categories.index')}}">
                                    <i class="fa fa-chevron-left"></i>
                                    Retour
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{route('categories.update', $category->id)}}">
                            @csrf
                            @method('PUT')
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Titre</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" value="{{$category->intitule}}" name="intitule"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" value="{{$category->description}}" name="details"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <input type="button" class="btn btn-white" onclick=window.location.href="{{url()->previous()}}" value="back">
                                        <button class="btn btn-primary" type="submit"> Save </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('admin.footer')
    </div>
@endsection

@section('bottom')

@endsection
