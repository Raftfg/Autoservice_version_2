@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier une commande</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Commandes</li>
            <li class="breadcrumb-item active">Modifier une commande</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('commandes.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des commandes</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('commandes.update',[$commande->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="utilisateur" class="form-label">Utilisateur<span style="color: red">*</span> </label>
                    <select name="utilisateur" required id="utilisateur" class="form-control">
                        <option value="Rien">Sélectionnez un utilisateur</option>
                        @foreach ($user as $var)
                        <option value="{{$var->id}}">{{$var->name}}</option>
                        @endforeach
                        @if ($errors->has('utilisateur'))
                            <p>{{ $errors->first('utilisateur')}}</p>
                        @endif
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="formation" class="form-label">Formation<span style="color: red">*</span> </label>
                    <select name="formation" required id="formation" class="form-control">
                        <option value="Rien">Sélectionnez une formation</option>
                        @foreach ($formation as $var)
                        <option value="{{$var->id}}">{{$var->designation}}</option>
                        @endforeach
                        @if ($errors->has('formation'))
                            <p>{{ $errors->first('formation')}}</p>
                        @endif
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Modifier une commande</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
