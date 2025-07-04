@extends('frontend.layouts.app')
@section('content')
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="{{ asset('public/assets') }}/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="{{ asset('public/assets') }}/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="{{ asset('public/assets') }}/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="{{ asset('public/assets') }}/images/banner/inner-banner-shape3.png"
                    alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">How we work</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="{{ route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>How we work</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->


        <!-- About area start here -->
        <section class="about-area sub-bg pt-120">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img src="{{ asset('public/assets') }}/images/shape/about-line.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__left-item">
                            <div class="image big-image">
                                <img src="{{ asset('public/assets') }}/images/about/about-image1.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <div class="video__btn-wrp">
                                    <div class="video-btn video-pulse">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                                <img src="{{ asset('public/assets') }}/images/about/about-image2.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img src="{{ asset('public/assets') }}/images/shape/about-circle.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="{{ asset('public/assets') }}/images/icon/section-title.png"
                                    alt="icon">
                                Preparation
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Preparation/Brief
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <b>— Understand your business, your environment and your competition.
                                </b>
                                Develop a thorough understanding of the project, audience, and objectives to formulate a
                                digital strategy.


                            </p>
                        </div>
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{ asset('public/assets') }}/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="{{route('contact')}}" class="btn-one">Contact <i
                                    class="fa-regular fa-arrow-right-long"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <section class="about-area about-three-area sub-bg ">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                style="visibility: hidden; animation-duration: 1500ms; animation-delay: 400ms; animation-name: none;">

            </div>
            <div class="about-three__box-up wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
                <img class="sway_Y__animationY" src="{{ asset('public/assets') }}/images/shape/about-three-box-up.png"
                    alt="shape">
            </div>
            <div class="about-three__box-down wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
                <img class="sway_Y__animation" src="{{ asset('public/assets') }}/images/shape/about-three-box-down.png"
                    alt="shape">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="about-three__left-item">
                            <div class="section-header mb-40">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                    <img class="me-1" src="{{ asset('public/assets') }}/images/icon/section-title.png"
                                        alt="icon">
                                    Planning
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                    Planning</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                    <b>— Identify what is neededin terms of content, features and design elements</b>
                                    Craft a purposeful design to reflect the objectives and indicate the direction for the
                                    entire project.

                                </p>
                            </div>
                            <div class="about-three__info bor-bottom pb-30">

                            </div>
                            <div class="about__info mt-30 wow fadeInDown" data-wow-delay="400ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInDown;">

                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <div class="about-call-icon">
                                        <span><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_918_1337)">
                                                    <path
                                                        d="M5.41667 4.33337H9.75L11.9167 9.75004L9.20833 11.375C10.3685 13.7275 12.2725 15.6315 14.625 16.7917L16.25 14.0834L21.6667 16.25V20.5834C21.6667 21.158 21.4384 21.7091 21.0321 22.1154C20.6257 22.5218 20.0746 22.75 19.5 22.75C15.2742 22.4932 11.2885 20.6987 8.2949 17.7051C5.3013 14.7115 3.5068 10.7258 3.25 6.50004C3.25 5.9254 3.47827 5.3743 3.8846 4.96798C4.29093 4.56165 4.84203 4.33337 5.41667 4.33337Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M16.25 7.58337C16.8246 7.58337 17.3757 7.81165 17.7821 8.21798C18.1884 8.6243 18.4167 9.1754 18.4167 9.75004"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M16.25 3.25C17.9739 3.25 19.6272 3.93482 20.8462 5.15381C22.0652 6.37279 22.75 8.02609 22.75 9.75"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="26" height="26" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span>
                                    </div>
                                    <div class="info">
                                        <span class="sm-font fw-600 secondary-color">Call Us Now</span>
                                        <h5>+208-555-0112</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="faq__image about-three__image image wow fadeInRight" data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInRight;">
                            <div class="about-three-dot">
                                <img class="sway__animationX"
                                    src="{{ asset('public/assets') }}/images/shape/about-three-dot.png" alt="shape">
                            </div>
                            <div class="about-three-count p-4 d-flex align-items-center gap-3">
                                <img class="icon" src="{{ asset('public/assets') }}/images/icon/about-three-icon3.png"
                                    alt="icon">
                                <div class="con">
                                    <h3><span class="count">6,561</span>+</h3>
                                    <span class="secondary-color sm-font">Satisfied Clients</span>
                                </div>
                            </div>
                            <div class="faq__line sway__animation">
                                <img src="{{ asset('public/assets') }}/images/shape/faq-line.png" alt="image">
                            </div>
                            <img src="{{ asset('public/assets') }}/images/about/about-three-image.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->

        <!-- About area start here -->
        <section class="about-area sub-bg pt-120">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img src="{{ asset('public/assets') }}/images/shape/about-line.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__left-item">
                            <div class="image big-image">
                                <img src="{{ asset('public/assets') }}/images/about/about-image1.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <div class="video__btn-wrp">
                                    <div class="video-btn video-pulse">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                                <img src="{{ asset('public/assets') }}/images/about/about-image2.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img src="{{ asset('public/assets') }}/images/shape/about-circle.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="{{ asset('public/assets') }}/images/icon/section-title.png"
                                    alt="icon">
                                Production / Launch

                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Production /
                                Launch
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <b>— The exciting bit – at the end of this process you have a completed website
                                </b>
                                Bring the design to life in the form of an interactive and functional prototype. Review,
                                refine and optimise. Then Get the site operational, put it live, and setup the technology


                            </p>
                        </div>
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="{{ asset('public/assets') }}/images/icon/about-icon1.png"
                                            alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                          <a href="{{route('contact')}}" class="btn-one">Contact <i
                                    class="fa-regular fa-arrow-right-long"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
