@extends('admin.master')

@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
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
                            <h5> Mise à jour <small> du role.</small></h5>
                            <div class="ibox-tools">
                                <a href="{{route('roles.index')}}">
                                    <i class="fa fa-chevron-left"></i>
                                    Retour
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{route('roles.update', $role->id)}}">
                            @csrf
                            @method('PUT')
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Titre</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" value="{{$role->intitule}}" name="intitule"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" value="{{$role->detail}}" name="detail"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Permissions </label>
                                    <div class="col-sm-10">
                                        @foreach ($permissions as $permission)
                                            @if (in_array($permission->intitule, $roles_permissions))
                                                <input type="checkbox" class="" name="permissions[]" id="{{$permission->id}}" value="{{$permission->id}}" checked>
                                            @else
                                                <input type="checkbox" class="" name="permissions[]" id="{{$permission->id}}" value="{{$permission->id}}">  
                                            @endif
                                            <label class="" for="{{$permission->id}}" >{{$permission->intitule}}</label></br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" onclick=window.location.href="{{route('roles.index')}}"> Annuler </button>
                                        <button class="btn btn-primary" type="submit"> Sauvegarder </button>
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