@extends('client.layouts.main')
@push('title')
{{-- //Dynamic Title --}}
    <title></title>
@endpush
@section('main-section')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Blog Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main-wrapper">
    <div class="site-wrapper-reveal">








        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 order-lg-1 order-2">
                        <div class="page-sidebar-content-wrapper page-sidebar-left  small-mt__40 tablet-mt__40">

                            <!--=== Sidebar Widget Start ===-->
                            <div class="sidebar-widget search-post wow move-up">
                                <div class="widget-title">
                                    <h4 class="sidebar-widget-title">Search</h4>
                                </div>
                                <form action="#" method="post">
                                    <div class="widget-search">
                                        <input type="text" placeholder="Enter search keyword…">

                                        <button type="submit" class="search-submit">
                                            <span class="search-btn-icon fa fa-search"></span>
                                        </button>

                                    </div>
                                </form>
                            </div>
                            <!--=== Sidebar Widget End ===-->


                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                <h4 class="sidebar-widget-title">Recent Posts</h4>

                                <ul>
                                    <li>
                                        <a href="#">Ideas for High Returns on Investment</a>
                                    </li>
                                    <li>
                                        <a href="#">How Technology Made Businesses More Efficient</a>
                                    </li>
                                    <li>
                                        <a href="#">Data Secure on Transitioning to a New Office</a>
                                    </li>
                                    <li>
                                        <a href="#">The Keys to Persuading Customers Nowadays</a>
                                    </li>
                                    <li>
                                        <a href="#">Blockchain Technology Effects on Logistics Sector?</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- === Sidebar Widget End === -->

                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-images wow move-up">

                                <img class="img-fluid" src="{{url('client')}}//images/blog/blog-sidebar-ads.webp" alt="">

                            </div>
                            <!-- === Sidebar Widget End === -->

                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-tag wow move-up">
                                <h4 class="sidebar-widget-title">Tags</h4>
                                <a href="#" class="ht-btn ht-btn-xs">business</a>
                                <a href="#" class="ht-btn ht-btn-xs">featured</a>
                                <a href="#" class="ht-btn ht-btn-xs">IT Security</a>
                                <a href="#" class="ht-btn ht-btn-xs">IT services</a>

                            </div>
                            <!-- === Sidebar Widget End === -->


                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-2 order-1">
                        <div class="main-blog-wrap">
                            <!--======= Single Blog Item Start ========-->
                            <div class="single-blog-item">
                                <!-- Post Feature Start -->
                                <div class="post-feature blog-thumbnail wow move-up">
                                    <img class="img-fluid" src="{{url('client')}}//images/blog/blog-02-770x400.webp" alt="Blog Images">
                                </div>
                                <!-- Post Feature End -->

                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info  wow move-up">
                                    <div class="post-categories">
                                        <a href="#"> Success Story, Tips</a>
                                    </div>

                                    <h3 class="post-title">How Wireless Technology is Changing Business</h3>

                                    <div class="post-meta mt-20">
                                        <div class="post-author">
                                            <a href="#">
                                                <img class="img-fluid avatar-96" src="{{url('client')}}//images/team/admin.webp" alt=""> Harry Ferguson
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            January 14, 2019
                                        </div>
                                        <div class="post-view">
                                            <span class="meta-icon far fa-eye"></span>
                                            346 views
                                        </div>
                                        <div class="post-comments">
                                            <span class="far fa-comment-alt meta-icon"></span>
                                            <a href="#" class="smooth-scroll-link">4 Comments</a>
                                        </div>
                                    </div>

                                    <div class="post-excerpt mt-15">
                                        <p>It’s been said a million times before, if not more, but technology has revolutionised our lives in ways we never expected. From the home to the office, there’s no corner of our day-to-day lives that hasn’t been affected by the technological boom.</p>

                                        <blockquote>
                                            <p class="p1">Wireless technology changes every year too, and it’ll continue to change for as long as we can see. Below, we take a look at a few ways wireless tech has changed businesses so far. </p>
                                        </blockquote>

                                        <p>Offset Dublin has revealed some of its speakers for 2019, which include political illustrator Edel Rodriguez and newly-appointed Pentagram partner Yuri Suzuki.</p>

                                        <p>The three-day annual conference has been running since 2010, and has since branched out with smaller conferences in Sheffield and London.</p>

                                        <p>Offset Dublin is the original branch of the festival brand, and will run from 5-7 April, moving from its previous venue of the Bord Gáis Energy Theatre to The Point Square. There will be two stages with 100 speakers in total.</p>
                                        <p>Source:&nbsp;designweek.co.uk</p>

                                        <div class="entry-post-share-wrap  border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="entry-post-tags">
                                                        <div class="tagcloud-icon">
                                                            <i class="far fa-tags"></i>
                                                        </div>
                                                        <div class="tagcloud">
                                                            <a href="#"> business</a>, <a href="#">IT Security</a>, <a href="#">IT services</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="entry-post-share">
                                                        <div class="share-label">
                                                            Share this post
                                                        </div>
                                                        <div class="share-media">
                                                            <span class="share-icon far fa-share-alt"></span>

                                                            <div class="share-list">
                                                                <a class="hint--bounce hint--top hint--primary twitter" target="_blank" aria-label="Twitter" href="#">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                                <a class="hint--bounce hint--top hint--primary facebook" target="_blank" aria-label="Facebook" href="#">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                                <a class="hint--bounce hint--top hint--primary linkedin" target="_blank" aria-label="Linkedin" href="#">
                                                                    <i class="fab fa-linkedin"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry-author">
                                            <div class="author-info">
                                                <div class="author-avatar">
                                                    <img src="{{url('client')}}//images/team/avatar-06-90x90.webp" alt="">
                                                    <div class="author-social-networks">
                                                        <div class="inner">
                                                            <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="#" target="_blank">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>

                                                            <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="#" target="_blank">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>

                                                            <a class="hint--bounce hint--top hint--primary" aria-label="Instagram" href="#" target="_blank">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="author-description">
                                                    <h6 class="author-name">Owen Christ</h6>

                                                    <div class="author-biographical-info">
                                                        Harry Ferguson is an author, blogger, and designer living in a suburb of Washington, DC. When he’s not designing, blogging, or writing, Ferguson can be found with his head in a book or pinning like a madman.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="related-posts-wrapper">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!-- Single Valid Post Start -->
                                                    <a class="single-valid-post-wrapper" href="#">
                                                        <div class="single-blog__item">
                                                            <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-03-370x120.webp">
                                                            </div>

                                                            <div class="post-content">
                                                                <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                            </div>

                                                        </div>
                                                    </a>
                                                    <!-- Single Valid Post End -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- Single Valid Post Start -->
                                                    <a class="single-valid-post-wrapper" href="#">
                                                        <div class="single-blog__item">
                                                            <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-05-370x120.webp">
                                                            </div>

                                                            <div class="post-content">
                                                                <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                            </div>

                                                        </div>
                                                    </a>
                                                    <!-- Single Valid Post End -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment-list-wrapper">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4 class="widget-title section-space--mb_50">Comments (3) </h4>
                                                </div>
                                                <div class="col-lg-12">

                                                    <ol class="comment-list">
                                                        <li class="comment border-bottom">
                                                            <div class="comment-2">
                                                                <div class="comment-author vcard">
                                                                    <img alt="" src="{{url('client')}}//images/team/coment.webp">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="meta">
                                                                        <h6 class="fn">Edna Watson</h6>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                    </div>

                                                                    <div class="comment-actions">
                                                                        <div class="comment-datetime"> November 16, 2018 at 4:31 am </div><span> | </span>
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><!-- comment End-->
                                                        <li class="comment border-bottom">
                                                            <div class="comment-2">
                                                                <div class="comment-author vcard">
                                                                    <img alt="" src="{{url('client')}}//images/team/comment-2.webp">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="meta">
                                                                        <h6 class="fn">Owen Christ</h6>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                    </div>

                                                                    <div class="comment-actions">
                                                                        <div class="comment-datetime"> November 19, 2018 at 4:31 am </div><span> | </span>
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><!-- comment End-->
                                                        <li class="comment">
                                                            <div class="comment-5">
                                                                <div class="comment-author vcard">
                                                                    <img alt="" src="{{url('client')}}//images/team/comment-3.webp">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="meta">
                                                                        <h6 class="fn">James Scott</h6>
                                                                        <div class="comment-datetime">
                                                                            November 13, 2018 at 4:50 am </div>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                    </div>

                                                                    <div class="comment-actions">
                                                                        <div class="comment-datetime"> February 12, 2018 at 6:31 am </div><span> | </span>
                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ol class="children">
                                                                <li class="comment ">
                                                                    <div class="comment-6">
                                                                        <div class="comment-author vcard">
                                                                            <img alt="" src="{{url('client')}}//images/team/reply-comm.webp">
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <div class="meta">
                                                                                <h6 class="fn">Harry Ferguson</h6>
                                                                                <div class="comment-datetime">
                                                                                    February 13, 2019 at 4:51 am </div>
                                                                            </div>
                                                                            <div class="comment-text">
                                                                                <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                            </div>

                                                                            <div class="comment-actions">
                                                                                <div class="comment-datetime"> November 13, 2018 at 4:31 am </div><span> | </span>
                                                                                <a class="comment-reply-link" href="#">Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li><!-- comment End -->
                                                            </ol><!-- children End -->
                                                        </li><!-- comment End-->
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment-list-wrapper">

                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h4 class="widget-title mb-20">Leave your thought here </h4>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="contact-from-wrapper section-space--mt_30">
                                                        <form action="#" method="post">
                                                            <div class="contact-page-form">
                                                                <div class="contact-input">
                                                                    <div class="contact-inner">
                                                                        <input name="name" type="text" placeholder="Your Comment *">
                                                                    </div>
                                                                    <div class="contact-inner">
                                                                        <input name="email" type="email" placeholder="Your Email *">
                                                                    </div>

                                                                </div>
                                                                <div class="contact-inner contact-message">
                                                                    <textarea name="comment" placeholder="Your Comment"></textarea>
                                                                </div>
                                                                <p class="comment-form-cookies-consent">
                                                                    <input type="checkbox">
                                                                    <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                                                </p>
                                                                <div class="comment-submit-btn">
                                                                    <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Post info End -->
                            </div>
                            <!--===== Single Blog Item End =========-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->








        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->








    </div>

    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper bg-gray">
        <div class="footer-area section-space--ptb_80">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                        <div class="footer-widget__logo mb-30">
                            <img src="{{url('client')}}//images/logo/dark-logo-160x48.webp" width="160" height="48" class="img-fluid" alt="">
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
                            <li><a href="#" class="image_btn"><img class="img-fluid" src="{{url('client')}}//images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                            <li><a href="#" class="image_btn"><img class="img-fluid" src="{{url('client')}}//images/icons/aeroland-button-app-store.webp" alt=""></a></li>
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
