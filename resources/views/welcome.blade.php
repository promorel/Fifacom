@extends('layout.template')
@section('contenu')
<!-- Start Home Section -->
<!-- Start Page Title Section -->

    <!-- slider part here -->
    <section class="banner_part owl-carousel">
        <div class="single_banner_part bg_1">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5>Welcome To Our Varsity</h5>
                            <h2>Education is the best key success in life</h2>
                            <a href="course-list.html" class="btn_2">Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part bg_2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5>Welcome To Online Education</h5>
                            <h2>Education is the backbone of a nation</h2>
                            <a href="course-list.html" class="btn_2">Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part bg_3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5>Welcome To Our Organization</h5>
                            <h2>Education is the best key success in life</h2>
                            <a href="course-list.html" class="btn_2">Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider part end -->

    <!-- course details part here -->
    <section class="course_details padding_bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-md-7">
                    <div class="course_details_iner">
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1200">
                            <img src="img/icon/course_1.svg" alt="">
                            <h4>Next Scheduled</h4>
                            <p>Tosser what plonker mufty squiffy the wireless the monty.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1600">
                            <img src="img/icon/course_2.svg" alt="">
                            <h4>Online Courses</h4>
                            <p>Tosser what plonker mufty squiffy the wireless the monty.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2000">
                            <img src="img/icon/course_3.svg" alt="">
                            <h4>Graduation</h4>
                            <p>Tosser what plonker mufty squiffy the wireless the monty.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2400">
                            <img src="img/icon/course_4.svg" alt="">
                            <h4>University Life</h4>
                            <p>Tosser what plonker mufty squiffy the wireless the monty.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="course_registration">
                        <div class="course_registration_form">
                            <h3>Registration <br>
                            for Course Enroll</h3>
                            <form action="#">
                                <input type="text" name="#" placeholder="Name">
                                <input type="email" name="#" placeholder="Email">
                                <input type="phone" name="#" placeholder="Phone">
                                <select name="#" class="niceSelect">
                                    <option value="Courses Name">Courses Name</option>
                                    <option value="Courses Name1">Courses Name 1</option>
                                    <option value="Courses Name2">Courses Name 2</option>
                                    <option value="Courses Name3">Courses Name 3</option>
                                    <option value="Courses Name4">Courses Name 4</option>
                                </select>
                                <a href="#" class="btn_1">Apply Now</a>
                                <div class="countdown"  id="timer">
                                    <div class="time" id="days" data-aos="fade-up"
                                    data-aos-duration="600"></div>
                                    <div class="time" id="hours" data-aos="fade-up"
                                    data-aos-duration="800"></div>
                                    <div class="time" id="minutes" data-aos="fade-up"
                                    data-aos-duration="1000"></div>
                                    <div class="time" id="seconds" data-aos="fade-up"
                                    data-aos-duration="1200"></div>
                                </div>
                            </form>
                        </div>
                        <img src="img/animated_icon/cources_details_bg.png" alt="#" class="custom-animation1 cources_details_bg">
                        <img src="img/animated_icon/animated_icon_1.png" alt="#" class="custom-animation2 cources_details_icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course details part end -->

    <!-- about us part here -->
    <section class="about_us section_padding" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_img">
                        <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/about.png" alt="#" class="img-fluid">
                        <div class="about_tricker">
                            <div class="tricker_iner">
                                <p>Trusted by</p>
                                <span class="timer" data-from="0" data-to="45"></span><span>k+ </span>
                            </div>
                        </div>
                        <img src="img/animated_icon/about_icon.png" alt="#" class="about_icon custom-animation">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_details">
                        <h2>We are Experts
                            Learning Institution</h2>
                        <h3>20 Years of Experience</h3>
                        <p>Do one absolutely bladdered say bugger all mate only a quid that 
                            chip shop amongst, cuppa excuse my French lemon squeezy bender 
                            zonked my lady gosh cup of tea, have it spiffing good time naff 
                            wind up codswallop crikey.</p>
                            <h3><span>Call Us</span> +456 968 562 75</h3>
                        <a href="course-list.html" class="btn_1">View Courses</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/icon/about_shape_01.png" alt="#" class="about_sharp_1">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
    </section>
    <!-- about us part end -->

    <!-- popular course part here -->
    <section class="popular_course section_padding section_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="section_tittle">
                        <h2>Explore our <br>
                            Popular Courses</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="popular_courses_item owl-carousel">
                        <div data-aos="fade-up"
                data-aos-duration="1200" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_1.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$16.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(120 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Computer Security & Network</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_1.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Dylan Meringue</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>10 Lessons</p>
                                    <p><i class="icon_profile"></i>120</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="1400" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_2.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$30.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(140 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Data Analysis</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_2.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Chauffina Carr</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>20 Lessons</p>
                                    <p><i class="icon_profile"></i>130</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="1600" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_3.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$40.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(150 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Music & Art</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_3.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Jason Response</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>30 Lessons</p>
                                    <p><i class="icon_profile"></i>100</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="1800" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_4.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$50.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(135 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Business Strategy</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_4.png" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Justin Case</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>65 Lessons</p>
                                    <p><i class="icon_profile"></i>122</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="2000" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_5.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$70.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(299 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>English Learning</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_1.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Hanson Deck</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>45 Lessons</p>
                                    <p><i class="icon_profile"></i>90</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="2200" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_6.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$110.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(105 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Algebra & Calculus</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_2.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Adam Smith</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>30 Lessons</p>
                                    <p><i class="icon_profile"></i>80</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="2400" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_7.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$117.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(221 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>History & Philosophy</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_3.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Hanson Deck</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>20 Lessons</p>
                                    <p><i class="icon_profile"></i>17</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="2600" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_8.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$227.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(90 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Business Essentials</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_4.png" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Gunther Beard</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>25 Lessons</p>
                                    <p><i class="icon_profile"></i>28</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up"
                data-aos-duration="2800" class="single_courses_item">
                            <a href="course-details.html"><img src="../../varsity.mhrtheme.com/wp-content/uploads/2021/09/popular_item_9.png" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">$90.00</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(177 Reviews)</span>
                                </div>
                                <a href="course-details.html"><h4>Software Development</h4></a>
                                <a href="teacher.html" class="course_author">
                                    <img src="img/author_1.jpg" alt="#">
                                </a>
                                <p class="author_name"><a href="teacher.html">Samuel Serif</a></p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>50 Lessons</p>
                                    <p><i class="icon_profile"></i>42</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular course part end -->

    <!-- course category part here -->
    <section class="course_category section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="section_tittle">
                        <h2>Browse Online <br>
                            Course Categories</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class="col-lg-12" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="course_category_item owl-carousel">
                        <a href="course-category.html" class="single_category_item pink">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_1.png" alt="#">
                            <h4>Arts & Humanities</h4>
                            <p>10 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_2.png" alt="#">
                            <h4>Business</h4>
                            <p>15 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item yellow">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_3.png" alt="#">
                            <h4>Computer Science</h4>
                            <p>8 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item green">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_4.png" alt="#">
                            <h4>Data Science</h4>
                            <p>20 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item pink">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_1.png" alt="#">
                            <h4>Language Learning</h4>
                            <p>30 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_2.png" alt="#">
                            <h4>Math & Logic</h4>
                            <p>18 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item yellow">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_3.png" alt="#">
                            <h4>Technology</h4>
                            <p>3 Courses</p>
                        </a>
                        <a href="course-category.html" class="single_category_item green">
                            <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/category_icon_4.png" alt="#">
                            <h4>IT & Software</h4>
                            <p>3 Courses</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course category part end -->

    <!-- instructor list part here -->
    <section class="instructor_list padding_bottom" >
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="1200">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Top Instructor</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1200">
                    <div class="single_instructor_item">
                        <div class="single_instructor">
                            <a class="instructor_img">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/instructor_1.png" alt="#" class="img-fluid">
                            </a>
                            <div class="social_icon">
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_linkedin"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                            </div>
                        </div>
                        <div class="single_instructor_tittle">
                            <h4>Dylan Meringue</h4>
                            <p>Sales Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1400">
                    <div class="single_instructor_item">
                        <div class="single_instructor">
                            <a class="instructor_img">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/instructor_2.png" alt="#" class="img-fluid">
                            </a>
                            <div class="social_icon">
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_linkedin"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                            </div>
                        </div>
                        <div class="single_instructor_tittle">
                            <h4>Chauffina Carr</h4>
                            <p>Mathematics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1600">
                    <div class="single_instructor_item">
                        <div class="single_instructor">
                            <a class="instructor_img">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/instructor_3.png" alt="#" class="img-fluid">
                            </a>
                            <div class="social_icon">
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_linkedin"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                            </div>
                        </div>
                        <div class="single_instructor_tittle">
                            <h4>Jason Response</h4>
                            <p>Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1800">
                    <div class="single_instructor_item">
                        <div class="single_instructor">
                            <a class="instructor_img">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/instructor_4.png" alt="#" class="img-fluid">
                            </a>
                            <div class="social_icon">
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_linkedin"></i></a>
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                            </div>
                        </div>
                        <div class="single_instructor_tittle">
                            <h4>Hanson Deck</h4>
                            <p>Sales Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor list part end -->

    <!-- motivation part here -->
    <section class="motivation section_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="motivation_content">
                        <h2>Your motivition & attention will teach you best</h2>
                        <p>Cack gormless young delinquent that bits and bobs he nicked it mush, spiffing smashing he legged it have it codswallop.</p>
                        <ul class="nav nav-tabs" id="motivation_content_tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active single_item" data-toggle="tab" href="#Design" role="tab" aria-selected="true" id="Design-tab" data-aos="fade-up" data-aos-duration="700">
                                    <i class="icon_book_alt"></i>
                                    <p>Graphics Design</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link single_item" data-toggle="tab" href="#Development" role="tab"  aria-selected="false" id="Development-tab" data-aos="fade-up" data-aos-duration="800">
                                    <i class="icon_key"></i>
                                    <p>Self Development</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link single_item" data-toggle="tab" href="#Software" role="tab" aria-selected="false" id="Software-tab" data-aos="fade-up" data-aos-duration="900">
                                    <i class="icon_ribbon_alt"></i>
                                    <p>IT & Software</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="motivation_content_tabcontent">
            <div class="tab-pane fade show active" id="Design" role="tabpanel" aria-labelledby="Design-tab">
                <div class="motivation_video">
                    <a href="https://www.youtube.com/watch?v=f3NWvUV8MD8" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
            <div class="tab-pane fade" id="Development" role="tabpanel" aria-labelledby="Development-tab">
                <div class="motivation_video bg_1">
                    <a href="https://www.youtube.com/watch?v=x4q86IjJFag" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
            <div class="tab-pane fade" id="Software" role="tabpanel" aria-labelledby="Software-tab">
                <div class="motivation_video bg_2">
                    <a href="https://www.youtube.com/watch?v=XRCIzZHpFtY" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- motivation part end -->

    <!-- event part here -->
    <section class="event_list section_padding">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up"
            data-aos-duration="1200">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Our Upcoming Events</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing 
                        super arse over tit matie boy smashing. The little 
                        rotter off his nut codswallop.!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1200">
                        <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/event_list_3.png" alt="" class="img-fluid">
                        <div class="event_list_content">
                            <h5>14 January, 2023 </h5>
                            <h2>Why you Need Advance Developmemt Process Course?</h2>
                            <div class="event_list_tag">
                                <p><i class="icon_clock_alt"></i>8.30 AM - 5.30 PM</p>
                                <p><i class="icon_pin_alt"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div> 
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1600">
                        <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/event_list_2.png" alt="" class="img-fluid">
                        <div class="event_list_content">
                            <h5>14 January, 2023 </h5>
                            <h2>Graphic Illustration: Design with Color and Shape</h2>
                            <div class="event_list_tag">
                                <p><i class="icon_clock_alt"></i>8.30 AM - 5.30 PM</p>
                                <p><i class="icon_pin_alt"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div> 
                    <div class="single_event_list" data-aos="fade-up" data-aos-duration="1800">
                        <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/event_list_1.png" alt="" class="img-fluid">
                        <div class="event_list_content">
                            <h5>14 January, 2023 </h5>
                            <h2>Magazine Design Start to Finish: The Inside Pages</h2>
                            <div class="event_list_tag">
                                <p><i class="icon_clock_alt"></i>8.30 AM - 5.30 PM</p>
                                <p><i class="icon_pin_alt"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div>
                    <div class="event_list_btn" data-aos="fade-up"
                    data-aos-anchor-placement="top-center">
                        <a href="events.html" class="btn_3">View All Events</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <img src="img/icon/shape_06.png" alt="#" class="about_sharp_1 custom-animation">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
        <img src="img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4">
        <img src="img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5">
    </section>
    <!-- event part end -->

    <!-- student review part here -->
    <section class="student_review section_padding" >
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-up"
            data-aos-anchor-placement="top-center">
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="student_review_tittle">
                        <h2>Student Say <br> About Us.</h2>
                        <img src="../../varsity.mhrtheme.com/wp-content/themes/varsity/assets/img/quote.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="student_review_iner owl-carousel">
                        <div class="single_student_review">
                            <p>Loo faff about cockup Harry baking 
                            cakes hunky-dory mush, happy days 
                            on your bike mate cobblers say cor blimey 
                            guvnor brown bread, plastered cuppa bender 
                            geeza chimney pot. Haggle cheesed off butty 
                            say cup of char spiffing good time bum bag 
                            so I said gutted mate the bee's knees queen's 
                            english.!</p>
                            <div class="student_review_content">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/student.png" alt="">
                                <div class="student_info">
                                    <h4>Lance Bogrol</h4>
                                    <p>UX Designer, Sceo Inc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single_student_review">
                            <p>Loo faff about cockup Harry baking 
                            cakes hunky-dory mush, happy days 
                            on your bike mate cobblers say cor blimey 
                            guvnor brown bread, plastered cuppa bender 
                            geeza chimney pot. Haggle cheesed off butty 
                            say cup of char spiffing good time bum bag 
                            so I said gutted mate the bee's knees queen's 
                            english.!</p>
                            <div class="student_review_content">
                                <img src="../../varsity.mhrtheme.com/wp-content/uploads/2022/11/author_5.jpg" alt="">
                                <div class="student_info">
                                    <h4>Adam Smith</h4>
                                    <p>Manager, Tatva Soft</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>
    <!-- student review part end -->

    <!-- Start LTR & RTL Button -->
	<div class="ltr-rtl-button">
		<a class="default-btn active ltr">
		    LTR
		</a>
		<a class="default-btn rtl">
		    RTL
		</a>
	</div>
	<!-- End LTR & RTL Button -->
	
@endsection
