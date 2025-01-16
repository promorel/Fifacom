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
                            <span>Procédure Consulaire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la partie breadcrumb -->


<!-- Code pour la section V - Procédure consulaire -->
<section id="procedure-consulaire" class="section-plan">
    <div class="content-area container">
        <div class="row mt-5 mb-5 align-items-center">
            <div class="col-md-6">
                <h2>Procédure Consulaire</h2>
                <ul class="custom-list">
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Effectuer son passeport</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>API et AVI</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Effectuer son choix de logement</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Remplir le formulaire de demande de VISA</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Liste des pièces à déposer</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/procedure_consulaire.jpg')}}" style="border-radius: 25px;" alt="Image Procédure Consulaire" class="img-fluid">
            </div>
        </div>
    </div>
</section>



@endsection