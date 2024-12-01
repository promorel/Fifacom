<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from templates.mhrtheme.com/varsity/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 13:00:20 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Varsity - Educational and Online Course HTML Website Template</title>    
    <link rel="icon" href="{{asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/favicon.png')}}" type="image/png">
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
                        <a href="index-2.html"><img src="varsity.mhrtheme.com/wp-content/uploads/2022/11/logo.png" alt="#"></a>
                        <p>Loo faff about cockup Harry baking cakes hunky dory mush happy 
                        days on your bike mate.</p>
                        <div class="footer_contact_info">
                            <a href="tel:+464145684325"><i class="icon_phone"></i>+464 145 684 325</a>
                            <a href="mailto:education@example.com"><i class="icon_mail_alt"></i>education@example.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>Popular Courses</h4>
                        <ul>
                            <li><a href="course-details.html">Algebra & Calculus</a></li>
                            <li><a href="course-details.html">Business Strategy</a></li>
                            <li><a href="course-details.html">Computer Security & Network</a></li>
                            <li><a href="course-details.html">Data Analysis</a></li>
                            <li><a href="course-details.html">English Learning</a></li>
                            <li><a href="course-details.html">Music & Art</a></li>
                        </ul>
                    </div>
                </div>         
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>COURSE CATEGORIES</h4>
                        <ul>
                            <li><a href="course-category.html">Arts & Humanities</a></li>
                            <li><a href="course-category.html">Business</a></li>
                            <li><a href="course-category.html">Computer Science</a></li>
                            <li><a href="course-category.html">Data Science</a></li>
                            <li><a href="course-category.html">Language Learning</a></li>
                            <li><a href="course-category.html">Math & Logic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single_feature_footer footer_nav">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Live Class</a></li>
                            <li><a href="#">Tuition Fees</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright_part">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-8">
                                <p>© Copyright 2024 Design by <a href="#" class="text_underline">MhrTheme.</a> All rights reserved.</p>
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
        <img src="img/icon/shape_01.png" alt="#" class="footer_sharp_1">
        <img src="img/icon/about_shape_02.png" alt="#" class="footer_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="footer_sharp_3 custom-animation3">
    </footer>
    <!-- footer part end -->

    <!-- jquery slim -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice select -->
    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <!-- owl carousel js -->
    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <!-- magnify popup js -->
    <script src="vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- simplyCountdown js -->
    <script src="vendors/countdown/js/simplyCountdown.min.js"></script>
    <!-- counter js -->
    <script src="vendors/counter/jquery.countTo.js"></script> 
    <!-- aos js -->
    <script src="vendors/aos/aos.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>


</html>
