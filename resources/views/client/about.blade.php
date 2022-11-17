@extends('client.layouts.main')
@push('title')
<title>
    About Us
</title>
@endpush
@section('main-section')
<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <div class="about-banner-wrap banner-space about-us-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-banner-content text-center">
                            <h1 class="mb-15 text-white">About Online Engineering</h1>
                            <h5 class="font-weight--normal text-white">Online Engineering specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Our company</h6>
                            <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box section-space--pb_70">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="modern-number-01">
                                <h2 class="heading  me-5"><span class="mark-text">38</span>Years’ Experience in IT</h2>
                                <h6 class="heading mt-30">More About Our Success Stories</h6>
                            </div>
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">
                                <div class="text">Online Engineering specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.</div>
                                <div class="button-text">
                                    <a href="#" class="btn-text">
                                        Discover now
                                        <span class="button-icon ml-1">
                                <i class="far fa-long-arrow-right"></i>
                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->




        <!--========= About Resources Wrapper Start ===========-->

        <!--========= About Resources Wrapper End ===========-->
        <!--========= About Delivering Wrapper Start ===========-->
        <div class="about-delivering-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_20">
                            <h3 class="heading">We excel in delivering <br>optimal solutions.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title"> Warranty Management IT </h5>
                                    <div class="desc">Our service offerings enhance customer experience throughout secure &amp; highly functional end-to-end warranty management. </div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title"> Quality Control System </h5>
                                    <div class="desc">It's more than a responsibility but a guarantee from us to gain customer trust with highly reliable quality control system. </div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title">Highly Professional Staffs </h5>
                                    <div class="desc">Having obtained the official & formal training in IT technology and technical fields, our staffs know more than what they show. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title">Product Engineering & Services </h5>
                                    <div class="desc">Develop and propose product improvements through periodical and accurate testing, repairing & refining every version. </div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title">Infrastructure Integration Technology </h5>
                                    <div class="desc">At Online Engineering, we have a holistic and integrated approach towards core modernization to experience technological evolution. </div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h5 class="title">Information Security Management </h5>
                                    <div class="desc">Information security has been a rising issue lately due to a series of scandals from big companies, rest assured, we're here. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== fun fact Wrapper Start ==========-->

        <!--=========== fun fact Wrapper End ==========-->
        <!--====================  testimonial section ====================-->
        {{-- <div class="testimonial-slider-area section-space--pt_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">Testimonials</h6>
                            <h3 class="heading">What do people praise about <span class="text-color-primary"> Online Engineering?</span></h3>
                        </div>
                        <div class="testimonial-slider">
                            <div class="swiper-container testimonial-slider__container">
                                <div class="swiper-wrapper testimonial-slider__wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="{{url('client')}}/images/testimonial/Online Engineering-testimonial-avata-02-90x90.webp" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">Marketing</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Online Engineering is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="{{url('client')}}/images/testimonial/Online Engineering-testimonial-avata-03-90x90.webp" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Monica Blews</h6>
                                                        <span class="designation">Web designer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Online Engineering is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="{{url('client')}}/images/testimonial/Online Engineering-testimonial-avata-04-90x90.webp" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">WEB DESIGNER</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Online Engineering is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="{{url('client')}}/images/testimonial/Online Engineering-testimonial-avata-01-90x90.webp" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">Abbie Ferguson</h6>
                                                        <span class="designation">WEB DESIGNER</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Online Engineering is one of the most impressive to me.</div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--====================  End of testimonial section  ====================-->

        <!--====================  brand logo slider area ====================-->
        <div class="brand-logo-slider-area section-space--ptb_60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- brand logo slider -->
                        <div class="brand-logo-slider__container-area">
                            <div class="swiper-container brand-logo-slider__container">
                                <div class="swiper-wrapper brand-logo-slider__one">
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-01.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-01-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-02.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-02-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-03.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-03-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-04.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-04-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-05.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-05-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-06.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-06-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-07.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-07-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-08.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-08-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-09.webp" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{url('client')}}/images/brand/Online Engineering-client-logo-09-hover.webp" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of brand logo slider area  ====================-->
        <!--============ Contact Us Area Start =================-->
        <div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="image">
                            <img class="img-fluid" src="{{url('client')}}/images/banners/home-cybersecurity-contact-bg-image.webp" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 ms-auto">
                        <div class="contact-info style-two text-left">

                            <div class="contact-info-title-wrap text-center">
                                <div class="ht-star-rating lg-style">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="sub-text">by 700+ customers for 3200+ clients</p>
                            </div>

                            <div class="contact-list-item">
                                <a href="tel:190068668" class="single-contact-list">
                                    <div class="content-wrap">
                                        <div class="content">
                                            <div class="icon">
                                                <span class="fal fa-phone"></span>
                                            </div>
                                            <div class="main-content">
                                                <h6 class="heading">Call for advice now!</h6>
                                                <div class="text">1900 68668</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="mailto:hello@Online Engineering.com" class="single-contact-list">
                                    <div class="content-wrap">
                                        <div class="content">
                                            <div class="icon">
                                                <span class="fal fa-envelope"></span>
                                            </div>
                                            <div class="main-content">
                                                <h6 class="heading">Say hello</h6>
                                                <div class="text">hello@Online Engineering.com</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Contact Us Area End =================-->

    </div>

</div>
@endsection
