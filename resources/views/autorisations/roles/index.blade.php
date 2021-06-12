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
                        <h2>roles</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">Acceuil</a>
                            </li>
                            <li>
                                <a>roles</a>
                            </li>
                            <li class="active">
                                <strong>Listes des roles</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Listes des roles donnants droits a des actions. </h5>
                            <div class="ibox-tools">
                                <a href="{{route('roles.create')}}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                     Nouveau
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Intitulé</th>
                            <th>Permission(s)</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $key => $role)
                        <tr class="gradeX">
                            <td>{{++$key}}</td>
                            <td>{{$role->intitule}}</td>
                            <td>
                                @foreach ($role->permissions() as $permissions)
                                    <ul>
                                        <li>{{$permissions->intitule}}</li>
                                    </ul>
                                @endforeach
                            </td>
                            <td class="center">
                                <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
        
                                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye"></i></a>

                                    <a class="btn btn-white" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit"></i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>N°</th>
                            <th>Intitulé</th>
                            <th>Permission(s)</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        </table>
                            </div>

                        </div>
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