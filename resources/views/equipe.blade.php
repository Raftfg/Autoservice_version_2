@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>EQUIPE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
                        <li class="breadcrumb-item active">EQUIPE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Rencontrez notre équipe </h2>
                </div>
                @forelse ($equipes as $equipe)
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team"> 
                                <img src="{{asset("equipes/" . $equipe->avatar)}}" alt=""  style="
                                width : 400px;
                                height : 200px;
                                "/>
                                <div class="team-content">
                                    <h3 class="title">{{ $equipe->nom }} {{ $equipe->prenom }}</h3>
                                    <span class="post">{{ $equipe->role }}</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a target="_blank" href="{{ $equipe->facebook }}" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://wa.me/{{ $equipe->whatsApp }}?text=Hello,+I+am+interested+in+knowing+more+about+your +WhatsApp+API+service." class="fab fa-whatsapp"></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{ $equipe->gmail }}" class="fab fa-google-plus"></a>
                                    </li>
                                    
                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p class="text-justify " style="font-weight: bold;">{{ $equipe->description }}</p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                @empty
                    <div col-sm-12 col-lg-12>
                        <p>Aucun membre dans l'équipe pour le moment</p>
                    </div>
                @endforelse
            </div>
           
        </div>
    </div>
    <!-- End About Page -->

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

