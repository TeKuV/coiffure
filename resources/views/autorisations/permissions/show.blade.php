@extends('admin.master')
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">
        @include('admin.topbar')
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Vue détaillée sur <small>{{$permission->nom}}</small></h5>
                        <div class="ibox-tools">
                            <a href="{{route('permissions.index')}}">
                                <i class="fa fa-chevron-left"></i>
                                Retour
                            </a>
                            <a href="{{route('permissions.edit', $permission->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-lg-2 control-label">Titre</label>
                                <div class="col-lg-10">
                                    <p class="form-control-static"> {{$permission->intitule}} </p>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-lg-2 control-label">Description </label>
                                <div class="col-lg-10">
                                    <p class="form-control-static"> {{$permission->description}} </p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>
@endsection

@section('bottom')

@endsection