@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Newsletters</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item">Newsletter</li>
                    <li class="breadcrumb-item active">Liste des newsletters</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{route('newsletters.create')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Ajouter un newsletter</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Liste des newsletters</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        @php
                                            $i = 0
                                        @endphp
                                        <th scope="col">N°</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Date de creation</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($letter as $var)
                                    <tr>
                                            @php
                                                $i = $i + 1
                                            @endphp
                                            <td>{{ $i }}</td>
                                            <td>{{ $var->email }}</td>
                                            <td>{{ $var->created_at }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('newsletters.edit',[$var->id])}}">Modifier</a>
                                                <a><form style="display:inline" action="{{route('newsletters.destroy',[$var->id])}}" method="post">
                                                    <input class="btn btn-danger" type="submit" value="Supprimer" />
                                                    <input type="hidden" name="_method" value="delete" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form></a>
                                            </td>
                                            
                                    </tr>
                                    @empty
                                    <tr><td  colspan="7" class="text-center">Pas de newsletter enregistré pour l'instant</td></tr>
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