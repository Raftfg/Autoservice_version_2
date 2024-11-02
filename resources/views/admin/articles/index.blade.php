@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Articles</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item">Articles</li>
                    <li class="breadcrumb-item active">Liste des articles</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('articles.create') }}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Ajouter un article</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Liste des articles</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        @php
                                            $i = 0
                                        @endphp
                                        <th scope="col">N°</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Contenu</th>
                                        <th scope="col">Service</th>
                                        <th scope="col">Date de creation</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($article as $var)
                                    <tr>
                                            @php
                                                $i = $i + 1
                                            @endphp

                                            <td>{{ $i }}</td>
                                            <td>{{ $var->titre }}</td>
                                            <td>
                                                <img src="{{ asset('articles/'.$var->photo)}}" width="60px" alt="" srcset="">
                                            </td>
                                            <td>{{ $var->contenu }}</td>
                                            <td>{{ $var->services->designation }}</td>
                                            <td>{{ $var->created_at }}</td>
                                          
                                            <td style="display: flex; justify-content: space-between; align-items: center;">

                                                <a class="btn btn-warning btn-sm" href="{{ route('articles.edit', $var->id) }}"  >
                                                    <span class="fa fa-pencil"></span>
                                                </a>
                                            
                                                 <!-- Formulaire de suppression -->
                                               <form id="delete-form-{{ $var->id }}" action="{{ route('articles.destroy', $var->id) }}" method="post" style="display:inline;" >
                                                   @csrf
                                                   @method('delete')
                                                   <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setDeleteFormAction('{{ $var->id }}')">
                                                   <span class="fa fa-trash"></span>
                                                   </button>
                                               </form>
                                            </td>
                                    </tr>
                                    @empty
                                    <tr><td  colspan="7" class="text-center">Pas d'article enregistré pour l'instant</td></tr>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation de suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet article ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" id="confirm-delete">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<script>
    function setDeleteFormAction(articleId) {
        // Définit l'action du formulaire de suppression
        var form = document.getElementById('delete-form-' + articleId);
        document.getElementById('confirm-delete').onclick = function() {
            form.submit(); // Soumet le formulaire lorsque l'utilisateur confirme
        };
    }
</script>
   
@endsection