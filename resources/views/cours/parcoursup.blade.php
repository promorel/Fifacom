@extends('layout.template')
@section('contenu')

    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Cours</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="/">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <a href="../cours">Cours</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Parcoursup</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la partie breadcrumb -->



<!-- Code pour la section II - Parcoursup -->
<section id="parcoursup" class="section-plan">
    <div class="content-area container">
        <div class="row mt-5 mb-5 align-items-center">
            <div class="col-md-6">
                <h2>Parcoursup</h2>
                <ul class="custom-list">
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Présentation de Parcoursup et prise de connaissance du calendrier</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Prise de connaissances des formations et comment effectuer un choix</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Création du compte Parcoursup</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Renseignement des informations personnelles et diplômes</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Confirmation des formations choisies</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Lettre de motivation</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Proposition d'admission et procédure consulaire</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Actions en cas d'absence de réponse ou de non-classement</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/parcoursup.jpg')}}" style="border-radius: 25px;" alt="Image Parcoursup" class="img-fluid">
            </div>
        </div>
    </div>
</section>  

@endsection