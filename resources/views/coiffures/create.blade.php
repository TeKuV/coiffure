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
                            <h5> Nouveau <small> roles.</small></h5>
                            <div class="ibox-tools">
                                <a href="bac()">
                                    <i class="fa fa-chevron-left"></i>
                                    Retour
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{route('coiffures.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Title</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="intitule">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Category</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="category" id="category">
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->intitule}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Price</label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="prix" min="0">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Resume</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="details"></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Images</label>

                                    <div class="col-sm-10">
                                        <input type="file" name="images[]" id="docs" class="form-control" multiple accept="image/jpeg, image/png">
                                        @error('file')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
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
