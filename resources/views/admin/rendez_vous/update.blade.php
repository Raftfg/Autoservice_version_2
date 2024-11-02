@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier un rendez-vous</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Rendez-vous</li>
            <li class="breadcrumb-item active">Modifier un rendez-vous</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('rendez_vous.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des rendez-vous</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('rendez_vous.update',[$rdv->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail<span style="color: red">*</span> </label>
                    <input type="email" class="form-control" required id="email" value="{{$rdv->email}}" name="email">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="motif" class="form-label">Motif<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="motif" value="{{$rdv->motif}}" name="motif">
                    @if ($errors->has('motif'))
                        <p>{{ $errors->first('motif')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="heure" class="form-label">Heure<span style="color: red">*</span> </label>
                    <input type="time" class="form-control" value="{{$rdv->heure}}"  required id="heure" name="heure">
                    @if ($errors->has('heure'))
                        <p>{{ $errors->first('heure')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="entreprise" class="form-label">Entreprise<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" value="{{$rdv->entreprise}}" required id="entreprise" name="entreprise">
                    @if ($errors->has('entreprise'))
                        <p>{{ $errors->first('entreprise')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="nom" class="form-label">Nom<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" value="{{$rdv->nom}}" required id="nom" name="nom">
                    @if ($errors->has('nom'))
                        <p>{{ $errors->first('nom')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="message" class="form-label">Message<span style="color: red">*</span> </label>
                    <textarea class="form-control" value="{{$rdv->message}}" required id="message" name="message"></textarea>
                    @if ($errors->has('message'))
                        <p>{{ $errors->first('message')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="telephone" class="form-label">Téléphone<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" value="{{$rdv->telephone}}" required id="telephone" name="telephone">
                    @if ($errors->has('telephone'))
                        <p>{{ $errors->first('telephone')}}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="date_rendez_vous" class="form-label">Date Rendez-vous<span style="color: red">*</span> </label>
                    <input type="date" class="form-control" name="date_rendez_vous" value="{{$rdv->date_rendez_vous}}" id="date_rendez_vous">
                    @if ($errors->has('date_rendez_vous'))
                        <p>{{ $errors->first('date_rendez_vous')}}</p>
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
