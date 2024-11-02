 <!-- Start Main Top -->
 <div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {{-- <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>¥ JPY</option>
                        <option>$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div> --}}
                <div class="right-phone-box">
                    <p>Appelez-nous:- <a href="#"> +229 95-95-13-47 / 97-48-91-91</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="#"><i class="fa fa-user s_color"></i> Mon compte</a></li>
                        <li><a href="/rendezvous" target="_blank"><i class="fas fa-location-arrow"></i> Rendez-vous</a></li>
                        <li><a href="/contacteznous"><i class="fas fa-headset"></i> Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {{-- <div class="login-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                        <option>Inscrivez-vous</option>
                        <option>Se connecter</option>
                    </select>
                </div> --}}
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Tous les jours nous sommes disponibles
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Lundi 7h30 à 19h30

                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Mardi 7h30 à 19h30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i>Mercredi 7h30 à 19h30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Jeudi 7h30 à 19h30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Vendredi 7h30 à 19h30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Samedi 7h30 à 19h30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Dimanche: Fermé mais en cas d'urgence, appelez 95951347
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container" style="">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="/accueil"><img src="{{asset('assets/autoimages/logoremo.png')}}" class="logo" alt="" style="max-height:70px; margin-right:6px;"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{ Route::is('accueil') ? 'active' : '' }}"><a class="nav-link" href="/accueil">Accueil</a></li>
                    <li class="dropdown {{ Route::is('service') ? 'active' : '' }}">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Nos services</a>
                        <ul class="dropdown-menu" style="width:225px;">
                            @foreach ($services as $service)
                                <li><a href="/service/{{ $service->id }}">{{ $service->designation }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item {{ Route::is('equipe') ? 'active' : '' }}"><a class="nav-link" href="/equipe">Equipe</a></li>
                    <li class="nav-item {{ Route::is('gallery') ? 'active' : '' }}"><a class="nav-link" href="/gallery">Galleries</a></li>
                    <li class="nav-item {{ Route::is('localisation') ? 'active' : '' }}"><a class="nav-link" href="/localisation">Localisation</a></li>
                    <li class="nav-item {{ Route::is('contacteznous') ? 'active' : '' }}"><a class="nav-link" href="/contacteznous">Contactez-nous</a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->
