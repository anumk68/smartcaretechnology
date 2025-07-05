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
                     <a href="{{ route('index') }}">Home</a><span><i
                             class="fa-regular fa-angles-right mx-2"></i>Services</span>
                 </div>
             </div>
         </section>
         <!-- Service area start here -->
         <section class="service-inner-area pt-120 pb-120">
             <div class="container">
                 <div class="row g-4">
                     @forelse ($services as $service)
                         <div class="col-lg-4 col-md-6">
                             <div class="service-two__item">
                                 <div class="image">
                                     <img src="{{ asset('storage/app/public/' . $service->banner_image) }}" alt="image">
                                 </div>
                                 <div class="service-two__content">
                                     <div class="icon">
                                         <img src="{{ asset('public/assets') }}/images/icon/service-two-icon1.png"
                                             alt="icon">
                                     </div>
                                     <div class="shape">
                                         <img src="{{ asset('public/assets') }}/images/shape/service-two-item-shape.png"
                                             alt="shape">
                                     </div>
                                     <h4>
                                         <a href="{{ url('services-details/' . $service->slug) }}" class="primary-hover">
                                             {{ $service->service_name }}
                                         </a>
                                     </h4>
                                     <p>{{ \Illuminate\Support\Str::words(strip_tags($service->description), 16, '...') }}
                                     </p>
                                     <a class="read-more-btn" href="{{ url('services-details/' . $service->slug) }}">
                                         Read More <i class="fa-regular fa-arrow-right-long"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     @empty
                         <div class="col-12 text-center">
                             <h5>No services found.</h5>
                         </div>
                     @endforelse
                 </div>
             </div>
         </section>

         @if ($services->count())
             <div class="pegi justify-content-center mt-60">
                 @if ($services->onFirstPage())
                     <span class="disabled"><i class="fa-solid fa-arrow-left-long primary-color transition"></i></span>
                 @else
                     <a href="{{ $services->previousPageUrl() }}"><i
                             class="fa-solid fa-arrow-left-long primary-color transition"></i></a>
                 @endif

                 @for ($page = 1; $page <= $services->lastPage(); $page++)
                     @if ($page == $services->currentPage())
                         <a href="{{ $services->url($page) }}"
                             class="active">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                     @else
                         <a href="{{ $services->url($page) }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
                     @endif
                 @endfor

                 @if ($services->hasMorePages())
                     <a href="{{ $services->nextPageUrl() }}"><i
                             class="fa-solid fa-arrow-right-long primary-color transition"></i></a>
                 @else
                     <span class="disabled"><i class="fa-solid fa-arrow-right-long primary-color transition"></i></span>
                 @endif
             </div>
         @endif

         <!-- Service area end here -->

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
                                 <img src="{{ asset('public/assets') }}/images/process/process-image1.png" alt="image">
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
                                 <img src="{{ asset('public/assets') }}/images/process/process-image2.png" alt="image">
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
                                     <h4 class="text-white mb-10">Small Business</h4>
                                     <h2>$499</h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon1.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <li> Basic small business website development package. Perfect for start-ups or
                                     Home-business.</li>

                                 <li>Up to 50 products/variants</li>
                                 <li>Basic branding</li>
                                 <li>Ready Theme Based</li>
                                 <li>Online Blog / NEWS Module</li>
                                 <li>Up to 3 content pages</li>
                                 <li>Social media connections</li>
                                 <li>Newsletter sign-up form</li>
                                 <li>1 payment gateway</li>
                                 <li>15 Day Free Maintenance</li>
                                 <li>Free training resources</li>

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
                                     <h4 class="text-white mb-10">Mid-Size Business</h4>
                                     <h2>$999</h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon2.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <ul>
                                     <li>Very Popular small-business marketing package includes several tools to help
                                         promote your business and drive revenue</li>
                                     <li>Everything in Small Business Package</li>
                                     <li>Up to 100 products/variants</li>
                                     <li>Up to 5 content pages</li>
                                     <li>MailChimp integration</li>
                                     <li>Multi lingual support - Two initial languages, links to change language</li>
                                     <li>Minor theme customisations</li>
                                     <li>2 shipping zones</li>
                                 </ul>

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
                                     <h4 class="text-white mb-10">Large Business</h4>
                                     <h2>
                                         $1449*</h2>
                                 </div>
                                 <div class="pricing-icon"
                                     data-background="{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png"
                                     style="background-image: url(&quot;{{ asset('public/assets') }}/images/shape/pricing-icon-bg.png&quot;);">
                                     <img src="{{ asset('public/assets') }}/images/icon/pricing-icon3.png"
                                         alt="icon">
                                 </div>
                             </div>
                             <ul>
                                 <ul>
                                     <li>Bespoke packages for large businesses and e-commerce websites to conquer the world
                                         of online business with easy payment gateways</li>
                                     <li>Everything in Mid-Size Business Package</li>
                                     <li>Up to 150 products/variants</li>
                                     <li>Up to 10 content pages</li>
                                     <li>Enhanced theme customisations</li>
                                     <li>Gift card setup/configuration</li>
                                     <li>Notification customisations</li>
                                 </ul>

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
