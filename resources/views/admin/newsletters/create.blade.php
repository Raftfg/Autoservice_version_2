@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Ajouter un newsletter</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Newsletters</li>
            <li class="breadcrumb-item active">Ajouter un newsletter</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('newsletters.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des newsletters</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" action="{{route('newsletters.store')}}" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="mail" class="form-label">Mail<span style="color: red">*</span> </label>
                    <input type="mail" class="form-control" required id="mail" name="mail">
                    @if ($errors->has('mail'))
                        <p>{{ $errors->first('mail')}}</p>
                    @endif
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ajouter un newsletter</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
