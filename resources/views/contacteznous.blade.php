@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contactez-nous</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
                        <li class="breadcrumb-item active"> Contactez-nous </li>
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
                    <div class="contact-form-right">
                        <h2>ENTRER EN CONTACT AVEC NOUS</h2>
                             <p>POUR TOUTES AUTRES QUESTIONS, CONTACTEZ-NOUS DÈS MAINTENANT EN COMPLÉTANT CE FORMULAIRE</p>
                        <form action="/contactez" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom complet" required >
                                        @if ($errors->has('name'))
                                        <p class="alert alert-danger">{{ $errors->first('name')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Votre email" id="email" class="form-control" name="email" required>

                                        @if ($errors->has('email'))
                                        <p class="alert alert-danger">{{ $errors->first('email')}}</p>
                                      @endif
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="numero" placeholder="Votre numero" id="numero" class="form-control"  name="numero" value="" size="40" required>

                                        @if ($errors->has('numero'))
                                        <p class="alert alert-danger">{{ $errors->first('numero')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="suggestion" placeholder="Suggestion" required>

                                        @if ($errors->has('suggestion'))
                                        <p class="alert alert-danger">{{ $errors->first('suggestion')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Votre Message" rows="4" required></textarea>

                                        @if ($errors->has('message'))
                                        <p class="alert alert-danger">{{ $errors->first('message')}}</p>
                                      @endif
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" type="submit">Envoyer le message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				 <!--<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">

                        <h2>AUTO SERVICE LA PATIENCE</h2>
                       
                            
                            <p>Du lundi au samedi – de 7h30 à 19h30</p>
                            <p>Dimanche: Fermé</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Cotonou / Akpakpa </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="+22962032158">+22995951347</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:Takouissa@gmail.fr">Takouissa@gmail.fr</a></p>
                            </li>
                        </ul>
                        <h2>LOCALISATION ET ITINÉRAIRE</h2>
                        <a href="https://maps.app.goo.gl/TfymXXy1M81SE9s6A" target="_blank"><img src="{{ asset('assets/images/localisation.png') }}" alt="Photo de localisation" width="310" ></a>
                    </div>
                </div>-->
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
