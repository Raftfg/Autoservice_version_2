 <!-- Start Footer  -->
 <footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="footer-top-box">
                        <h3>Temps de travail</h3>                        <ul class="list-time">
                            <li>Lundi - Samedi: 07H30 à 19H30</li> <li>Dimanche: <span>Fermé </span></li>                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-top-box">
                        <h3>Abonnez-vous</h3>
                        <form class="newsletter-box" action="/layouts.partials.footer" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input class="" type="email" name="email" placeholder="Email Address*" required />
                                <i class="fa fa-envelope"></i>
                                @if($errors->has('email'))
                                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <button class="btn hvr-hover" type="submit">Soumettre</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-top-box">
                        <h3>Des médias sociaux</h3>
                        <p><ul class="list-time">
                            <li>Rejoignez-nous ou suivez-nous sur nos differents réseaux sociaux.</li>
                         </ul></p>
                         <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100085950368871" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>

                         </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>AUTO SERVICE LA PATIENCE</h4>
                        <p class="text-white">Nous sommes toujours disponible pour vous. Votre satisfaction est notre bien-être.</p>
                                           </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-link">
                        <h4>Informations utiles</h4>
                        <ul>
                            <li><a href="/accueil">Accueil</a></li>
                            {{-- <li><a href="/prestation">Nos prestations</a></li> --}}
                            <li><a href="/equipe">Equipe</a></li>
                            <li><a href="/localisation">Localisation</a></li>
                            <li><a href="/gallery">Galleries</a></li>
                            <li><a href="/contacteznous">Contactez-nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-link-contact">
                        <h4>Contactez-nous</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Adresse: Cotonou / Akpakpa</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Téléphone: <a href="tel:+229 95951347">+229 95 95 13 47</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:Takouissa15@gmail.fr">Takouissa15@gmail.fr</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">Tous les droits sont réservés. &copy; 2022- AUTO SERVICE LA PATIENCE <a href="#">Réalisé</a> par :
        <a href="##">Dynamic Technology Group </a></p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('assets/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/inewsticker.js')}}"></script>
<script src="{{asset('assets/js/bootsnav.js.')}}"></script>
<script src="{{asset('assets/js/images-loded.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>


