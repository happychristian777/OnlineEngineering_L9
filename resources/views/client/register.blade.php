@extends('client.layouts.main')
@push('title')
    <title>
        Sign Up
    </title>
@endpush
@section('main-section')

<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!--============ Appointment Hero Start ============-->
        <div class="appointment-hero-wrapper appointment-hero-bg section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="appointment-hero-wrap wow move-up">
                            <div class="appointment-hero-text">
                                <h6 class="text-white">Secure & IT Services </h6>
                                <h1 class="font-weight--reguler text-white mb-30">Excellent IT services for <span class="text-line">your success</span></h1>
                                <div class="hero-button">
                                    <div class="video-popup infotech-video-box">
                                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="single-popup-wrap video-link">
                                            <div class="video-content">
                                                <div class="ht-popup-video video-button">
                                                    <div class="video-mark">
                                                        <div class="wave-pulse wave-pulse-1"></div>
                                                        <div class="wave-pulse wave-pulse-2"></div>
                                                    </div>
                                                    <div class="video-button__two">
                                                        <div class="video-play">
                                                            <span class="video-play-icon"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="video-text">
                                                    How we work
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 me-auto ms-auto col-md-6">
                        <div class="business-solution-form-wrap me-auto ms-auto">
                            <div class="contact-title text-center section-space--mb_40">
                                <h5 class="mb-10">Sign Up</h5>
                                <p class="text">It's out pleasure to have a chance to cooperate.</p>
                            </div>

                            <form  action="{{ route('register') }}" method="post">
                                @csrf
                                <!-- <form id="contact-form" action="https://whizthemes.com/mail-php/jowel/mitech/php/hero-mail.php" method="post"> -->
                                <div class="contact-form__two">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *" value="{{old('name')}}">
                                    </div>
                                    @if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email Address*" value="{{old('email')}}">
                                    </div>
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                   @endif
                                    <div class="contact-inner">
                                        <input name="contact" type="text" placeholder="Contact Number *" value="{{old('contact')}}">
                                    </div>

                                    <div class="contact-inner">
                                        <input name="password" type="password" placeholder="Password *">
                                    </div>
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                    <div class="contact-inner">
                                        <input name="password_confirmation" type="password" placeholder="Confirm Password *">
                                    </div>
                                    @if($errors->has('password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                 @endif
                                    <div class="comment-submit-btn text-center">
                                        <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                    </div>
                                 Already has an account?   <a href="{{ url('signin') }}">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--============ Contact Us Area End =================-->
    </div>
    <!--====================  footer area ====================-->

    <!--====================  End of footer area  ====================-->
</div>
@endsection
