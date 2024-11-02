@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Ajouter un utilisateur</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Utilisateurs</li>
            <li class="breadcrumb-item active">Ajouter un utilisateur</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('utilisateurs.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des utilisateurs</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" enctype="multipart/form-data" action="{{route('utilisateurs.store')}}" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Nom<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="name" name="name">
                    @if ($errors->has('name'))
                        <p>{{ $errors->first('name')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="logo" class="form-label">E-mail<span style="color: red">*</span> </label>
                    <input type="email" class="form-control" required id="email" name="email">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email')}}</p>
                    @endif
                </div> 
                <div class="col-md-6">
                    <label for="password" class="form-label">Mot de passe<span style="color: red">*</span> </label>
                    <input type="password" class="form-control" required id="password" name="password">
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="role" class="form-label">Role<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="role" name="role">
                    @if ($errors->has('role'))
                        <p>{{ $errors->first('role')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="telephone" class="form-label">Téléphone<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="telephone" name="telephone">
                    @if ($errors->has('telephone'))
                        <p>{{ $errors->first('telephone')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="avatar" class="form-label">Avatar<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="avatar" name="avatar">
                    @if ($errors->has('avatar'))
                    <p>{{ $errors->first('avatar')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="ville" class="form-label">Ville<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="ville" name="ville">
                    @if ($errors->has('ville'))
                        <p>{{ $errors->first('ville')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="pays" class="form-label">Pays<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="pays" name="pays">
                    @if ($errors->has('pays'))
                        <p>{{ $errors->first('pays')}}</p>
                    @endif
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ajouter un utilisateur</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
