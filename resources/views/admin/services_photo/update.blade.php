@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier une photo</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Sous-service</li>
            <li class="breadcrumb-item active">Modifier un sous-service</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('services_photo.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des sous-services</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" enctype="multipart/form-data" action="{{route('services_photo.update',[$photo->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="designation" class="form-label">Désignation<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="nom" value="{{$photo->designation_sous_service}}" name="designation">
                    @if ($errors->has('designation'))
                        <p>{{ $errors->first('designation')}}</p>
                    @endif
                    
                </div>
                <div class="col-md-6">
                    <label for="photo" class="form-label">Photo<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required value="{{$photo->photo}}" id="photo" name="photo">
                    @if ($errors->has('photo'))
                        <p>{{ $errors->first('photo')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="service" class="form-label">Service<span style="color: red">*</span> </label>
                    <select name="service" required aria-placeholder="Veuillez selectionner le service" id="service" class="form-control">
                        @foreach ($service as $var)
                        <option value="{{$var->id}}">{{$var->designation}}</option>
                        @endforeach
                        @if ($errors->has('service'))
                            <p>{{ $errors->first('service')}}</p>
                        @endif
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="description" class="form-label">Description<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="description" name="description">
                    @if ($errors->has('description'))
                        <p>{{ $errors->first('description')}}</p>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
