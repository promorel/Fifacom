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
                            <span>Procédure Connecté</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la partie breadcrumb -->


<!-- Code pour la section IV - Procédure connectée -->
<section id="procedure-connectee" class="section-plan">
    <div class="content-area container">
        <div class="row mt-5 mb-5 align-items-center">
            <div class="col-md-6">
                <h2>Procédure Connectée</h2>
                <ul class="custom-list">
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Présentation et identification des concernés</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Choix des écoles</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Comment entrer en contact avec les écoles</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Proposition d'entretien pour les écoles si dossier admissible</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Procédure consulaire</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/procedure_connecte.jpg')}}" style="border-radius: 25px;" alt="Image Procédure Connectee" class="img-fluid">
            </div>
        </div>
    </div>
</section>


@endsection