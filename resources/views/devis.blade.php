@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Demande de devis</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
                        <li class="breadcrumb-item active"> Demande de devis </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <!-- End Cart -->
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" id="alert-message">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" id="alert-message">
                {{ session('error') }}
            </div>
        @endif
    </div>
    <script>
        // Disparaît automatiquement après 5 secondes (5000 ms)
        setTimeout(function() {
            const alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                alertMessage.style.transition = "opacity 0.5s ease"; // Transition douce
                alertMessage.style.opacity = "0"; // Disparaît en fondu
                setTimeout(() => alertMessage.remove(), 500); // Retirer l'élément du DOM après la transition
            }
        }, 5000); // 5000 ms = 5 secondes
    </script>    
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right #survey-form">
                        <h2 class="text-center">FORMULAIRE DE DEMANDE DE <span style="color: #226be2;">DEVIS</span></h2>
                        <form action="/devisform" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom</label> <span style="color: red;">*</span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom..." style="border: 2px solid blue;" >
                                        @if ($errors->has('name'))
                                            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ent">Entreprise</label>
                                        <input type="text" class="form-control" id="ent" name="entreprise" placeholder="Facultatif..." style="border: 2px solid blue;">
                                        @if ($errors->has('entreprise'))
                                            <p class="alert alert-danger">{{ $errors->first('entreprise') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label> <span style="color: red;">*</span>
                                        <input type="email" placeholder="Votre email" id="email" class="form-control" name="email" style="border: 2px solid blue;" >
                                        @if ($errors->has('email'))
                                            <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="numero">Téléphone</label> <span style="color: red;">*</span>
                                        <input type="tel" placeholder="Téléphone" id="numero" class="form-control" name="numero" style="border: 2px solid blue;" >
                                        @if ($errors->has('numero'))
                                            <p class="alert alert-danger">{{ $errors->first('numero') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pres">Service souhaité</label> <span style="color: red;">*</span> <br>
                                        <select name="prestation" id="pres" class="form-control" style="border: 2px solid blue; min-height: 40px;" >
                                            <option value="">Choisir services</option>
                                            <option value="Service - Vidange d'Huile Régulier">Service - Vidange d'Huile Régulier</option>
                                            <option value="Service - Vidange d'Huile Synthétique">Service - Vidange d'Huile Synthétique</option>
                                            <option value="Service - Vidange d'Huile & Insp">Service - Vidange d'Huile & Insp</option>
                                            <option value="Service - Pose de Pneus sur Jante">Service - Pose de Pneus sur Jante</option>
                                            <option value="Service - Pose & Équilibrage Pneus">Service - Pose & Équilibrage Pneus</option>
                                            <option value="Service - Rotation des Pneus">Service - Rotation des Pneus</option>
                                            <option value="Service - Alignement des Roues">Service - Alignement des Roues</option>
                                            <option value="Service - Vidange d'Huile Transmission">Service - Vidange d'Huile Transmission</option>
                                            <option value="Vérification - Système d'Échappement">Vérification - Système d'Échappement</option>
                                            <option value="Vérification - Système de Freins">Vérification - Système de Freins</option>
                                            <option value="Vérification - Sécuritaire en 50 pts">Vérification - Sécuritaire en 50 pts</option>
                                            <option value="Vérification - Batterie et Système de Charge">Vérification - Batterie et Système de Charge</option>
                                            <option value="Vérification - Scanner Témoin Moteur">Vérification - Scanner Témoin Moteur</option>
                                            <option value="Vérification - Système de Climatisation">Vérification - Système de Climatisation</option>
                                            <option value="Réparation - Mécanique Divers">Réparation - Mécanique Divers</option>
                                            <option value="Réparation - Système de Freins">Réparation - Système de Freins</option>
                                            <option value="Réparation - Suspension / Direction">Réparation - Suspension / Direction</option>
                                            <option value="Réparation - Système de Chauffage">Réparation - Système de Chauffage</option>
                                            <option value="Réparation - Système de Charge/Démarreur">Réparation - Système de Charge/Démarreur</option>
                                            <option value="Réparation - Système Électrique">Réparation - Système Électrique</option>
                                        </select>
                                        @if ($errors->has('prestation'))
                                            <p class="alert alert-danger">{{ $errors->first('prestation') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="message">Votre message</label> <span style="color: red;">*</span> <br>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="messages" placeholder="Votre Message" rows="4" style="border: 2px solid blue;" ></textarea>
                                        @if ($errors->has('messages'))
                                            <p class="alert alert-danger">{{ $errors->first('messages') }}</p>
                                        @endif
                                    </div>
    
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" type="submit">ENVOYER MA DEMANDE</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v1.jpg')}}" class="img_insta" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v2.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v3.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v4.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v5.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v6.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v7.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v8.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v9.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('assets/autoimages/v11.jpg')}}" class="img_insta"/>
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->
    @include('layouts.partials.footer')
    @endsection
