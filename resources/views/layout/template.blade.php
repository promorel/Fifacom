<!DOCTYPE html>
<html lang="FR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>M3AK - Consulting</title>    
    <link rel="icon" href="{{asset('favicons/favicon.ico')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('vendors/elegant_Icon/elegent_icon.css')}}"/>
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('vendors/niceselect/css/nice-select.css')}}"/>
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('vendors/owl_carousel/css/owl.carousel.css')}}"/>
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('vendors/magnify_popup/magnific-popup.css')}}"/>
    <!-- Countdown CSS -->
    <link rel="stylesheet" href="{{asset('vendors/countdown/css/Countdown.css')}}"/>
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <!-- aos CSS -->
    <link rel="stylesheet" href="{{asset('vendors/aos/aos.css')}}"/>
    <!-- course CSS -->
    <link rel="stylesheet" href="{{asset('css/courses.css')}}"/>
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}"/>

</head>

<body>
    <!-- start Preloader  -->
    <div class="preloder_part">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

	@include('layout.menu')
	
	<!-- End Navbar Section -->
    @yield('contenu')
	
	<!-- footer part here -->
    <footer class="footer_section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_footer">
                        <a href="/"><img src="{{asset('logo/logo.png')}}" alt="Logo" style="width: 50%; height: 30%; margin-left: 0; padding-left: 0;"></a>
                        <p>M3AK Consulting accompagne les candidats pour maximiser leurs chances de réussite éducative et professionnelle.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="a-propos">A propos</a></li>
                            <li><a href="cours">Cours</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>         
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><a href="temoignages">Témoignages</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>Infos contacts</h4>
                        <ul class="footer_contact_info">
                            <li><a href="tel:+464145684325"><i class="icon_phone"></i>+464 145 684 325</a></li>
                            <li><a href="mailto:education@example.com"><i class="icon_mail_alt"></i>education@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright_part">
                        <img src="{{asset('img/icon/about_shape_02.png')}}" alt="#" class="footer_sharp_2 custom-animation2">
                        <img src="{{asset('img/icon/about_shape_03.png')}}" alt="#" class="footer_sharp_3 custom-animation3">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-8">
                                <p>© Copyright - 2024 - Tout droits réservés.</p>
                            </div> 
                            <div class="col-lg-6 col-md-4">
                                <div class="social_icon">
                                    <a href="#"><i class="social_facebook"></i></a>
                                    <a href="#"><i class="social_twitter"></i></a>
                                    <a href="#"><i class="social_youtube"></i></a>
                                    <a href="#"><i class="social_linkedin"></i></a>
                                    <a href="#"><i class="social_skype"></i></a>
                                    <a href="#"><i class="social_instagram"></i></a>
                                    <a href="#"><i class="social_pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end -->

    <!-- jquery slim -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstarp js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- nice select -->
    <script src="{{asset('vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
    <!-- magnify popup js -->
    <script src="{{asset('vendors/magnify_popup/jquery.magnific-popup.js')}}"></script>
    <!-- simplyCountdown js -->
    <script src="{{asset('vendors/countdown/js/simplyCountdown.min.js')}}"></script>
    <!-- counter js -->
    <script src="{{asset('vendors/counter/jquery.countTo.js')}}"></script> 
    <!-- aos js -->
    <script src="{{asset('vendors/aos/aos.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>


</html>
