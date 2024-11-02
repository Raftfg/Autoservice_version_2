@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Equipes</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item">Equipes</li>
                    <li class="breadcrumb-item active">Liste des equipes</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{route('equipes.create')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Ajouter une equipe</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Liste des equipes</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        @php
                                            $i = 0
                                        @endphp
                                        <th scope="col">N°</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénoms</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Qualification</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Date de creation</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($equipe as $var)
                                    <tr>
                                            @php
                                                $i = $i + 1
                                            @endphp

                                            <td>{{ $i }}</td>
                                            <td>{{ $var->nom }}</td>
                                            <td>{{ $var->prenom }}</td>
                                            <td>{{ $var->role }}</td>
                                            <td>{{ $var->qualification }}</td>
                                            <td>{{ $var->id_service }}</td>
                                            <td>{{ $var->created_at }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('equipes.edit',[$var->id])}}">Modifier</a>
                                                <a><form style="display:inline" action="{{route('equipes.destroy',[$var->id])}}" method="post">
                                                    <input class="btn btn-danger" type="submit" value="Supprimer" />
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form></a>
                                            </td>
                                            
                                    </tr>
                                    @empty
                                    <tr><td  colspan="7" class="text-center">Pas d'équipe enregistrée pour l'instant</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection