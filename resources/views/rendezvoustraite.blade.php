@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    {{-- <div class="all-title-box">
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
    </div> --}}
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right #survey-form">
                        <h2 class="text-center">FORMULAIRE DE DEMANDE DE <span style="color: #226be2;"> RENDEZ-VOUS</span> </h2>
                        <form action="/rendezvousform" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pres">Service (s) requis</label> <span style="color: red;">*</span> <br>
                                        <select name="designation" id="pres"   class="form-control" style="border: 2px solid blue; 
                                        min-height: 40px;" required>
                                           @foreach ($service as $serv)
                                         <option value="{{ $serv->id }}">{{ $serv->designation }}</option>
                                              @endforeach                                 
                                        </select>
                                       
                                        @if ($errors->has('prestation'))
                                        <p class="alert alert-danger">{{ $errors->first('prestation')}}</p>
                                      @endif
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="motif">Motif ou raison du rendez-vous</label> <span style="color: red;">*</span> <br>
                                        <input type="text" class="form-control" id="rendevous" name="motif" placeholder="Donner le motif de votre rendez-vous " style="border: 2px solid blue;" >
                                        @if ($errors->has('motif'))
                                        <p class="alert alert-danger">{{ $errors->first('motif')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_rendez_vous">Date du rendez-vous</label> <span style="color: red;">*</span>
                                        <input type="date" class="form-control" id="date_rendez_vous" name="date_rendez_vous"  placeholder="choisir une date " style="border: 2px solid blue;" >
                                        @if ($errors->has('date_rendez_vous'))
                                        <p class="alert alert-danger">{{ $errors->first('date_rendez_vous')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="heure">Heure du rendez-vous</label> 
                                        <input type="time" class="form-control" id="heure" name="heure" placeholder="Facultatif... " style="border: 2px solid blue;">
                                        @if ($errors->has('heure'))
                                        <p class="alert alert-danger">{{ $errors->first('heure')}}</p>
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
                                        <label for="email">Email</label> <span style="color: red;">*</span>
                                        <input type="email" placeholder="Votre email" id="email" class="form-control" name="email" style="border: 2px solid blue;" >

                                        @if ($errors->has('email'))
                                        <p class="alert alert-danger">{{ $errors->first('email')}}</p>
                                      @endif
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">Nom et Prénom</label> <span style="color: red;">*</span>
                                        <input type="text" placeholder="Votre nom et prénom" id="nom" class="form-control" name="nom" value="" size="40" style="border: 2px solid blue;" >
                                        @if ($errors->has('nom'))
                                        <p class="alert alert-danger">{{ $errors->first('nom')}}</p>
                                      @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone">Téléphone</label> <span style="color: red;">*</span>
                                        <input type="number" placeholder="Téléphone" id="telephone" class="form-control" name="telephone" value="" size="40" style="border: 2px solid blue;" >
                                        @if ($errors->has('telephone'))
                                        <p class="alert alert-danger">{{ $errors->first('telephone')}}</p>
                                      @endif
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <label for="message">Décrivez le problème de votre véhicule</label> <span style="color: red;">*</span> <br>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Décrivez le problème de votre véhicule" rows="4" style="border: 2px solid blue;" ></textarea>
                                        @if ($errors->has('message'))
                                            <p class="alert alert-danger">{{ $errors->first('message') }}</p>
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
