@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier un article</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Articles</li>
            <li class="breadcrumb-item active">Modifier un article</li>
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
            <form class="row g-3" enctype="multipart/form-data" action="{{route('articles.update',[$article->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="titre" value="{{$article->titre}}" name="titre">
                    @if ($errors->has('titre'))
                        <p>{{ $errors->first('titre')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="photo" class="form-label">Photo<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="photo" value="{{$article->photo}}" name="photo">
                    @if ($errors->has('photo'))
                        <p>{{ $errors->first('photo')}}</p>
                    @endif
                </div>


                <div class="col-md-6">
                    <label for="contenu" class="form-label">Contenu<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="contenu" value="{{$article->contenu}}" name="contenu">
                    @if ($errors->has('contenu'))
                        <p>{{ $errors->first('contenu')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="service" class="form-label">Service<span style="color: red">*</span> </label>
                    <select name="service" required id="service" class="form-control">
                        <option value="Rien">Sélectionnez le service</option>
                        @foreach ($service as $var)
                            @if ($var->id ==  $article->id_service)
                                <option selected value="{{$var->id}}">{{$var->designation}}</option>
                            @else
                            <option value="{{$var->id}}">{{$var->designation}}</option>
                            @endif
                        @endforeach
                        @if ($errors->has('service'))
                            <p>{{ $errors->first('service')}}</p>
                        @endif
                    </select>
                </div>

                {{--<div class="col-md-6">
                    <label for="video" class="form-label">Video<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="video" value="{{$article->video}}" name="video">
                    @if ($errors->has('video'))
                        <p>{{ $errors->first('video')}}</p>
                    @endif
                </div>--}}


                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
