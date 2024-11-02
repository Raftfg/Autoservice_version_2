@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Modifier une equipe</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
            <li class="breadcrumb-item">Equipes</li>
            <li class="breadcrumb-item active">Modifier une equipe</li>
            </ol>
        </nav>
        </div><!-- End Ptelephone Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('equipes.index')}}" class="btn btn-block btn-primary float-right" style="margin-bottom: 5px;float: right">Liste des equipes</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
            <!-- Multi Columns Form -->
            <form class="row g-3" enctype="multipart/form-data" action="{{route('equipes.update',[$equipe->id])}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required value="{{$equipe->nom}}" id="nom" name="nom">
                    @if ($errors->has('nom'))
                        <p>{{ $errors->first('nom')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénoms<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required value="{{$equipe->prenom}}" id="prenom" name="prenom">
                    @if ($errors->has('prenom'))
                        <p>{{ $errors->first('prenom')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="role" class="form-label">Role<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" value="{{$equipe->role}}" required id="role" name="role">
                    @if ($errors->has('role'))
                        <p>{{ $errors->first('role')}}</p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="qualification" class="form-label">Qualification<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" name="qualification" value="{{$equipe->qualification}}" required id="qualification">
                    @if ($errors->has('qualification'))
                        <p>{{ $errors->first('qualification')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="service" class="form-label">Service<span style="color: red">*</span> </label>
                    <select name="service" required id="service" class="form-control">
                        <option value="Rien">Sélectionnez le service</option>
                        @foreach ($service as $var)
                        <option value="{{$var->id}}">{{$var->designation}}</option>
                        @endforeach
                        @if ($errors->has('service'))
                            <p>{{ $errors->first('service')}}</p>
                        @endif
                    </select>
                </div>

                
                <div class="col-md-6">
                    <label for="avatar" class="form-label">Avatar<span style="color: red">*</span> </label>
                    <input type="file" class="form-control" required id="avatar" value="{{$equipe->avatar}}" name="avatar">
                    @if ($errors->has('avatar'))
                        <p>{{ $errors->first('avatar')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="facebook" class="form-label">Facebook<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="facebook"value="{{$equipe->facebook}}" name="facebook">
                    @if ($errors->has('facebook'))
                        <p>{{ $errors->first('facebook')}}</p>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="whatsapp" class="form-label">WhatsApp<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="whatsapp" value="{{$equipe->whatsApp}}" name="whatsapp">
                    @if ($errors->has('whatsapp'))
                    <p>{{ $errors->first('whatsapp')}}</p>
                    @endif
                </div>
                
                <div class="col-md-6">
                    <label for="gmail" class="form-label">Gmail<span style="color: red">*</span> </label>
                    <input type="email" class="form-control" required id="gmail" value="{{$equipe->gmail}}" name="gmail">
                    @if ($errors->has('gmail'))
                    <p>{{ $errors->first('gmail')}}</p>
                    @endif
                </div>
                
                <div class="col-md-6">
                    <label for="status" class="form-label">Status<span style="color: red">*</span> </label>
                    <input type="text" class="form-control" required id="status" value="{{$equipe->status}}" name="status">
                    @if ($errors->has('status'))
                    <p>{{ $errors->first('status')}}</p>
                    @endif
                </div>
                
                <div class="col-md-12">
                    <label for="description" class="form-label">Description<span style="color: red">*</span> </label>
                    <textarea class="form-control" name="description" id="description" value="{{$equipe->description}}" cols="15" rows="2"></textarea>
                    @if ($errors->has('description'))
                        <p>{{ $errors->first('description')}}</p>
                    @endif
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Modifer</button>
                </div>
            </form>
            </div>
        </div>
        </section>
    </main>
@endsection
