@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    <!-- End All Title Box -->
    <!-- Start Contact Us  -->
    <div class="all-title-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Détail Article</h2>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
                      <li class="breadcrumb-item active">Détail Article</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
    <div class="contact-box-main " style="background-color: #f9f9f9;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-sm-12">
                  <div class="">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-md-12">
                                  
                                  <div class="article-detail bg-white rounded shadow-sm" >
                                      <!-- Titre de l'article -->
                                      <h1 class="font-weight-bold" style="font-family: 'Roboto', sans-serif; font-size: 28px; color: #222; margin-bottom: 15px; padding-top:5px; padding-left:5px;">{{ $article->titre }}</h1>
                                      
                                      <!-- Image de l'article -->
                                      <div class="article-image mb-4">
                                          <img src="{{ asset('articles/' . $article->photo) }}" alt="{{ $article->titre }}" class="img-fluid rounded" style="width: 100%; height: 400px; object-fit: cover; border: 1px solid #ccc;">
                                      </div>
                                      
                                      <!-- Contenu de l'article -->
                                      <div class="article-content" style="font-size: 16px; line-height: 1.8; color: #555;">
                                          <p style="text-align: justify; padding-left:12px; padding-right:12px">{{ $article->contenu }}</p>
                                      </div>
                                      
                                      <!-- Bouton Retour -->
                                      <div class="text-center " style="padding-top: 10px; padding-bottom:10px;">
                                          <a href="{{ url()->previous() }}" class="btn btn-secondary" style="font-size: 16px; padding: 10px 20px; font-weight: 500;">&larr; Retour</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>     
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
