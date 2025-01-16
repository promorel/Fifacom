@extends('layout.template')
@section('contenu')

<!-- breadcrumb part -->
<section class="breadcrumb_part blog_grid_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="breadcrumb_iner">
                    <h2>A propos</h2>
                    <div class="breadcrumb_iner_link">
                        <a href="/">Accueil</a>
                        <i class="arrow_carrot-right"></i>
                        <span>A propos de nous</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end -->

<style>
    ul li {
        list-style-type: none;
    }
</style>

<!-- Présentation de l'entreprise -->
<div class="banner-wrapper-area">
    <div class="container">
        <div class="row align-items-center"> <!-- align-items-center pour alignement vertical -->
            <!-- Section Mission -->
            <div data-aos="fade-up" data-aos-duration="2400" class="col-lg-6 col-md-12 d-flex justify-content-center aos-init aos-animate">
                <div class="banner-wrapper-image">
                    <img src="{{ asset('img/missions.jpg') }}" alt="Mission" style="width: 100%; height: 100%; border-radius: 15px; max-width: 100%; object-fit: cover;">
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-12 aos-init aos-animate">
                <div class="banner-wrapper-content">
                    <h1>Mission</h1>
                    <p class="text-justify">
                        Chez M3AK Consulting, notre mission est de transformer les ambitions des candidats en succès concrets. Nous offrons un accompagnement complet et sur mesure, couvrant toutes les étapes nécessaires à la réalisation de leur projet d'études ou professionnel en France.
                        <br>
                        En nous concentrant sur chaque détail, nous visons à maximiser les chances de succès de nos clients tout en leur offrant une expérience enrichissante et sans stress.
                    </p>
                    <ul class="text-justify pl-0">
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Conseil stratégique :</strong> Nous aidons nos clients à élaborer un plan d’action clair, adapté à leurs objectifs personnels et professionnels.</li>
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Accompagnement rigoureux :</strong> Nous intervenons depuis la conception du projet, en passant par la constitution de dossiers académiques solides, jusqu'à l'obtention du visa.</li>
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Encouragement à l'autonomie :</strong> Nous fournissons les ressources et formations nécessaires pour que chaque candidat devienne acteur de son propre succès.</li>  
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Soutien continu :</strong> Nous restons disponibles tout au long du processus pour répondre aux questions et lever les obstacles rencontrés.</li>
                    </ul>
                    <div class="btn-box">
                        <a href="contact" class="btn_1">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-5 mb-5 pb-5 pt-0">
    <div class="container">
        <div class="row align-items-center"> <!-- align-items-center pour alignement vertical -->
            <!-- Section Vision -->
            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-12 aos-init aos-animate">
                <div class="banner-wrapper-content align-items-left">
                    <h1>Vision</h1>
                    <p class="text-justify">
                        Chez M3AK Consulting, notre vision est d’être un partenaire incontournable pour tous ceux qui aspirent à poursuivre leurs études ou projets professionnels en France.  
                        Nous croyons fermement qu’un suivi personnalisé et humain peut transformer des défis complexes en opportunités réalisables. 
                        <br>
                        En combinant une expertise académique, administrative et culturelle, nous offrons des solutions innovantes et accessibles pour garantir une préparation optimale des candidats.
                    </p>
                    <ul class="text-justify pl-0">
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Excellence dans l’accompagnement :</strong> Un suivi humain et adapté à chaque besoin.</li>
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Soutien global :</strong> Une expertise académique, administrative et culturelle.</li>
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Innovation :</strong> Offrir des solutions modernes et accessibles.</li>
                        <li class="mb-3"><i class="icon_check_alt2 text-primary mr-3"></i><strong>Impact durable :</strong> Renforcer les ponts culturels et éducatifs entre les pays.</li>
                    </ul>
                    <div class="btn-box">
                        <a href="contact" class="btn_1">Découvrez notre vision</a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="2400" class="col-lg-6 col-md-12 d-flex justify-content-center aos-init aos-animate"> <!-- Centrage horizontal -->
                <div class="banner-wrapper-image">
                    <img src="{{ asset('img/visions.png') }}" alt="Vision" style="width: 100%; max-width: 500px; height: auto; border-radius: 15px;">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Appel à l'action -->
<section class="cta_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="cta_part_iner">
                    <h2>Les meilleurs experts dans chaque domaine <br> Prêts à commencer ?</h2>
                    <p>Nous vous aidons à atteindre vos objectifs éducatifs et professionnels avec des solutions adaptées.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cta_btn">
                    <a href="cours" class="btn_3">Voir nos cours</a>
                </div>
            </div>
        </div>
    </div>
    <div class="circle_shape_1"></div>
    <div class="circle_shape_2"></div>
</section>

<div class="banner-wrapper-area">
    <div class="container">
        <div class="row align-items-center"> <!-- align-items-center pour alignement vertical -->
            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-12 aos-init aos-animate">
                <div class="banner-wrapper-content">
                    <div data-aos="fade-up" data-aos-duration="1400" class="blog_details_content aos-init aos-animate"> 
                        <h1>Engagement et expertise</h1>
                        <p class="text-justify">
                            Chez M3AK Consulting, nous mettons en avant une approche centrée sur l'humain, combinée à une expertise approfondie des systèmes éducatifs et des démarches administratives françaises. Nos services incluent :
                        </p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1600" class="single_blog_list aos-init aos-animate">
                        <p><i class="icon_check_alt2 text-primary mr-3"></i>Une analyse personnalisée des besoins de chaque candidat.</p>
                        <p><i class="icon_check_alt2 text-primary mr-3"></i>Un accompagnement rigoureux dans la préparation des dossiers</p>
                        <p><i class="icon_check_alt2 text-primary mr-3"></i>Des conseils stratégiques pour maximiser les chances de réussite.</p>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="1800" class="aos-init aos-animate text-justify">
                        Nous nous engageons à offrir des solutions fiables et adaptées à chaque profil, afin que nos clients atteignent leurs objectifs en toute sérénité. Avec M3AK Consulting, chaque étape est pensée pour transformer vos rêves en réalité.
                    </p>
                    <div class="btn-box">
                        <a href="contact" class="btn_1">Contactez-nous</a>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2400" class="col-lg-6 col-md-12 d-flex justify-content-center aos-init aos-animate"> <!-- Centrage horizontal -->
                <div class="banner-wrapper-image">
                    <img src="{{ asset('img/engage.jpg') }}" alt="Image de présentation" style="width: 100%; max-width: 500px; height: auto; border-radius: 15px;"> <!-- max-width ajouté -->
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Événements à venir -->
<!-- 
<section class="event_list section_padding">
    <div class="container">
        <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h2>Nos événements à venir</h2>
                    <p>Découvrez des ateliers, formations et séminaires pour vous aider à réussir votre projet éducatif en France.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="single_event_list aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                    <img src="{{ asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/event_list_3.png') }}" alt="Événement" class="img-fluid">
                    <div class="event_list_content">
                        <h5>14 janvier, 2023</h5>
                        <h2>Pourquoi suivre une formation avancée en développement ?</h2>
                        <div class="event_list_tag">
                            <p><i class="icon_clock_alt"></i>8h30 - 17h30</p>
                            <p><i class="icon_pin_alt"></i>9 Road, Mirpur Dohs, New York, USA</p>
                        </div>
                        <p>Rejoignez-nous pour explorer les stratégies et compétences essentielles pour réussir vos études et votre carrière.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
-->


<!-- Témoignages des étudiants -->
<section class="student_review section_padding">
    <div class="container">
        <div class="row justify-content-between align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="col-xl-5 col-lg-6 col-md-4">
                <div class="student_review_tittle">
                    <h2>Ce que disent nos <br> étudiants.</h2>
                    <img src="{{ asset('varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/quote.png') }}" alt="Citation">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="student_review_iner owl-carousel owl-loaded owl-drag">
                    <div class="single_student_review">
                        <p class="text-justify">Grâce à M3AK Consulting, j'ai pu mieux comprendre le processus de candidature et préparer mes documents efficacement. Leur accompagnement m'a permis d'obtenir mon visa sans stress. Merci pour votre professionnalisme !</p>
                        <div class="student_review_content">
                            <img src="{{ asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/student.png') }}" alt="Étudiant">
                            <div class="student_info">
                                <h4>Jean Dupont</h4>
                                <p>Étudiant en gestion, Université de Paris</p>
                            </div>
                        </div>
                    </div>
                    <div class="single_student_review">
                        <p class="text-justify">L'équipe de M3AK Consulting a été d'une aide précieuse pour moi. Leur approche personnalisée m'a aidé à surmonter mes doutes et à finaliser ma candidature avec succès.</p>
                        <div class="student_review_content">
                            <img src="{{ asset('varsity.mhrtheme.com/wp-content/uploads/2022/11/author_5.jpg') }}" alt="Étudiant">
                            <div class="student_info">
                                <h4>Sophie Martin</h4>
                                <p>Future étudiante en design, École des Beaux-Arts</p>
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
    <div class="row justify-content-center mt-5">
        <div class="cta_btn">
            <a href="temoignages" class="btn_3">Voir plus de temoignages</a>
        </div>
    </div>
</section>

<section class="about_us section_padding">
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5 mb-5">
            <!-- Section Texte -->
            <div class="col-xl-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                <div class="about_us_details">
                    <h3 style="color: #000; font-weight: 700; font-size: 40px;">M3AK Consulting : Accompagnement pour Étudier en France</h3>
                    <p class="text-justify">M3AK Consulting est une structure spécialisée dans l’accompagnement des candidats désireux de poursuivre leurs études en France dans le cadre de la réalisation de leurs projets professionnels. Nous offrons une assistance complète, allant de la préparation des dossiers à l’obtention du visa, tout en fournissant des conseils stratégiques pour garantir une transition fluide et réussie.</p>
                </div>
            </div>
            <!-- Section Image -->
            <div class="col-xl-5 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                <div class="about_us_img">
                    <img src="{{asset('img/accompagner.jpg')}}" alt="#" class="img-fluid" style="max-width: 100%; height: 100%;">
                    <div class="about_tricker">
                        <div class="tricker_iner">
                            <p>Suivi par</p>
                            <span>+</span>
                            <span class="timer" data-from="0" data-to="250"></span><span> k</span>
                        </div>
                    </div>
                    <img src="{{asset('img/animated_icon/about_icon.png')}}" alt="#" class="about_icon custom-animation">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog_page banner-wrapper-area section_padding mt-2">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Section Image -->
            <div class="col-xl-5 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                <div class="about_us_img">
                    <img src="{{asset('img/services.jpg')}}" alt="#" style="width: 450px; height: 100%; border-radius: 15px; align-self: center;">
                </div>
            </div>
            <!-- Section Texte -->
            <div class="col-xl-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                <div class="about_us_details">
                    <h3>Nos services principaux :</h3>
                    <ul class="mb-5 pl-0">
                        <li class="mb-5">
                            <h4>Assistance dans la préparation des dossiers</h4>
                            <ul class="pl-0">
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>La constitution d’un dossier académique solide et bien structuré.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>La rédaction et la correction des lettres de motivation.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>L’optimisation du CV pour le rendre conforme aux standards français.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>La gestion des traductions et certifications officielles.</li>
                            </ul>
                        </li>
                        <li class="mb-5">
                            <h4>Accompagnement étape par étape jusqu’au visa</h4>
                            <ul class="pl-0">
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Inscription sur les plateformes d’admission comme Campus France.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Suivi des demandes d’admission et des réponses des établissements.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Assistance pour l’obtention des documents financiers nécessaires.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Préparation aux entretiens avec les consulats ou institutions académiques.</li>
                            </ul>
                        </li>
                        <li class="mb-5">
                            <h4>Suivi continu et conseils stratégiques</h4>
                            <ul class="pl-0">
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Des mises à jour régulières sur les statuts des démarches.</li>
                                <li><i class="icon_check_alt2 text-primary mr-3"></i>Des recommandations pour les prochaines étapes.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    ul li {
        list-style-type: none;
    }
</style>


@endsection