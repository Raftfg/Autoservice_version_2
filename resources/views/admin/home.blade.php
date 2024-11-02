@extends('admin.layouts.base')
@section('contenu')
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')
    <main id="main" class="main" style="background-image: url('admin_assets/img/accueil.jpg');background-size: cover;background-repeat: no-repeat;">
        <div class="pagetitle">
          <h1>Tableau de bord</h1>
          <nav>
            <ol class="breadcrumb" >
              <li class="breadcrumb-item"><a style="color: rgb(0, 0, 0)" href="/home">Accueil</a></li>
              <li class="breadcrumb-item active" style="color: rgb(0, 0, 0)">Tableau de bord</li>
            </ol>
          </nav>
        </div>
        <section class="section dashboard">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-xxl-4 col-md-4">
                  <div class="card info-card sales-card" style="background-color: rgb(41, 160, 41)">

                    <div class="card-body">
                      <h5 class="card-title" style="color: rgb(255, 255, 255)">Commandes</h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i style="color: rgb(180, 196, 44)" class="bi bi-cart-plus-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6 style="color: rgb(255, 255, 255)">{{ $commandesNbr }}</h6>
                          <span style="color: rgb(255, 255, 255)" class="pt-1 fw-bold">{{ $commandesNbr }}</span>
                          <span style="color: rgb(255, 255, 255)" class="pt-2 ps-1">
                            @if( $commandesNbr == 1 || $commandesNbr == 0)
                                commande
                            @else
                                commandes
                            @endif
                          </span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>


                <div class="col-xxl-4 col-md-4">
                  <div class="card info-card revenue-card" style="background-color: rgb(180, 196, 44)">

                    <div class="card-body">
                      <h5 style="color: rgb(255, 255, 255)" class="card-title">Rendez-vous</h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i style="color: rgb(180, 196, 44)" class="bi bi-calendar-event-fill"></i>
                        </div>
                        <div class="ps-3">
                            <h6 style="color: rgb(255, 255, 255)">{{ $rendez_vousNbr }}</h6>
                            <span style="color: rgb(255, 255, 255)" class="pt-1 fw-bold">{{ $rendez_vousNbr }}</span>
                            <span style="color: rgb(255, 255, 255)" class="pt-2 ps-1">
                                @if( $rendez_vousNbr == 1 || $rendez_vousNbr == 0)
                                    Rendez-Vous
                                @else
                                Rendez-Vous
                                @endif
                            </span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color: rgb(63, 77, 209)">

                      <div class="card-body">
                        <h5 style="color: rgb(255, 255, 255)" class="card-title">Contacts</h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i style="color: rgb(63, 77, 209)" class="bi bi-person-rolodex"></i>

                          </div>
                          <div class="ps-3">
                              <h6 style="color: rgb(255, 255, 255)">{{ $contactsNbr }}</h6>
                              <span style="color: rgb(255, 255, 255)" class="pt-1 fw-bold">{{ $contactsNbr }}</span>
                              <span style="color: rgb(255, 255, 255)" class="pt-2 ps-1">
                                @if( $contactsNbr == 1 || $contactsNbr == 0)
                                    contact
                                @else
                                    contacts
                                @endif
                              </span>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>

                <!-- Recent Sales -->
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales">
                        <div class="card-body">
                            <h5 class="card-title">Liste des commandes</h5>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        @php
                                            $i = 0
                                        @endphp
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($commandes as $commande)
                                        <tr>
                                            @php
                                                $i = $i + 1
                                            @endphp
                                            <td>{{ $i }}</td>
                                            <td>{{ $commande->id_user }}</td>
                                            <td>{{ $commande->id_formation }}</td>
                                        </tr>
                                    @empty
                                        <tr><td  colspan="7" class="text-center">Pas de commandes effectuées por l'instant</td></tr>
                                    @endforelse
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- End Recent Sales -->

              </div>
            </div><!-- End Left side columns -->
        </section>
      </main>

@endsection
