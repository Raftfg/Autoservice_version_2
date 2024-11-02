@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Ajouter un article</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Articles</li>
            <li class="breadcrumb-item active">Ajouter un article</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('articles.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des articles</a>
            </div>
        </div> 

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" enctype="multipart/form-data" action="{{route('articles.store')}}" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="titre" name="titre">
                    @if ($errors->has('titre'))
                        <p>{{ $errors->first('titre')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="photo" class="form-label">Photo<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="photo" name="photo">
                    @if ($errors->has('photo'))
                        <p>{{ $errors->first('photo')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="contenu" class="form-label">Contenu<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="contenu" name="contenu">
                    @if ($errors->has('contenu'))
                        <p>{{ $errors->first('contenu')}}</p>
                    @endif
                </div>
            
                <div class="col-md-6">
                    <label for="service" class="form-label">Service<span style="color: red">*</span> </label>
                    <select name="service" aria-placeholder="Sélectionnez le service" required id="service" class="form-control">
                        @foreach ($service as $var)
                        <option value="{{$var->id}}">{{$var->designation}}</option>
                        @endforeach
                        @if ($errors->has('service'))
                            <p>{{ $errors->first('service')}}</p>
                        @endif
                    </select>
                </div>

                {{--<div class="col-md-6">
                    <label for="video" class="form-label">Video<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="video" name="video">
                    @if ($errors->has('video'))
                        <p>{{ $errors->first('video')}}</p>
                    @endif
                </div>--}}

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ajouter un article</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
