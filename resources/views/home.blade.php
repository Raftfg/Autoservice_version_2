@extends('layouts.partials.header')
@section('contenu')
    @include('layouts.partials.sidebar')
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{ asset('assets/autoimages/img3.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue au garage <br> Auto Service La Patience</strong></h1>
                            <p class="m-b-40">Découvrez ce garage en temps réel où vous verrez les tendances et<br> les
                                changements de performances au fil du temps.</p>
                            <p><a class="btn hvr-hover " href="/rendezvous" style="font-size: 16px;">Prendre un
                                    rendez-vous</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('assets/autoimages/v11.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue au garage <br> Auto Service La Patience</strong></h1>
                            <p class="m-b-40">Découvrez ce garage en temps réel où vous verrez les tendances et<br> les
                                changements de performances au fil du temps.</p>
                            <p><a class="btn hvr-hover" href="/rendezvous" style="font-size: 16px;">Prendre un
                                    rendez-vous</a></p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('assets/autoimages/v10.jpg') }}" alt="">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue au garage <br> Auto Service La Patience</strong></h1>
                            <p class="m-b-40">Découvrez ce garage en temps réel où vous verrez les tendances et<br> les
                                changements de performances au fil du temps.</p>
                            <p><a class="btn hvr-hover" href="/rendezvous" style="font-size: 16px;">Prendre un
                                    rendez-vous</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation nav">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="{{ asset('assets/autoimages/img33.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top text-primary">Qui sommes-<span>nous?</span></h2>
                    <h3 class="text-justify">Votre véhicule est en panne ou bloqué suite à un accident ? Pas de panique !
                        Nous intervenons en permanence sur site.
                    </h3>
                    <p class="text-justify">
                        Notre société de dépannage de véhicule est née en 1996, créée par Issa TAKOU OROU GOURA, chef
                        garagiste.
                        Notre cœur de métier cible le <strong>dépannage</strong>, la <strong>réparation
                        </strong>et la <strong>maintenance de véhicules</strong>, la <strong>rénovation</strong>, dans la
                        région de cotonou.
                        Nous garantissons un travail sérieux et nous intervenons <strong>7 jours sur 7</strong> et
                        <strong>24 heures sur 24</strong>.
                    </p>

                    <p class="text-justify">
                        Grâce à notre savoir-faire et notre expertise, nous prenons en charge
                        le dépannage quelle que soit la situation et sans délai. Nous sommes également
                        en mesure de veiller sur le bon fonctionnement de votre véhicule à long terme.
                        Avec nous le bricolage est proscrit et nous fournissons des pièces de bonnes qualités.
                        Vous serez pris en charge dans les délais les plus brefs.
                    </P>
                    <p class="text-justify">
                        Vous avez besoin d’une réparation, d’un contrôle, vous désirez assurer
                        la maintenance de votre véhicule, nous répondons à vos attentes dans les
                    </p>
                    {{-- <a class="btn hvr-hover" href="#">Lire plus</a> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-justify">
                        meilleures conditions avec sérieux et réactivité. N’hésitez pas à prendre contact avec nous,
                        nous sommes
                        à votre entière disposition et à votre écoute entre 7h30 et 19h30. Nous nous déplaçons pour réaliser
                        tous les contrôles nécessaires pour que votre véhicule passe le
                        contrôle technique sans encombre. Ensuite, nos techniciens établissent la liste des éventuelles
                        réparations à réaliser.
                        Vous prenez rendez-vous directement et à la date fixée, nous effectuons toutes les réparations.
                        Confiez-nous votre véhicule quelle que soit sa marque, nous nous occuperons de tout !
                        Vous le récupérerez une fois le contrôle effectué afin d’être à nouveau complètement
                        opérationnel !
                    </p>
                    {{-- <p class="text-justify">
                     Nous nous déplaçons pour réaliser tous les contrôles nécessaires pour que votre véhicule passe le
                     contrôle technique sans encombre. Ensuite, nos techniciens établissent la liste des éventuelles 
                     réparations à réaliser. 
                     Vous prenez rendez-vous directement et à la date fixée, nous effectuons toutes les réparations.
                     Confiez-nous votre véhicule quelle que soit sa marque, nous nous occuperons de tout ! 
                     Vous le récupérerez une fois le contrôle effectué afin d’être à nouveau complètement
                     opérationnel !
                </p>  --}}
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3 class="bold-text">Vision et mission</h3>
                        <p class="text-justify">
                            Etre reconnue en tant que garage automobile offrant des services accessibles et complets, avec
                            une approche personnalisée typique des commerces de proximité, tout en utilisant
                            des méthodes et des appareils à la fine pointe de la technologie, tels que trouvés dans les
                            grandes chaînes de mécanique automobile et les concessionnaires.
                        </p>
                        <p class="text-justify ">
                            Notre mission est d'offrir un service de mécanique automobile personnalisé, courtois, fiable et
                            exemplaire, afin d'assurer que nos clients puissent se rendre où ils veulent aller, en tout
                            sécurité.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3 class="bold-text">Objectifs</h3>
                        {{-- <p class="text-justify">
                        S'assurer de toujours rester à l'affût des tendances et des nouveautés, tant au niveau des bonnes pratiques que de la formation en continue pour ses employés.
                    </p> --}}
                        <p class="text-justify">
                            Notre principal objectif de service de réparation automobile est de fournir des services de
                            réparation et d'entretien automobile de qualité aux clients pour assurer le bon fonctionnement
                            et la sécurité de leur véhicule. Voici quelques-uns des objectifs spécifiques de notre service
                            de réparation automobile:
                            <span style="font-weight: bold">diagnostiquer et résoudre les problèmes mécaniques</span>, <span
                                style="font-weight: bold">fournir des services d'entretien</span>, <span
                                style="font-weight: bold">utiliser des pièces de qualité</span>, offrir un service client de
                            qualité, respecter les normes de sécurité et rester à l'affût des tendances et des nouveautés.

                        </p>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3 class="bold-text">Valeurs</h3>
                        <p class="text-justify">
                            Les valeurs de notre service de réparation automobile inclurent:
                            la <span style="font-weight: bold">qualité</span>, la <span
                                style="font-weight: bold">fiabilité</span>, <span
                                style="font-weight: bold">l'honnêteté</span>, le <span style="font-weight: bold">service à
                                la clientèle</span>, le <span style="font-weight: bold">respect de l'environnement</span>,
                            <span style="font-weight: bold">l'éthique professionnelle</span> et <span
                                style="font-weight: bold">l'innovation</span>.
                        </p>
                        <p class="text-justify">
                            Il est convaincu qu'il est tout à faire possible et avantageux pour notre entreprise et notre
                            équipe de combiner les valeurs de confiance et de service axé sur les besoins et attentes de la
                            clientèle avec une stratégie de performance et d'optimisation des services.
                            Faites un tour au garage <span style="font-weight:bold">ASP</span> pour une expérience
                            inoubliable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Rencontrez notre équipe</h2>
                    <p class="text-justify renequipe" style="margin-top: -30px;">Expérience, dynamisme et courtoisie! Voilà
                        qui décrit bien l'équipe de gestion et de mécanique d'ASP AUTO SERVICE LA PATIENCE. On peut dire en
                        effet que TAKOU OROU GOURA Issa, chef garagiste a su bâtir une équipe multidisciplinaire de
                        techniciens à la fois qualifiés et passionnés pour la mécanique automobile </p>
                </div>
                @forelse ($equipes as $equipe)
                    <div class="col-sm-6 col-lg-3 ">
                        <div class="hover-team code_equipe">
                            <div class="our-team">
                                <img src="{{ asset('equipes/' . $equipe->avatar) }}" alt=""class="equipe_avatar" />
                                <div class="team-content">
                                    <h3 class="title">{{ $equipe->nom }} {{ $equipe->prenom }}</h3>
                                    <span class="post">{{ $equipe->role }}</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a target="_blank" href="{{ $equipe->facebook }}" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a target="_blank"
                                            href="https://wa.me/{{ $equipe->whatsApp }}?text=Hello,+I+am+interested+in+knowing+more+about+your +WhatsApp+API+service."
                                            class="fab fa-whatsapp"></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ $equipe->gmail }}" class="fab fa-google-plus"></a>
                                    </li>

                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p class="text-justify">{{ $equipe->description }}</p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12 col-lg-12 " style="margin-left:9px;">
                        <p>Aucun membre dans l'équipe pour le moment</p>
                    </div>
                @endforelse

            </div><br><br>
            <div class="row my-5">
                <div class="col-12">
                    <h2 class="noo-sh-title">Message du chef garagiste</h2>
                    <p class="text-justify" style="margin-top: -30px;"> « Chez Auto Service la Patience, nous mettons tout
                        en œuvre pour assurer votre confort et votre sécurité lorsque vous conduisez votre véhicule. »</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100"
                                    src="{{ asset('assets/autoimages/img44.jpg') }}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100"
                                    src="{{ asset('assets/autoimages/img44.jpg') }}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100"
                                    src="{{ asset('assets/autoimages/img44.jpg') }}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">

                        <h5>Issa TAKOU OROU GOURA, Propriétaire Auto Service la Patience</h5>
                        {{-- <p class="available-stock"><span> More than 20 available / <a href="#">8 sold </a></span><p> --}}
                        <h4>EXPERT EN MÉCANIQUE AUTOMOBILE – CERTIFIÉ CQP</h4>
                        <p class="text-justify">La plupart des systèmes et dispositifs qui composent les véhicules
                            automobiles d’aujourd’hui sont
                            de plus en plus complexes. Il est donc important que l’évaluation des problèmes et la réparation
                            de votre véhicule soient faits par des techniciens automobiles expérimentés et des outils à la
                            fine
                            pointe de la technologie.</p>

                        <p class="text-justify"> Chez ASP (Auto Service la Patience), tous nos techniciens sont certifiés.
                            Ils ont reçu une excellente formation pour identifier, évaluer et effectuer tous les types de
                            réparations automobiles,
                            qu’ils soient d’origine mécaniques, électriques ou électroniques. De plus, ils savent comment
                            utiliser avec une grande précision nos équipements et nos systèmes de diagnostics électroniques.
                            Le perfectionnement de nos employés étant une priorité, nous leur offrons des formations de
                            mises à
                            jour des connaissances et des procédures, au moins une fois par année. Ainsi,
                            nous sommes toujours au courant des nouvelles technologies et pouvons les appliquer dans nos
                            services à
                            nos clients.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row col-md-12" >
            <p class="text-justify" style="margin-top: -40px;">  Peu importe le type de véhicule (conventionnel ou hybride), nous sommes prêts à relever le défi!
                Et toujours dans le but de vous offrir un service impeccable, nos techniciens sont disponibles pour vous
                expliquer pourquoi et comment ils prévoient effectuer une réparation, et combien cela vous coutera.
                Ainsi vous pourrez prendre décision éclairée.
             </p>

         </div> --}}

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="single-product-details">
                        <h4>POURQUOI NOUS CHOISIR?</h4>
                        <p class="text-justify"> Nos techniciens sont tous certifiés offrant des services personnalisés
                            basés sur la communication et l’honnêteté. Nous possédons aussi un système
                            de diagnostic électronique, des outils et équipements à la fine pointe de la technologie et des
                            pièces automobiles de qualité égale ou supérieure aux pièces d’origine.
                            À l’affût des nouveautés en matière de réparation automobile,
                            Votre satisfaction est garantie!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="single-product-details">
                        <h4>FAITES-NOUS CONFIANCE POUR RÉPARER</h4>
                        <p class="text-justify">
                            Votre système d’échappement, vos freins et votre suspension, votre climatisation, votre moteur
                            et son système d’injection,
                            votre batterie et son système de charge, votre radiateur et son système de refroidissement,
                            votre servo-direction.</p>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End About Page -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Trucs et astuces</h1>
                        <p>Nous vous présentons nos quelques articles .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($articles as $article)
                    <div class="coblog-imgl-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="">
                                <img class="img-fluid " src="{{ asset('articles/' . $article->photo) }}" alt=""
                                    style="
                            width: 100%; /* S'adapte à la largeur du conteneur */
                            height: 200px; /* Hauteur fixe */
                            object-fit: cover; /* Conserve le ratio en recadrant l'image si nécessaire */
                        " />
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <a href="#">
                                        <h3 class="ouib">{{ $article->titre }}</h3>
                                    </a>
                                    <p class="text-justify truncated">{{ $article->contenu }}</p>
                                </div>
                            </div>
                            <div class="text-center mt-2"> <!-- Centre le bouton -->
                                <a href="{{ route('articles.show', $article->id) }}" class="btn-lire-plus">Lire plus</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12 col-lg-12" style="margin-left:9px;">
                        <p>Aucun truc ou astuce pour le moment</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v1.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v2.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v3.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v4.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v5.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v6.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v7.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v8.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v9.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{ asset('assets/autoimages/v11.jpg') }}" class="img_insta" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

    <div id="subscribeModal" class="modalM">
        <div class="modal-contentM">
            <div class="contentM">
                <span onclick="closeModal()" class="close">&times;</span> <br>
                <form action="" method="POST">
                    @csrf
                    <p class="intro">Inscrivez-vous à notre newsletter pour recevoir les dernières actualités, offres spéciales et bien plus encore, directement dans votre boîte mail !</p>
                    <div class="groupe">
                        <input class="inpu" type="email" name="email" placeholder=" " required>
                        <label for="email" class="labe">Entrez votre email :</label>
                    </div>
                    <div class="bout">
                        <button class="bouton" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .modalM {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-contentM {
            position: relative;
            max-width: 500px;
            margin: 12% auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: slideDown 0.5s ease-out;
            overflow: hidden;
        }

        .modal-contentM::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 5px;
            background: linear-gradient(45deg, #2196F3 25%, transparent 25%, transparent 50%, #2196F3 50%, #2196F3 75%, transparent 75%);
            background-size: 8px 8px;
            z-index: 0;
            pointer-events: none;
        }

        .contentM {
            position: relative;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 5px;
            z-index: 2;
        }

        .groupe {
            position: relative;
            margin-bottom: 1rem;
        }

        .inpu {
            outline: none;
            width: 100%;
            box-sizing: border-box;
            border: 0.1rem solid #0094DA;
            border-radius: 0.3rem;
            height: 2.5rem;
            padding: 0 1rem;
        }

        .labe {
            position: absolute;
            top: 50%;
            left: 1rem;
            font-size: 0.8rem;
            color: #666;
            transform: translateY(-50%);
            transition: 0.3s;
            pointer-events: none;
            background-color: white;
            padding: 0 0.2em;
        }

        .inpu:focus+.labe,
        .inpu:not(:placeholder-shown)+.labe {
            top: -0.6rem;
            font-size: 0.75rem;
            color: #0094DA;
        }

        .intro {
        font-size: 0.8rem;
        color: #555;
        margin-bottom: 0.6rem;
        text-align: center;
    }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #aaa;
            cursor: pointer;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .bout {
            text-align: center;

            .bouton {
                background-color: #0094DA;
                border-radius: 0.3rem;
                padding: 0.5rem;
                border: none;
                color: #ffffff;
                font-size:0.8rem;
                cursor: pointer;
            }
        }
    </style>

    <script>
        function openModal() {
            document.getElementById('subscribeModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('subscribeModal').style.display = 'none';
        }

        window.onload = function() {
            setTimeout(openModal, 1000);
        };
    </script>

    @include('layouts.partials.footer')
@endsection
