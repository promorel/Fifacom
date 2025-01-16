@extends('layout.template')
@section('contenu')



    <!-- breadcrumb part -->
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Contact</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="/">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- Start contact us -->
    <div class="review_form contact_form section_padding">
        <div class="container">
            <h3 data-aos="fade-up" data-aos-duration="1200">Laisser un message pour nous contacter</h3>
            @if(session('success'))
                <div class="alert bg-success opacity-80 d-flex align-items-left text-white p-4 rounded">
                    <span class="fs-15 fw-bold">
                        {{ session('success') }}
                    </span>
                </div>
            @endif
            <form data-aos="fade-up" data-aos-duration="1600" method="POST" action="{{ route('contact.send') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12">
                        <div class="form_single_item">
                            <input type="text" name="name" placeholder="Nom et prénom(s)" required>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="form_single_item">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="form_single_item">
                            <input type="phone" name="phone" placeholder="Téléphone" required>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="form_single_item">
                            <input type="text" name="subject" placeholder="Objet" required>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="form_single_item">
                            <textarea name="message" placeholder="Entrer votre message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <input type="submit" class="btn_3" value="Envoyer">
                </div>
            </form>
        </div>
    </div>   
    <!-- End contact us -->


@endsection