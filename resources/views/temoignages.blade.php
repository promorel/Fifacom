@extends('layout.template')
@section('contenu')

    <!-- breadcrumb part -->
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Témoignages</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="/">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Témoignages</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    <section class="student_review section_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-center">
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="student_review_tittle">
                        <h2>Ce que disent nos <br> étudiants.</h2>
                        <img src="{{asset('varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/quote.png')}}" alt="Citation">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="student_review_iner owl-carousel owl-loaded owl-drag">
                        <div class="single_student_review">
                            <p>Grâce à M3AK Consulting, j'ai pu mieux comprendre le processus de candidature et préparer mes documents efficacement. Leur accompagnement m'a permis d'obtenir mon visa sans stress. Merci pour votre professionnalisme !</p>
                            <div class="student_review_content">
                                <img src="{{asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/student.png')}}" alt="Étudiant">
                                <div class="student_info">
                                    <h4>Jean Dupont</h4>
                                    <p>Étudiant en gestion, Université de Paris</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_student_review">
                            <p>L'équipe de M3AK Consulting a été d'une aide précieuse pour moi. Leur approche personnalisée m'a aidé à surmonter mes doutes et à finaliser ma candidature avec succès.</p>
                            <div class="student_review_content">
                                <img src="{{asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/author_5.jpg')}}" alt="Étudiant">
                                <div class="student_info">
                                    <h4>Sophie Martin</h4>
                                    <p>Future étudiante en design, École des Beaux-Arts</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_student_review">
                            <p>Je recommande vivement M3AK Consulting. Leur expertise et leur disponibilité ont fait toute la différence dans mon parcours vers des études en France.</p>
                            <div class="student_review_content">
                                <img src="{{asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/student.png')}}" alt="Étudiant">
                                <div class="student_info">
                                    <h4>Ali Ben Amar</h4>
                                    <p>Étudiant en informatique, Université de Lyon</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>

    <section class="blog_posts padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div data-aos="fade-up" data-aos-duration="1200" class="section_tittle aos-init aos-animate text-center">
                        <h2>Quelques autres témoignages</h2>
                        <p>Découvrez ce que disent nos utilisateurs et clients à travers leurs témoignages vidéo.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-2">
                <!-- Témoignage 1 -->
                <div data-aos="fade-up" data-aos-duration="1600" class="col-xl-5 col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="blog_post_list">
                        <div class="single_page_blog_post video_post">
                            <div class="post_thumb">
                                <video controls style="width: 100%; max-width: 400px; height: 600px; border-radius: 15px;">
                                    <source src="{{ asset('videos/temoignage4.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <div class="post_author">
                                <p><i class="icon_profile"></i>Kisma BISSIRI</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Témoignage 2 -->
                <div data-aos="fade-up" data-aos-duration="1600" class="col-xl-5 col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="blog_post_list">
                        <div class="single_page_blog_post video_post">
                            <div class="post_thumb">
                                <video controls style="width: 100%; max-width: 400px; height: 600px; border-radius: 15px;">
                                    <source src="{{ asset('videos/temoignage3.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <div class="post_author">
                                <p><i class="icon_profile"></i>Chérifath BATARO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Témoignage 3 -->
                <div data-aos="fade-up" data-aos-duration="1600" class="col-xl-5 col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="blog_post_list">
                        <div class="single_page_blog_post video_post">
                            <div class="post_thumb">
                                <video controls style="width: 100%; max-width: 400px; height: 600px; border-radius: 15px;">
                                    <source src="{{ asset('videos/temoignage2.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <div class="post_author">
                                <p><i class="icon_profile"></i>Carmélia ALAVO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Témoignage 4 -->
                <div data-aos="fade-up" data-aos-duration="1600" class="col-xl-5 col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="blog_post_list">
                        <div class="single_page_blog_post video_post">
                            <div class="post_thumb">
                                <video controls style="width: 100%; max-width: 400px; height: 600px; border-radius: 15px;">
                                    <source src="{{ asset('videos/temoignage1.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <div class="post_author">
                                <p><i class="icon_profile"></i>AKANKE A.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Script pour empêcher la lecture simultanée -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const videos = document.querySelectorAll("video");

        videos.forEach(video => {
            video.addEventListener("play", () => {
                videos.forEach(v => {
                    if (v !== video) {
                        v.pause();
                    }
                });
            });
        });
    });
</script>


@endsection
