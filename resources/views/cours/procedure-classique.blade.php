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
                            <span>Procédure Classique</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la partie breadcrumb -->


<!-- Code pour la section I - Procédure classique -->
<section id="procedure-classique" class="section-plan">
    <div class="content-area container">
        <div class="row mt-5 mb-5 align-items-center">
            <div class="col-md-6">
                <h2>Procédure Classique</h2>
                <ul class="custom-list">
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Présentation de la PCF</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Création d'un compte CF</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Renseignement des informations personnelles et diplômes</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Comment effectuer la recherche d'universités et le choix de formation</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>La lettre de motivation</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Soumission du dossier</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Préparer son entretien Campus France</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Réponse positive : "Je suis accepté" - Que faire ?</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Procédure consulaire</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Absence de réponse positive</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/procedure_classique.jpg')}}" style="border-radius: 25px;" alt="Image Procédure Classique" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection