@extends('layouts.partials.header')
@section('contenu')
@include('layouts.partials.sidebar')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Galleries</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/accueil">Accueil</a></li>
                        <li class="breadcrumb-item active">Galleries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Notre Gallerie</h1>
                        <p>Voici image nos quelques réalisations</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Tous</button>
                            <button data-filter=".bulbs">Diagnostic moteur</button>
                            <button data-filter=".fruits">Climatisation</button>
							<button data-filter=".podded-vegetables">Vidange d'huile</button>
							<button data-filter=".root-and-tuberous">Liquide de freins</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                {{-- <p class="sale">Sale</p> --}}
                            </div>
                            <img src="{{asset('assets/autoimages/dia2.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/cli3.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/dia.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            " >
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/cli2.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/dia1.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/cli1.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/vid4.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/liq1.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

				<div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/liq2.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/vid2.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/liq3.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('assets/autoimages/vid1.jpg')}}" class="img-fluid" alt="Image" style="
                            width : 400px;
                            height : 200px;
                            ">
                            {{-- <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery  -->

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
