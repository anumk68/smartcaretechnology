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
                 <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Services</h2>
                 <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                     <a href="{{ route('index')}}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Services</span>
                 </div>
             </div>
         </section>
         <!-- Page banner area end here -->

         <!-- Service area start here -->
         <section class="service-inner-area pt-120 pb-120">
             <div class="container">
                 <div class="row g-4">
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image1.jpg" alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon1.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">Mobile Website Design</a></h4>
                                 <p>More people are turning to their mobile devices for their e-content and e-shopping
                                     needs. With the whole World in their pockets, it's important to design your website to
                                     best meet their
                                     needs. Mobile websites target smart phone users who make up a good portion of all
                                     internet usage. </p>
                                       <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image2.jpg" alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon2.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">Website Redesign</a></h4>
                                 <p>Users of their mobile devices gladly accepted and embraced the change. Trends are in
                                     constant flux. Keeping up with those trends is extremely important for your business.
                                     New web-applications are always being upgraded. Implementing new changes will give your
                                     website the best look and feel as possible.</p>
  <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image3.jpg" alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon3.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">Website Maintenance</a></h4>
                                 <p>Security is a must. As your business grows, your website will need to grow with it. Your
                                     flow can be decreased by poor scalability. Scalability allows your website to add new
                                     pages, pictures, and products, to optimize the user experiences. </p>
  <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image4.jpg" alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon4.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">Web
                                         Development</a></h4>
                                 <p>
                                     Web
                                     Development

                                     We build custom websites to better suit your needs and the needs of your customers. We
                                     know how to get your name and brand out into the World. Our designs have proven time
                                     and time again to attract visitors and stay intuitive. We are very well versed in
                                     internet security.</p>
                                 <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image5.jpg" alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon5.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">UI/UX Design</a></h4>
                                 <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                     iaculis.</p>
                                 <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-6">
                         <div class="service-two__item">
                             <div class="image">
                                 <img src="{{ asset('public/assets') }}/images/service/service-image6.jpg"
                                     alt="image">
                             </div>
                             <div class="service-two__content">
                                 <div class="icon">
                                     <img src="{{ asset('public/assets') }}/images/icon/service-two-icon6.png"
                                         alt="icon">
                                 </div>
                                 <div class="shape"><img
                                         src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                         alt="shape"></div>
                                 <h4><a href="service.php" class="primary-hover">IT Management</a></h4>
                                 <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                     iaculis.</p>
                                 <a class="read-more-btn" href="{{route('service.details')}}">Read More <i
                                         class="fa-regular fa-arrow-right-long"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- Service area end here -->
         <section class="service-two-area secondary-bg pt-120 pb-120">
             <div class="service-two__shape-left sway_Y__animationY">
                 <img src="{{ asset('public/assets') }}/images/shape/service-two-shape-left.png" alt="shape">
             </div>
             <div class="service-two__shape-right sway_Y__animation">
                 <img src="{{ asset('public/assets') }}/images/shape/service-two-shape-right.png" alt="shape">
             </div>
             <div class="container">
                 <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                     <div class="section-header">
                         <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                             <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <rect x="0.75" y="0.750061" width="18.5" height="10.5" rx="5.25"
                                     stroke="#3C72FC" stroke-width="1.5"></rect>
                                 <mask id="path-2-inside-1_670_477" fill="white">
                                     <path
                                         d="M3 6.00006C3 3.79092 4.79086 2.00006 7 2.00006H13C15.2091 2.00006 17 3.79092 17 6.00006C17 8.2092 15.2091 10.0001 13 10.0001H7C4.79086 10.0001 3 8.2092 3 6.00006Z">
                                     </path>
                                 </mask>
                                 <path
                                     d="M3 6.00006C3 2.96249 5.46243 0.500061 8.5 0.500061H11.5C14.5376 0.500061 17 2.96249 17 6.00006C17 4.61935 15.2091 3.50006 13 3.50006H7C4.79086 3.50006 3 4.61935 3 6.00006ZM17 6.00006C17 9.03763 14.5376 11.5001 11.5 11.5001H8.5C5.46243 11.5001 3 9.03763 3 6.00006C3 7.38077 4.79086 8.50006 7 8.50006H13C15.2091 8.50006 17 7.38077 17 6.00006ZM3 10.0001V2.00006V10.0001ZM17 2.00006V10.0001V2.00006Z"
                                     fill="#3C72FC" mask="url(#path-2-inside-1_670_477)"></path>
                             </svg>
                             Technologies
                         </h5>
                         <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                             Technologies</h2>
                     </div>
                     <div class="arry-btn  d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                         <button class="arry-prev service__arry-prev" tabindex="0" aria-label="Previous slide"
                             aria-controls="swiper-wrapper-d1d139fb81089ba4d"><i
                                 class="fa-light fa-chevron-left"></i></button>
                         <button class="arry-next service__arry-next active" tabindex="0" aria-label="Next slide"
                             aria-controls="swiper-wrapper-d1d139fb81089ba4d"><i
                                 class="fa-light fa-chevron-right"></i></button>
                     </div>
                 </div>
                 <div class="swiper service-two__slider swiper-initialized swiper-horizontal swiper-pointer-events">
                     <div class="swiper-wrapper" id="swiper-wrapper-d1d139fb81089ba4d" aria-live="off"
                         style="transform: translate3d(-2000px, 0px, 0px); transition-duration: 0ms;">
                         <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                             data-swiper-slide-index="3" role="group" aria-label="4 / 6"
                             style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image1.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon1.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">FRONT END DEVELOPMENT</a></h4>
                                     <p>Smart Care Technologies Ltd is a leading Front End development company in India,
                                         providing best-in-class Front End solutions for complete web app development.
                                         The world of software and apps is changing quickly. A great idea must be
                                         complemented with a great user interface, built and designed keeping the modern
                                         customer in mind. The team of front-end developers at Smart Care Technologies Ltd.
                                     </p>

                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                             aria-label="5 / 6" style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image2.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon2.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">Mobile</a></h4>
                                     <p>Smart Care Technologies Ltd provides comprehensive end-to-end enterprise mobility
                                         solutions ranging across different mobile platforms and devices. Our key solutions
                                         include domain-specific solutions, consulting, design, development, and support.

                                     </p>

                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group"
                             aria-label="6 / 6" style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image3.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon3.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">BACKEND / CORE FRAMEWORKS</a></h4>
                                     <p>Smart Care Technologies Ltd addresses unique technology needs of the customers with
                                         software development using core technologies such as Java stack, Mean stack, lamp
                                         stack etc.

                                     </p>

                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 6"
                             style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image1.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon1.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">DATABASE</a></h4>
                                     <p>Our comprehensive MDM (Master Data Management) solutions provide a detailed, simple
                                         and trusted view of your organizational data. It helps our clients achieve
                                         customer-centric as well as business objectives effectively.

                                     </p>

                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                             aria-label="2 / 6" style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image2.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon2.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">BIG DATA AND ANALYTICS</a></h4>
                                     <p>Smart Care Technologies Ltd provides big data solutions such as infrastructure
                                         architecture and analytics enabling businesses to make data-driven decisions and
                                         becoming future-ready.

                                     </p>

                                 </div>
                             </div>
                         </div>
                         <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                             aria-label="3 / 6" style="width: 370px; margin-right: 30px;">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('public/assets') }}/images/service/service-image3.jpg"
                                         alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon3.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape"><img
                                             src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape"></div>
                                     <h4><a href="service.php" class="primary-hover">CLOUD</a></h4>
                                     <p>Partnering leading Smart Care Technologies companies like Microsoft, AWS etc. we
                                         specialize in delivering modern cloud-based solutions to varied industries and
                                         businesses across the globe.

                                     </p>

                                 </div>
                             </div>
                         </div>



                     </div>
                     <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                 </div>
             </div>
         </section>
         <!-- process -->
         <section class="process-area pt-120 pb-120">
             <div class="container">
                 <div class="section-header text-center mb-60">
                     <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                         <img class="me-1" src="{{ asset('public/assets') }}/images/icon/section-title.png"
                             alt="icon">
                         Work Process
                     </h5>
                     <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                         Our Development Process
                     </h2>
                 </div>
                 <div class="row g-4">
                     <div class="col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                         <div class="process__item mb-100">
                             <div class="process-arry bobble__animation">
                                 <img src="{{ asset('public/assets') }}/images/process/process-arry.png" alt="arry-icon">
                             </div>
                             <div class="process__image">
                                 <img src="{{ asset('public/assets') }}/images/process/process-image1.png"
                                     alt="image">
                                 <span class="process-number">1</span>
                             </div>
                             <div class="process__content">
                                 <h4 class="mt-25 mb-10">
                                     Define Requirements
                                 </h4>
                                 <p>In a free hour, when our power of choice is untrammelled and when nothing prevents
                                     dolor
                                     sit amet, consectetur</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                         <div class="process__item mb-100">
                             <div class="process-arry bobble__animation">
                                 <img src="{{ asset('public/assets') }}/images/process/process-arry.png" alt="arry-icon">
                             </div>
                             <div class="process__image">
                                 <img src="{{ asset('public/assets') }}/images/process/process-image2.png"
                                     alt="image">
                                 <span class="process-number">2</span>
                             </div>
                             <div class="process__content">
                                 <h4 class="mt-25 mb-10">
                                     Design &amp; Prototyping
                                 </h4>
                                 <p>In a free hour, when our power of choice is untrammelled and when nothing prevents
                                     dolor
                                     sit amet, consectetur</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                         <div class="process__item">
                             <div class="process__image">
                                 <img src="{{ asset('public/assets') }}/images/process/process-image3.png"
                                     alt="image">
                                 <span class="process-number">3</span>
                             </div>
                             <div class="process__content">
                                 <h4 class="mt-25 mb-10">
                                     Finial Solution
                                 </h4>
                                 <p>In a free hour, when our power of choice is untrammelled and when nothing prevents
                                     dolor
                                     sit amet, consectetur</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- end process -->

         <section class="pricing-area pt-120 pb-120">
             <div class="container">
                 <div class="section-header text-center mb-60">
                     <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                         <img class="me-1" src="{{ asset('public/assets') }}/images/icon/section-title.png"
                             alt="icon">
                         PRICE PLANS
                     </h5>
                     <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                         Flexible Pricing Plans
                     </h2>
                 </div>
                 <div class="row g-4">
                     <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                         data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                         <div class="pricing__item">
                             <div class="item-shape">
                                 <img src="{{ asset('public/assets') }}/images/shape/pricing-item-shape.png"
                                     alt="shape">
                             </div>
                             <div class="pricing-head">
                                 <div>
                                     <h4 class="text-white mb-10">Basic Plan</h4>
                                     <h2>$39<span>/monthly</span></h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon1.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <li>Free 1 5 GB Linux Hosting</li>
                                 <li>Dedicated Tech Experts</li>
                                 <li>24/7 System Monitoring</li>
                                 <li>Security Management</li>
                                 <li>Unlimited Download</li>
                             </ul>
                             <a href="#" class="btn-one d-block text-center">choose Plan <i
                                     class="fa-regular fa-arrow-right-long"></i></a>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                         data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                         <div class="pricing__item">
                             <div class="item-shape">
                                 <img src="{{ asset('public/assets') }}/images/shape/pricing-item-shape.png"
                                     alt="shape">
                             </div>
                             <div class="pricing-head">
                                 <div>
                                     <h4 class="text-white mb-10">Standard Plan</h4>
                                     <h2>$59<span>/monthly</span></h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon2.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <li>Free 1 5 GB Linux Hosting</li>
                                 <li>Dedicated Tech Experts</li>
                                 <li>24/7 System Monitoring</li>
                                 <li>Security Management</li>
                                 <li>Unlimited Download</li>
                             </ul>
                             <a href="#" class="btn-one d-block text-center">choose Plan <i
                                     class="fa-regular fa-arrow-right-long"></i></a>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                         data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                         <div class="pricing__item">
                             <div class="item-shape">
                                 <img src="{{ asset('public/assets') }}/images/shape/pricing-item-shape.png"
                                     alt="shape">
                             </div>
                             <div class="pricing-head">
                                 <div>
                                     <h4 class="text-white mb-10">Premium Plan</h4>
                                     <h2>$79<span>/monthly</span></h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon3.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <li>Free 1 5 GB Linux Hosting</li>
                                 <li>Dedicated Tech Experts</li>
                                 <li>24/7 System Monitoring</li>
                                 <li>Security Management</li>
                                 <li>Unlimited Download</li>
                             </ul>
                             <a href="#" class="btn-one d-block text-center">choose Plan <i
                                     class="fa-regular fa-arrow-right-long"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>


     </main>
 @endsection
