@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier un contact</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Contacts</li>
            <li class="breadcrumb-item active">Modifier un contact</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('contacts.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des contacts</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('contacts.update',[$contact->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="nom" value="{{$contact->nom}}" name="nom">
                    @if ($errors->has('nom'))
                        <p>{{ $errors->first('nom')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="logo" class="form-label">Mail<span style="color: red">*</span> </label>
                    <input type="mail" class="form-control" required id="mail" value="{{$contact->mail}}" name="mail">
                    @if ($errors->has('mail'))
                        <p>{{ $errors->first('mail')}}</p>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="numero" class="form-label">Numéro<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="numero" value="{{$contact->numero}}" name="numero">
                    @if ($errors->has('numero'))
                        <p>{{ $errors->first('numero')}}</p>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="suggestion" class="form-label">Suggestion<span style="color: red">*</span> </label>
                    <textarea class="form-control" name="suggestion" id="suggestion" value="{{$contact->suggestion}}" cols="15" rows="2"></textarea>
                    @if ($errors->has('suggestion'))
                        <p>{{ $errors->first('suggestion')}}</p>
                    @endif
                </div>
                <div class="col-md-12">
                    <label for="message" class="form-label">Message<span style="color: red">*</span> </label>
                    <textarea class="form-control" name="message" id="message" value="{{$contact->message}}" cols="15" rows="2"></textarea>
                    @if ($errors->has('message'))
                        <p>{{ $errors->first('message')}}</p>
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
