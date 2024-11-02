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
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right #survey-form">
                        <h2 class="text-center">FORMULAIRE DE DEMANDE DE <span style="color: #226be2;"> DEVIS</span> </h2>
                        <form action="/contactez" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nom</label> <span style="color: red;">*</span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom... " style="border: 2px solid blue;">
                                        @if ($errors->has('name'))
                                        <p class="alert alert-danger">{{ $errors->first('name')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ent">Entreprise</label> 
                                        <input type="text" class="form-control" id="ent" name="entreprise" placeholder="Facultatif... " style="border: 2px solid blue;">
                                        @if ($errors->has('entreprise'))
                                        <p class="alert alert-danger">{{ $errors->first('entreprise')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">E-mail</label> <span style="color: red;">*</span>
                                        <input type="text" placeholder="Votre email" id="email" class="form-control" name="email" style="border: 2px solid blue;">

                                        @if ($errors->has('email'))
                                        <p class="alert alert-danger">{{ $errors->first('email')}}</p>
                                      @endif
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Téléphone</label> <span style="color: red;">*</span>
                                        <input type="numero" placeholder="Téléphone" id="numero" class="form-control" name="numero" value="" size="40" style="border: 2px solid blue;">

                                        @if ($errors->has('numero'))
                                        <p class="alert alert-danger">{{ $errors->first('numero')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pres">Prestation</label> <span style="color: red;">*</span> <br>
                                        <select name="" id="pres"   class="form-control" style="border: 2px solid blue; 
                                        min-height: 40px;">
                                         <option value="">Choisir services</option>
                                         <option value="s1">Service - Vidange d'Huile Régulier</option>
                                         <option value="s2">Service - Vidange d'Huile Synthétique</option>
                                         <option value="s3">Service - Vidange d'Huile & Insp </option>
                                         <option value="s4">Service - Pose de Pneus sur Jante</option>
                                         <option value="s5">Service - Pose & Equilibrage Pneus</option>
                                         <option value="s6">Service - Rotation des Pneus</option>
                                         <option value="s7">Service - Alignement des Roues</option>
                                         <option value="s8">Service - Vidnge d'Huile Transmission</option>
                                         <option value="v1">Vérification - Système d'Échappement</option>
                                         <option value="v2">Vérification - Systeme de freins</option>
                                         <option value="v3">Vérification - Sécuritaire en 50pts</option>
                                         <option value="v4">Vérification - Batterie et Systeme de Charge</option>
                                         <option value="v5">Vérification - Scanner Témoin Moteur</option>
                                         <option value="v6">Vérification - Système de climatisation</option>
                                         <option value="r1">Réparation - Mécanique Divers</option>
                                         <option value="r2">Réparation - Systeme de Freins</option>
                                         <option value="r3">Réparation - Suspension / Direction</option>
                                         <option value="r4">Réparation - Système de Chauffage</option>
                                         <option value="r5">Réparation - Systeme de Charge/Démarreur</option>
                                         <option value="r60">Réparation - Systeme électrique</option>
                                        </select>
                                       
                                        @if ($errors->has('prestation'))
                                        <p class="alert alert-danger">{{ $errors->first('prestation')}}</p>
                                      @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Votre besoin est</label><br>
                                    <label> <input type="radio" name="urgent" class="inl" value="ra" checked> Urgent</label><br>
                                    <label> <input type="radio" name="peu" class="inl" value="ra">  Peu urgent</label><br>
                                    <label> <input type="radio" name="prix" class="inl" value="ra">Je cherche juste à connaître les prix</label><br>
                                    <label> <input type="radio" name="pas" class="inl" value="ra"> Je ne sais pas</label>
                                </div>
                               
                                <div class="col-md-12">
                                    <label for="message">Votre message</label> <span style="color: red;">*</span> <br>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="messages" placeholder="Votre Message" rows="4" style="border: 2px solid blue;" >
                                        </textarea>

                                        @if ($errors->has('message'))
                                        <p class="alert alert-danger">{{ $errors->first('message')}}</p>
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
    <!-- End Cart -->

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
