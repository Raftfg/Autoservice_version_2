@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Réparations Automobiles</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Nos prestations</a></li>
                        <li class="breadcrumb-item active">Réparations Automobiles </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row my-4">
                <div class="col-12">
                    <div class="title-all text-center">
                        <h1>RÉPARATIONS AUTOMOBILES - Inspections et réparations</h1>
                        <p>Vous êtes à la recherche de professionnels en mécanique automobile pour régler un problème avec votre véhicule?</p>
                    </div>
                </div>
                @foreach ($photos as $photo)
                
                <div class="col-sm-6 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> 
                            <img src="{{ '/services_photo/' . $photo->photo}}" alt="" style="
                                width : 400px;
                                height : 200px;
                                " />
                            <div class="">
                                <h3 class="title">{{ $photo->designation_sous_service }}</h3> 
                             </div>
                        </div>
                        <hr class="my-0"> 
                    </div>
                </div>
              
                @endforeach
            
            </div>
            <div class="" style="margin-left:15px;">
                {{ $photos->links() }}
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
