@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier un paramètre</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Paramètres</li>
            <li class="breadcrumb-item active">Modifier un paramètre</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section"> 
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('parametres.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des paramètres</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" enctype="multipart/form-data" action="{{route('parametres.update',[$garage->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="nom" value="{{$garage->nom}}" name="nom">
                    @if ($errors->has('nom'))
                        <p>{{ $errors->first('nom')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                            <label for="logo" class="form-label">Logo<span style="color: red">*</span> </label>
                            <input type="file" class="form-control" required id="logo" value="{{$garage->logo}}" name="logo">
                        </p>
                    @if ($errors->has('logo'))
                        <p>{{ $errors->first('logo')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="header_image_1" class="form-label">H_Image 1<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="header_image_1" value="{{$garage->header_image_1}}" name="header_image_1">
                    @if ($errors->has('header_image_1'))
                        <p>{{ $errors->first('header_image_1')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="header_image_2" class="form-label">H_Image 2<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="header_image_2" value="{{$garage->header_image_2}}" name="header_image_2">
                    @if ($errors->has('header_image_2'))
                        <p>{{ $errors->first('header_image_2')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="header_image_3" class="form-label">H_Image 3<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="header_image_3" value="{{$garage->header_image_3}}" name="header_image_3">
                    @if ($errors->has('header_image_3'))
                        <p>{{ $errors->first('header_image_3')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="about_image" class="form-label">About_Image<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="about_image" value="{{$garage->about_image}}" name="about_image">
                    @if ($errors->has('about_image'))
                        <p>{{ $errors->first('about_image')}}</p>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="about_title" class="form-label">About_Title<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" name="about_title" value="{{$garage->about_title}}" id="about_title">
                    @if ($errors->has('about_title'))
                        <p>{{ $errors->first('about_title')}}</p>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="about_texte" class="form-label">About_Texte<span style="color: red">*</span> </label>
                    <textarea class="form-control" name="about_texte" id="about_texte" value="{{$garage->about_texte}}" cols="15" rows="2"></textarea>
                    @if ($errors->has('about_texte'))
                        <p>{{ $errors->first('about_texte')}}</p>
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
