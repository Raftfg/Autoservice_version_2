@extends('layouts.base')
@section('contenu')
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Ajouter un parent</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Parent</li>
            <li class="breadcrumb-item active">Ajouter un parent</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="/showparents" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des parents</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="/addParents" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom du parent<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="nom" name="nom">
                    @if ($errors->has('nom'))
                        <p>{{ $errors->first('nom')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prenom du parent<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="prenom" name="prenom">
                    @if ($errors->has('prenom'))
                        <p>{{ $errors->first('prenom')}}</p>
                    @endif
                </div>


                <div class="col-md-6">
                    <label for="email" class="form-label">Email du parent<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="email" name="email">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Password du parent<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="password" name="password">
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="sexe" class="form-label">Sexe du parent<span style="color: red">*</span> </label>
                    <select name="sexe" required id="sexe" class="form-control">
                        <option value="Rien">Sélectionnez le sexe</option>
                        <option value="Femme">Femme</option>
                        <option value="Homme">Homme</option>
                        <option value="Personnaliser">Personnaliser</option>
                        @if ($errors->has('sexe'))
                            <p>{{ $errors->first('sexe')}}</p>
                        @endif
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="telephone" class="form-label">Téléphone du parent<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                    @if ($errors->has('telephone'))
                        <p>{{ $errors->first('telephone')}}</p>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ajouter un parent</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
