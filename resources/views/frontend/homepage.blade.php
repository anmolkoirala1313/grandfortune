@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            @foreach($data['sliders']  as $index=>$slider)
                <div class="single-slider slider-bg" data-background="{{ asset(imagePath($slider->image)) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <span class="sub-title" data-animation="fadeInUp" data-delay=".2s">{{ $slider->subtitle ?? '' }}</span>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">{{ $slider->title ?? '' }}</h2>
                                    @if($slider->link)
                                        <a href="{{ $slider->link ?? '' }}" class="btn" data-animation="fadeInUp" data-delay=".8s">{{ $slider->link ?? 'View More' }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-shape">
                        <img class="lazy" data-src="{{ asset('assets/frontend/img/banner/banner_shape.png') }}" alt="" data-animation="zoomIn" data-delay=".8s">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- slider-area-end -->

    @if($data['homepage']->mission)
        <section class="services-area-four">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="services-item-four">
                            <div class="services-icon-four">
                                <i class="flaticon-mission"></i>
                            </div>
                            <div class="services-content-four">
                                <h2 class="title"><a>Mission</a></h2>
                                <p>{{ $data['homepage']->mission ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="services-item-four">
                            <div class="services-icon-four">
                                <i class="flaticon-business-presentation"></i>
                            </div>
                            <div class="services-content-four">
                                <h2 class="title"><a>Vision</a></h2>
                                <p>{{ $data['homepage']->vision ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="services-item-four">
                            <div class="services-icon-four">
                                <i class="flaticon-heart"></i>
                            </div>
                            <div class="services-content-four">
                                <h2 class="title"><a>Value</a></h2>
                                <p>{{ $data['homepage']->value ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->description)
        <section class="about-area-six">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        @if($data['homepage']->image_position == 'left')
                            @include($module.'partials.welcome_image')
                        @else
                            @include($module.'partials.welcome_description')
                        @endif
                    </div>
                    <div class="col-lg-6">
                        @if($data['homepage']->image_position == 'right')
                            @include($module.'partials.welcome_image')
                        @else
                            @include($module.'partials.welcome_description')
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- counter-area -->
    <section class="counter-area-three pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-folder-1"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="count"><span class="odometer" data-count="{{ $data['homepage']->project_completed ?? '600' }}"></span></h2>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="count"><span class="odometer" data-count="{{ $data['homepage']->happy_clients ?? '560' }}"></span></h2>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="count"><span class="odometer" data-count="{{ $data['homepage']->visa_approved ?? '785' }}"></span></h2>
                            <p>Visa Approved</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-item-three">
                        <div class="counter-icon">
                            <i class="flaticon-round-table"></i>
                        </div>
                        <div class="counter-content">
                            <h2 class="count"><span class="odometer" data-count="{{ $data['homepage']->success_stories ?? '650' }}"></span></h2>
                            <p>Success Stories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->

    @if(count($data['jobs']) > 1)
        <section class="project-area-four" data-background="{{ asset('assets/frontend/img/bg/services_bg02.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 mb-2">
                        <div class="section-title section-title-three mb-15 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Current Demands</span>
                            <h2 class="title tg-element-title">We Can Inspire And Offer <br/>
                                Different Jobs</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="view-all-btn text-end mb-30">
                            <a href="{{ route('frontend.job.index') }}" class="btn transparent-btn">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($data['jobs'] as $index=>$job)
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="{{ route('frontend.job.show', $job->slug) }}">
                                        <img class="lazy" data-src="{{ asset(imagePath($job->image)) }}" alt="">
                                    </a>
                                </div>
                                <div class="project-content">
                                    <a href="{{ route('frontend.job.show', $job->slug) }}" class="tag">
                                        @if(@$job->end_date >= date('Y-m-d'))
                                            {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </a>
                                    <h2 class="title"><a href="{{ route('frontend.job.show', $job->slug) }}">{{ $job->title ?? '' }}</a></h2>
                                    <a href="{{ route('frontend.job.show', $job->slug) }}" class="link-arrow"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->action_title)
        <section class="cta-area-four">
            <div class="container">
                <div class="cta-inner-wrap-two" data-background="{{ asset('assets/frontend/img/bg/cta_bg02.jpg') }}">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="cta-content">
                                <div class="cta-info-wrap">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call For More Info</span>
                                        <a href="tel:{{$setting_data->phone ?? $setting_data->mobile ?? ''}}">{{$setting_data->phone ?? $setting_data->mobile ?? ''}}</a>
                                    </div>
                                </div>
                                <h2 class="title">{{ $data['homepage']->action_title ?? '' }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cta-btn text-end">
                                <a href="{{ $data['homepage']->action_link ?? '/contact-us' }}" class="btn btn-three">{{ $data['homepage']->action_button ?? 'Start Here' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['services']) > 0)
        <section class="services-area services-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Our Dedicated Categories</span>
                            <h2 class="title tg-element-title">Spotlight On Some Of <br> Most Important Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($data['services'] as $index=>$service)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="services-item-two">
                            <div class="services-thumb-two">
                                <img class="lazy" data-src="{{ asset(thumbnailImagePath($service->image)) }}" alt="">
                                <div class="item-shape">
                                    <img class="lazy" data-src="{{ asset('assets/frontend/img/services/services_item_shape.png') }}" alt="">
                                </div>
                            </div>
                            <div class="services-content-two">
                                <div class="icon">
                                    <i class="flaticon-layers"></i>
                                </div>
                                <h2 class="title"><a href="{{ route('frontend.service.show', $service->key) }}">{{ $service->title ?? '' }}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(count( $data['clients']) > 0)
        <section class="brand-aera-two">
            <div class="container">
                <div class="brand-item-wrap">
                    <h6 class="title">Trusted by many companies around the world</h6>
                    <div class="row brand-active">
                        @foreach($data['clients'] as $index=>$client)
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                        <img src="{{ asset(imagePath($client->image)) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- project-area -->
    <section class="project-area project-bg" data-background="assets/img/bg/project_bg.jpg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="section-title mb-40 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Case Studies</span>
                        <h2 class="title tg-element-title">Keep Your Business Safe & Ensure High Availability.</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-top-content">
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="project-item-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container project-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-thumb">
                                            <a href="project-details.html"><img src="assets/img/project/project_img01.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <a href="project.html" class="tag">Achievment</a>
                                            <h2 class="title"><a href="project-details.html">based on your Correct situation</a></h2>
                                            <a href="project-details.html" class="link-arrow"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-thumb">
                                            <a href="project-details.html"><img src="assets/img/project/project_img02.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <a href="project.html" class="tag">Business Strategy</a>
                                            <h2 class="title"><a href="project-details.html">Best mortgage rates guaranteed.</a></h2>
                                            <a href="project-details.html" class="link-arrow"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-thumb">
                                            <a href="project-details.html"><img src="assets/img/project/project_img03.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <a href="project.html" class="tag">Investment</a>
                                            <h2 class="title"><a href="project-details.html">Investment Policy For New Project</a></h2>
                                            <a href="project-details.html" class="link-arrow"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-thumb">
                                            <a href="project-details.html"><img src="assets/img/project/project_img04.jpg" alt=""></a>
                                        </div>
                                        <div class="project-content">
                                            <a href="project.html" class="tag">Achievment</a>
                                            <h2 class="title"><a href="project-details.html">based on your Correct situation</a></h2>
                                            <a href="project-details.html" class="link-arrow"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-area-two -->

    <!-- faq-area -->
    <section class="faq-area">
        <div class="faq-bg-shape" data-background="assets/img/images/faq_shape01.png"></div>
        <div class="faq-shape-wrap">
            <img src="assets/img/images/faq_shape02.png" alt="">
            <img src="assets/img/images/faq_shape03.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="faq-img-wrap">
                        <img src="assets/img/images/faq_img01.jpg" alt="">
                        <img src="assets/img/images/faq_img02.jpg" alt="" data-parallax='{"y" : 100 }'>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">Our Service Benifits</span>
                            <h2 class="title tg-element-title">Keep Your Business Safe & Ensure High Availability.</h2>
                        </div>
                        <p>Ever find yourself staring at your computer s good consulting slogan to come to mind? Oftentimes.</p>
                        <div class="accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Interdum et malesuada fames ac ante ipsum
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Interdum et malesuada fames ac ante ipsum
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Interdum et malesuada fames ac ante ipsum
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- request-area -->
    <section class="request-area request-bg" data-background="assets/img/bg/request_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="request-content tg-heading-subheading animation-style2">
                        <h2 class="title tg-element-title">Let’s Request A Schedule For <br> Free Consultation</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="request-content-right">
                        <div class="request-contact">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="content">
                                <span>Hotline 24/7</span>
                                <a href="tel:0123456789">+123 8989 444</a>
                            </div>
                        </div>
                        <div class="request-btn">
                            <a href="contact.html" class="btn">Request a Schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="request-shape">
            <img src="assets/img/images/request_shape.png" alt="">
        </div>
    </section>
    <!-- request-area-end -->

    <!-- team-area -->
    <section class="team-area team-bg" data-background="assets/img/bg/team_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-50 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Skilled Team Members</span>
                        <h2 class="title tg-element-title">Meet Our Dedicated Team</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img01.jpg" alt="">
                            <div class="team-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h2 class="title"><a href="team-details.html">Brooklyn Simmons</a></h2>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img02.jpg" alt="">
                            <div class="team-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h2 class="title"><a href="team-details.html">Guy Hawkins</a></h2>
                            <span>Investment Department</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img03.jpg" alt="">
                            <div class="team-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h2 class="title"><a href="team-details.html">Savannah Nguyen</a></h2>
                            <span>Business Consulting</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team/team_img04.jpg" alt="">
                            <div class="team-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h2 class="title"><a href="team-details.html">Kristin Watson</a></h2>
                            <span>Marketing Head</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area testimonial-bg" data-background="assets/img/bg/testimonial_bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial-img">
                        <img src="assets/img/images/testimonial_img.jpg" alt="">
                        <div class="review-wrap">
                            <img src="assets/img/icons/rating.svg" alt="">
                            <div class="content">
                                <h2 class="title">15k</h2>
                                <p>Positive <br> Review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-item-wrap">
                        <div class="testimonial-active">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="content-top">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="assets/img/icons/quote.svg" alt="">
                                        </div>
                                    </div>
                                    <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                    <div class="testimonial-info">
                                        <h4 class="title">Mr.Robey Alexa</h4>
                                        <span>CEO, Gerow Agency</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="content-top">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="assets/img/icons/quote.svg" alt="">
                                        </div>
                                    </div>
                                    <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, elita Moremsit amet.</p>
                                    <div class="testimonial-info">
                                        <h4 class="title">Guy Hawkins</h4>
                                        <span>CEO, Gerow Agency</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">Pricing Chart</span>
                        <h2 class="title tg-element-title">Best Pricing Plane For You</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting <br> slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="pricing-tab">
                    <span class="tab-btn monthly_tab_title">Monthly</span>
                    <span class="pricing-tab-switcher"></span>
                    <span class="tab-btn annual_tab_title">Yearly</span>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Basic Plan</h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>$</strong>19.00<span>/month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong>119.00<span>/month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 User Activities</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Unlimited Access</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">No Hidden Charge</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">03 Time Updates</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Figma Source File</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Many More Facilities</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="contact.html" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box active">
                            <span class="popular-tag">Popular</span>
                            <div class="pricing-head">
                                <h2 class="title">Standard Plan</h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>$</strong>39.00<span>/month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong>329.00<span>/month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 User Activities</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Unlimited Access</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">No Hidden Charge</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">03 Time Updates</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Figma Source File</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Many More Facilities</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="contact.html" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="pricing-box">
                            <div class="pricing-head">
                                <h2 class="title">Business Plan</h2>
                                <p>Ever find yourself staring at your follow computer screen a good</p>
                            </div>
                            <div class="pricing-price">
                                <h2 class="price monthly_price"><strong>$</strong>99.00<span>/month</span></h2>
                                <h2 class="price annual_price"><strong>$</strong>899.00<span>/month</span></h2>
                            </div>
                            <div class="pricing-list">
                                <ul class="list-wrap">
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">5000 User Activities</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Unlimited Access</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">No Hidden Charge</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">03 Time Updates</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Figma Source File</li>
                                    <li><img src="assets/img/icons/check_icon02.svg" alt="">Many More Facilities</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="contact.html" class="btn">Get The Plan Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->

    <!-- contact-area -->
    <section class="contact-area contact-bg" data-background="assets/img/bg/contact_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="section-title mb-30 tg-heading-subheading animation-style2">
                            <span class="sub-title tg-element-title">GET IN TOUCH</span>
                            <h2 class="title tg-element-title">We Are Connected To Help Your Business!</h2>
                        </div>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="number" placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Subject *">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea placeholder="Comments *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-shape">
            <img src="assets/img/images/contact_shape.png" alt="">
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- blog-post-area -->
    <section class="blog-post-area">
        <div class="blog-bg" data-background="assets/img/bg/blog_bg.jpg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-60 tg-heading-subheading animation-style2">
                        <span class="sub-title tg-element-title">News & Blogs</span>
                        <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting <br> slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                            <span class="date"><strong>25</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="blog.html" class="tag">Development</a>
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <a href="blog-details.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                            <span class="date"><strong>25</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="blog.html" class="tag">Development</a>
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <a href="blog-details.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                            <span class="date"><strong>25</strong>Jan</span>
                        </div>
                        <div class="blog-post-content">
                            <a href="blog.html" class="tag">Development</a>
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <a href="blog-details.html" class="link-btn">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-post-area-end -->

    <!-- brand-area -->
    <div class="brand-aera pb-100">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img01.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img02.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img03.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img04.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img05.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brand-item">
                        <img src="assets/img/brand/brand_img03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
