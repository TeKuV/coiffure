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
                            <h5> Nouveau <small> Utilisateur.</small></h5>
                            <div class="ibox-tools">
                                <a href="{{route('users.index')}}">
                                    <i class="fa fa-chevron-left"></i>
                                    Retour
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{route('users.store')}}">
                                @csrf

                                <div class="form-group"><label class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10"><input type="email" class="form-control" name="email"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10"><input type="password" class="form-control" name="password"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Roles</label>
                                    <div class="col-sm-10">
                                        <select name="role" class="form-control" id="">
                                            <option selected disabled>--choose one--</option>
                                            @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->intitule}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" > Annuler </button>
                                        <button class="btn btn-primary" type="submit"> Créer </button>
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