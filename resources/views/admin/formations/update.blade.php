@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier ma formation</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Formation</li>
            <li class="breadcrumb-item active">Modifier ma formation</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('formations.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des formations</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('formations.update',[$check->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-12">
                    <label for="designation" class="form-label">Désignation<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="designation" value="{{$check->designation}}" name="designation">
                    @if ($errors->has('designation'))
                        <p>{{ $errors->first('designation')}}</p>
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