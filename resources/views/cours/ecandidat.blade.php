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
                            <span>Ecandidat</span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la partie breadcrumb -->


<!-- Code pour la section III - Ecandidat -->
<section id="ecandidat" class="section-plan">
    <div class="content-area container">
        <div class="row mt-5 mb-5 align-items-center">
            <div class="col-md-6">
                <h2>Ecandidat</h2>
                <ul class="custom-list">
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Présentation d'Ecandidat</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Création d'un compte sur le site de l'université</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Renseignement des informations personnelles et diplômes</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Candidature aux formations</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Proposition d'admission ou entretien avec l'université</li>
                    <li><i class="icon_check_alt2 text-primary mr-3"></i>Actions en cas d'absence de réponse</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/ecandidat.jpg')}}" style="border-radius: 25px;" alt="Image Ecandidat" class="img-fluid">
            </div>
        </div>
    </div>
</section>



@endsection