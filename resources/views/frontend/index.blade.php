@extends('frontend.master')
@section('style')
@endsection
@section('content')
<!-- banner-section -->
<section class="banner-section">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    </div>
    <div class="anim-icon">
        <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-1.png);"></div>
        <div class="icon icon-2 rotate-me" style="background-image: url(assets/images/shape/anim-icon-2.png);"></div>
        <div class="icon icon-3 rotate-me" style="background-image: url(assets/images/shape/anim-icon-3.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <!-- <h3>Transform Information into</h3> -->
                    <h2>MONITIZE YOUR APP WITH ADZBLOOM</h2>
                    <p>Grow with premium demand from our top advertisers​​.<br>Performance marketing refers to a form of digital marketing in which brands only pay marketing service providers after their business objectives have been met or when specific actions have been taken, such as a click, sale, or lead.</p>
                    <div class="btn-box">
                        <a href="index-2.html" class="theme-btn btn-two">Get Started<i
                                class="fas fa-arrow-right"></i></a>
                        <a href="index-2.html" class="theme-btn btn-three">Learn More<span class="symble">+</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1"><img src="assets/images/m2.webp" alt=""></figure>
                    <!-- <figure class="image image-2 float-bob-y"><img src="assets/images/banner/banner-2.png"
                            alt=""></figure> -->
                    <figure class="image image-3 wow zoomIn animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <img src="assets/images/m3.webp" alt=""></figure>
                    <figure class="image image-4 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img
                            src="assets/images/m6.png" alt=""></figure>
                    <figure class="image image-5 wow bounceInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <img src="assets/images/m7.png" alt=""></figure>
                    <figure class="image image-6 wow bounceInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <img src="assets/images/banner/banner-6.png" alt=""></figure>
                    <figure class="image image-7 float-bob-y"><img src="assets/images/banner/banner-7.png"
                            alt=""></figure>
                    <figure class="image image-8"><img src="assets/images/banner/banner-8.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
<!-- service-section -->
<section class="service-section">
    <div class="auto-container">
        <div class="sec-title">
            <h5>MORE THAN SOLUTIONS</h5>
            <h2>Grow your Bussiness With Us.</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                        <img src="{{asset('assets/images/performance.png')}}" alt="">
                            <div class="hover-shape"></div>
                        </div>
                        <h3><a href="advertising-marketing.html">Performance Marketing</a></h3>
                        <p>Performance-based advertising, also known as pay for performance advertising, is a form of advertising in which the purchaser pays only when there are measurable results</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <!-- <i class="flaticon-virtual-reality"></i> -->
                            <img src="{{asset('assets/images/mobile.png')}}" alt="">

                            <div class="hover-shape"></div>
                        </div>
                        <h3><a href="advertising-marketing.html">Mobile Advertising</a></h3>
                        <p>Mobile advertising is a form of advertising via mobile phones or other mobile devices. It is a subset of mobile marketing, mobile advertising can take place as text ads via SMS, or banner advertisements that appear embedded in a mobile web site.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-artificial-intelligence"></i>
                            <img src="{{asset('assets/images/seo.png')}}" alt="">
                            <div class="hover-shape"></div>
                        </div>
                        <h3><a href="advertising-marketing.html">Seo</a></h3>
                        <p>Search engine optimization is the process of improving the quality and quantity of website traffic to a website or a web page from search engines. SEO targets unpaid traffic rather than direct traffic or paid traffic.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                        <img src="{{asset('assets/images/monotize.png')}}" alt="">

                            <div class="hover-shape"></div>
                        </div>
                        <h3><a href="advertising-marketing.html">Monetizing</a></h3>
                        <p>Monetization is, broadly speaking, the process of converting something into money. The term has a broad range of uses. In banking, the term refers to the process of converting or establishing something into legal tender.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- about-section -->
<!-- <section class="about-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>ABOUT COMPANY</h5>
            <h2>Mission is to carry the force of computer <br />based intelligence to each business</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="assets/images/resource/about-1.png" alt="">
                        </figure>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption=""><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box ml-70">
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1"><i
                                            class="fas fa-check-circle"></i><span>Our Mission</span></li>
                                    <li class="tab-btn" data-tab="#tab-2"><i
                                            class="fas fa-check-circle"></i><span>Our Vison</span></li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="inner">
                                        <p>As a solution providing company we offer a wide range of consulting,
                                            development & quality services with 100% satisfaction.</p>
                                        <ul class="list-style-one clearfix">
                                            <li> Acquire mobile users by creating effective mobile advertising campaigns, measure the success of your campaign.</li>
                                            <li>Re-engage the acquired users and increase the ARPU.</li>
                                            <li> Reach out to relevant audience with programmatic solutions.</li>
                                            <li>Stand out among your competitors with our search & App store optimization solution.</li>
                                            <li>Make your brand reach target users across devices.</li>
                                            <li>Raise your brand awareness with our tailor made video soutions.</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="inner">
                                        <p>As a solution providing company we offer a wide range of consulting,
                                            development & quality services with 100% satisfaction.</p>
                                        <ul class="list-style-one clearfix">
                                            <li> Acquire mobile users by creating effective mobile advertising campaigns, measure the success of your campaign.</li>
                                            <li>Re-engage the acquired users and increase the ARPU.</li>
                                            <li> Reach out to relevant audience with programmatic solutions.</li>
                                            <li>Stand out among your competitors with our search & App store optimization solution.</li>
                                            <li>Make your brand reach target users across devices.</li>
                                            <li>Raise your brand awareness with our tailor made video soutions.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about-section end -->


<!-- works-section -->
<section class="works-section">
    <div class="anim-icon">
        <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-2.png);"></div>
        <div class="icon icon-2 rotate-me" style="background-image: url(assets/images/shape/anim-icon-3.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>HOW IT WORKS</h5>
            <h2>Boost Your App <br />& website with Adzbloom</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                <div class="working-block-one wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="arrow" style="background-image: url(assets/images/shape/arrow-1.png);"></div>
                        <div class="icon-box">
                            <i class="flaticon-cloud-network"></i>
                            <span>01</span>
                            <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="overlay-shape"
                                style="background-image: url(assets/images/shape/shape-5.png);"></div>
                        </div>
                        <h3>Casing the Issue</h3>
                        <p>To take a trivial example, which idea of ever undertakes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                <div class="working-block-one wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="arrow" style="background-image: url(assets/images/shape/arrow-2.png);"></div>
                        <div class="icon-box">
                            <i class="flaticon-computer"></i>
                            <span>02</span>
                            <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="overlay-shape"
                                style="background-image: url(assets/images/shape/shape-5.png);"></div>
                        </div>
                        <h3>Gather the Information</h3>
                        <p>Best every pleasure is too welcomed every pain avoided.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 working-block">
                <div class="working-block-one wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="flaticon-circuit"></i>
                            <span>03</span>
                            <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="overlay-shape"
                                style="background-image: url(assets/images/shape/shape-5.png);"></div>
                        </div>
                        <h3>Cycle the Information</h3>
                        <p>Have to be repudiated annoyances accepted the wise.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- works-section end -->


<!-- solutions-section -->
<!-- <section class="solutions-section centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title light">
            <h5>Advertising & Marketing</h5>
            <h2>Success Your Business <br /> with amazing solution</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-2.png);"></div>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="trasportation-logistics.html">Transportation and Coordinations</a></h3>
                    <div class="link"><a href="trasportation-logistics.html"><img
                                src="assets/images/icons/icon-1.png" alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-product"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="media-entertainment.html">Amusement and Media</a></h3>
                    <div class="link"><a href="media-entertainment.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="healthcare-medicine.html">Medical Care and Medication</a></h3>
                    <div class="link"><a href="healthcare-medicine.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-medicines"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="travel-hospitality.html">Accommodation and Travel</a></h3>
                    <div class="link"><a href="travel-hospitality.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-travel"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="trasportation-logistics.html">Transportation and Coordinations</a></h3>
                    <div class="link"><a href="trasportation-logistics.html"><img
                                src="assets/images/icons/icon-1.png" alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-product"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="media-entertainment.html">Amusement and Media</a></h3>
                    <div class="link"><a href="media-entertainment.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="healthcare-medicine.html">Medical Care and Medication</a></h3>
                    <div class="link"><a href="healthcare-medicine.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-medicines"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="travel-hospitality.html">Accommodation and Travel</a></h3>
                    <div class="link"><a href="travel-hospitality.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-travel"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="trasportation-logistics.html">Transportation and Coordinations</a></h3>
                    <div class="link"><a href="trasportation-logistics.html"><img
                                src="assets/images/icons/icon-1.png" alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-product"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="media-entertainment.html">Amusement and Media</a></h3>
                    <div class="link"><a href="media-entertainment.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="healthcare-medicine.html">Medical Care and Medication</a></h3>
                    <div class="link"><a href="healthcare-medicine.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-medicines"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="travel-hospitality.html">Accommodation and Travel</a></h3>
                    <div class="link"><a href="travel-hospitality.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-travel"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="trasportation-logistics.html">Transportation and Coordinations</a></h3>
                    <div class="link"><a href="trasportation-logistics.html"><img
                                src="assets/images/icons/icon-1.png" alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-product"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="media-entertainment.html">Amusement and Media</a></h3>
                    <div class="link"><a href="media-entertainment.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="healthcare-medicine.html">Medical Care and Medication</a></h3>
                    <div class="link"><a href="healthcare-medicine.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-medicines"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="travel-hospitality.html">Accommodation and Travel</a></h3>
                    <div class="link"><a href="travel-hospitality.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-travel"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="trasportation-logistics.html">Transportation and Coordinations</a></h3>
                    <div class="link"><a href="trasportation-logistics.html"><img
                                src="assets/images/icons/icon-1.png" alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-product"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="media-entertainment.html">Amusement and Media</a></h3>
                    <div class="link"><a href="media-entertainment.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-gamepad"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="healthcare-medicine.html">Medical Care and Medication</a></h3>
                    <div class="link"><a href="healthcare-medicine.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-medicines"></i></div>
                </div>
            </div>
            <div class="solutions-block-one">
                <div class="inner-box">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                    <div class="overlay-shape" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                    <p>OUR Business</p>
                    <h3><a href="travel-hospitality.html">Accommodation and Travel</a></h3>
                    <div class="link"><a href="travel-hospitality.html"><img src="assets/images/icons/icon-1.png"
                                alt=""></a></div>
                    <div class="icon-box"><i class="flaticon-travel"></i></div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- solutions-section end -->


<!-- project-section -->
<!-- <section class="project-section">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-8.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-9.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>CASE STUDIES</h5>
            <h2>Ventures we are changing <br />our magnificent arrangements</h2>
            <div class="divider" style="background-image: url(assets/images/mobile_ads.jpg);"></div>
            <a href="project.html" class="theme-btn btn-four">All Case Read Now</a>
        </div>
    </div>
    <div class="outer-container centred">
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Counseling on receipt information catch</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Computerize criticism examination</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">BI execution for infant care Application</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-4.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Huge information preparing usage</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
            <div class="project-block-one">
                <div class="inner-box">
                    <div class="content-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="assets/images/gallery/project-5.png" alt="">
                        </figure>
                        <h3><a href="project-details.html">Financial Staticase User informat</a></h3>
                        <div class="link"><a href="project-details.html">Case Read</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- project-section end -->


<!-- skills-section -->
<section class="skills-section">
    <div class="anim-icon">
        <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-2.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>SKILLS & FACTS</h5>
            <h2>We keep our self refreshed with <br />most recent patterns</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="skills-inner">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image js-tilt"><img src="{{ asset('assets/images/m8.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="text">
                                <p>As a solution providing company we offer a range consulting, development quality
                                    testing services with 100% satisfaction.</p>
                            </div>
                            <div class="progress-inner">
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-comments"></i></div>
                                    <h4>Performance Marketing</h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="85%"></div>
                                        </div>
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-cloud-download-alt"></i></div>
                                    <h4>Mobile Advertising </h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%"></div>
                                        </div>
                                        <div class="count-text">65%</div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <div class="icon-box"><i class="fas fa-search"></i></div>
                                    <h4>Seo & Web Development</h4>
                                    <div class="bar-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="75%"></div>
                                        </div>
                                        <div class="count-text">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="funfact-inner">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-computer-science"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2500">0</span><span>+</span>
                            </div>
                            <h4>Completed Projects</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-nanotech"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="1752">0</span>
                            </div>
                            <h4>Business Covered</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-scientist"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="375">0</span>
                            </div>
                            <h4>Satisfied Customer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- skills-section end -->


<!-- clients-section -->
<!-- <section class="clients-section centred">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.jpg);"></div>
    <div class="anim-icon">
        <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-4.png);"></div>
        <div class="icon icon-2 rotate-me" style="background-image: url(assets/images/shape/anim-icon-5.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title light">
            <h2>Trusted by creative organizations</h2>
            <p>Continuously holds in these issues to this rule of determination: he dismisses delights to make sure
                about other <br />more noteworthy joys, or probably he suffers torments to maintain a strategic distance
                from</p>
        </div>
        <div class="clients-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
            </div>
            <div class="clients-logo-box">
                <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
            </div>
        </div>
    </div>
</section> -->
<!-- clients-section end -->


<!-- testimonial-section -->
<!-- <section class="testimonial-section">
    <div class="anim-icon">
        <div class="icon icon-1 rotate-me" style="background-image: url(assets/images/shape/anim-icon-3.png);">
        </div>
    </div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 offset-lg-4 title-column">
                <div class="sec-title">
                    <h5>TESTIMONIALS</h5>
                    <h2>What clients say about our amazing work</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
            </div>
        </div>
        <div class="bxslider">
            <div class="slider-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 thumb-column">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-1.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-2.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="author-info">
                                    <div class="quote"
                                        style="background-image: url(assets/images/icons/quote-bg.png);">"</div>
                                    <h3>Nicolas Lawson</h3>
                                    <span class="designation">STO Expert of Bussiness</span>
                                    <ul class="rating-box clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-four">Check More
                                        Review +</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 thumb-column">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-2.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-1.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="author-info">
                                    <div class="quote"
                                        style="background-image: url(assets/images/icons/quote-bg.png);">"</div>
                                    <h3>Ema Haris</h3>
                                    <span class="designation">STO Expert of Bussiness</span>
                                    <ul class="rating-box clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-four">Check More
                                        Review +</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 thumb-column">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-1.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-2.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="author-info">
                                    <div class="quote"
                                        style="background-image: url(assets/images/icons/quote-bg.png);">"</div>
                                    <h3>John Noshal</h3>
                                    <span class="designation">STO Expert of Bussiness</span>
                                    <ul class="rating-box clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-four">Check More
                                        Review +</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 thumb-column">
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <figure class="thumb thumb-2"><img
                                                src="assets/images/resource/testimonial-2.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <figure class="thumb thumb-1"><img
                                                src="assets/images/resource/testimonial-1.png" alt="">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="author-info">
                                    <div class="quote"
                                        style="background-image: url(assets/images/icons/quote-bg.png);">"</div>
                                    <h3>Nicolas Lawson</h3>
                                    <span class="designation">STO Expert of Bussiness</span>
                                    <ul class="rating-box clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.enim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                                <div class="btn-box"><a href="index-2.html" class="theme-btn btn-four">Check More
                                        Review +</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- testimonial-section end -->


<!-- news-section -->
<!-- <section class="news-section bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>NEWS & UPDATES</h5>
            <h2>Latest thinking in data science and <br />our company news</h2>
            <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('assets/images/mobile-ad.jpg') }}" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            <span class="post-date">Fab 28</span>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">Named as a Worldwide Innovator For Information</a></h3>
                            <p>Solution providing company we offer range consulting, development quality testing
                                services..</p>
                            <div class="link"><a href="blog-details.html">Read More +</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('assets/images/p1.jpg') }}" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            <span class="post-date">Fab 27</span>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">Present status of Man-made reasoning Infographic.</a></h3>
                            <p>Solution providing company we offer range consulting, development quality testing
                                services..</p>
                            <div class="link"><a href="blog-details.html">Read More +</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/news/news-3.jpg" alt="">
                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            <span class="post-date">Fab 26</span>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">Bteach as the Champs in the Worldwide Office Award</a>
                            </h3>
                            <p>Solution providing company we offer range consulting, development quality testing
                                services..</p>
                            <div class="link"><a href="blog-details.html">Read More +</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- news-section end -->
@endsection

@section('script')

@endsection
