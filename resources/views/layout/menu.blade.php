<header class="header_part">
        <div class="sub_header section_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-7">
                        <div class="header_contact_info">
                            <a href="tel:+4641468425"><i class="icon_phone"></i>+464 145 684 325</a>
                            <a href="mailto:admin@example.com"><i class="icon_mail_alt"></i>admin@example.com</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="header_login_info">
                            <a href="#">Become A Teacher</a>
                            <a href="#">My Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <div class="sidebar_icon troggle_icon d-lg-none">
                                <i class="icon_menu"></i>
                            </div>
                            <div class="logo">
                                <a href="/"><img src="{{asset('logo/logo.png')}}" alt="Logo" style="width: 100px; height: 50px;"></a>
                            </div>

                            <nav class="navbar_bar">
                                <ul>
                                    <li class="mega_menu_dropdown">
                                        <a class="nav-link" href="/">Accueil</a>
                                        
                                       
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="nav-link" href="{{route('a-propos')}}">A propos</a>
                                        
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="nav-link" href="{{route('cours')}}">Cours</a>
                                        
                                    </li>
                                    <li class="mega_menu_dropdown">
                                        <a class="nav-link" href="{{route('temoignages')}}">Témoignages</a>
                                        
                                    </li>
                                    <li><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="navbar_btn">
                                <a href="#" class="btn_1">Commander</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </header>