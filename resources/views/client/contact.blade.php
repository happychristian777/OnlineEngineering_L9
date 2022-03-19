@extends('client.layouts.main')
@push('title')
    <title>
        Contact Us
    </title>
@endpush
@section('main-section')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Contact us</h2>
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                            <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap">
                            <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                {!! Form::open(['url' => '/contact','method'=>'post','id'=>'cpntact-form']) !!}
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            {{-- <input name="con_name" type="text" placeholder="Name *"> --}}
                                            {!! Form::text('name','',['placeholder'=>'Name *']) !!}
                                            @if($errors->has('name'))
                                                <div class="text text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="contact-inner">
                                            {!! Form::email('email','',['placeholder'=>'Email *']) !!}
                                            @if($errors->has('email'))
                                            <div class="text text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        {!! Form::text('phone','',['placeholder'=>'Phone Number']) !!}
                                    </div>
                                    <div class="contact-inner">
                                        {!! Form::text('subject','',['placeholder'=>'Subject *']) !!}
                                        @if($errors->has('subject'))

                                        <div class="text text-danger">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </div>
                                    <div class="contact-inner contact-message">
                                        {!! Form::textarea('message','',['placeholder'=>'Please Describe what you need']) !!}
                                        @if($errors->has('message'))
                                            <div class="text text-danger">{{ $errors->first('message') }}</div>
                                            @endif
                                        </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->

        <!--====================  Conact us info Start ====================-->
        <div class="contact-us-info-wrappaer section-space--pb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20">San Francisco</h5>
                            <ul class="conact-info__list">
                                <li>58 Howard Street #2 San Francisco, CA 941</li>
                                <li><a href="#" class="hover-style-link text-color-primary">contact.sanfrancisco@mitech.com</a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20">New York</h5>
                            <ul class="conact-info__list">
                                <li>58 Howard Street #14 New York</li>
                                <li><a href="#" class="hover-style-link text-color-primary">contact.newyork@mitech.com</a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold">(+47)1221 09878</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="conact-info-wrap mt-30">
                            <h5 class="heading mb-20">Russia</h5>
                            <ul class="conact-info__list">
                                <li>The Courtyard Building 11 Curtain Road, Russia</li>
                                <li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
                                <li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--====================  Conact us info End  ====================-->
        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--two text-center">
                            <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
    </div>
    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper reveal-footer bg-gray">
        <div class="footer-area section-space--ptb_80">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                        <div class="footer-widget__logo mb-30">
                            <img src="{{url('client')}}/images/logo/dark-logo-160x48.webp" width="160" height="48" class="img-fluid" alt="">
                        </div>
                        <ul class="footer-widget__list">
                            <li>58 Howard Street #2 San Francisco, CA 941</li>
                            <li><a href="mailto:contact@aeroland.com" class="hover-style-link">contact@aeroland.com</a></li>
                            <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                            <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">IT Services</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">Managed IT</a></li>
                            <li><a href="#" class="hover-style-link">IT Support</a></li>
                            <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                            <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                            <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Quick links</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                            <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                            <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                            <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Support</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">Forum Support</a></li>
                            <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                            <li><a href="#" class="hover-style-link">Contact Us</a></li>
                            <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                            <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <div class="footer-widget__title section-space--mb_50"></div>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="image_btn"><img class="img-fluid" src="{{url('client')}}/images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                            <li><a href="#" class="image_btn"><img class="img-fluid" src="{{url('client')}}/images/icons/aeroland-button-app-store.webp" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area section-space--pb_30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="copyright-text">&copy; 2021 Mitech. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <ul class="list ht-social-networks solid-rounded-icon">

                            <li class="item">
                                <a href="https://twitter.com/" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-twitter link-icon"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-facebook-f link-icon"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-instagram link-icon"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-linkedin link-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->









</div>
@endsection
