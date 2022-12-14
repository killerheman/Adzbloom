<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Welcome | Adzbloom</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;800&amp;family=Playfair+Display:wght@700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('home/css/icofont.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css')}}" />
</head>

<body class="bg-img body-bg">
    <div class="canvas-area"> <canvas class="constellation"></canvas> </div>
    <div class="preloader-wrap">
        <div class="preloader"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
    <div class="shape-4"><img src="img/shape-4.png" alt="" /></div>
    <div class="bg-img color-white main-container">
        <div id="header" class="style-1">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('home/img/logo2.png')}}" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icofont icofont-navigation-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse secondary-navbar" id="navbarSupportedContent">
                        <ul class="nav nav-pills mx-auto nav-style1">
                            <li class="nav-item"><a class="nav-link nav-menu" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item" role="presentation"> <a class="nav-link nav-menu"
                                    id="pills-res-about-tab" data-toggle="pill" href="#pills-about" role="tab"
                                    aria-controls="pills-about" aria-selected="false">About</a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link nav-menu"
                                    id="pills-res-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Contact</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="nav-style2-main">
            <ul class="style2-nav nav nav-pills">
                <li class="nav-item"><a class="nav-link nav-menu" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-menu" id="pills-about-tab"
                        data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about"
                        aria-selected="false">About</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link nav-menu" id="pills-contact-tab"
                        data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Contact</a></li>
                <li class="menu-design"><span class="top-line"></span><span class="bottom-line"></span></li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div id="main-content-home2" class="xs-no-positioning fixed fixed-middle">
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">
                                        <p class="small-title">Our Website is on it's way.</p><span
                                            class="main-title">We Are Coming Soon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-md-10 col-lg-12 col-xl-12">
                                    <div class="counter-style2"> <input type="hidden" id="count-down-date"
                                            name="count-down-date" value="31 Dec, 2022 12:00:00" />
                                        <h2 class="expired-text hidden">Welcome to Our Website</h2>
                                        <div class="countdown-timer" id="countdown-boxes">
                                            <ul class="list-inline count-down-list text-center">
                                                <li id="years">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="years"></span><span
                                                            class="counter-time-title">Years</span></div>
                                                </li>
                                                <li id="months">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="months"></span><span
                                                            class="counter-time-title">Months</span></div>
                                                </li>
                                                <li id="days">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="days"></span><span
                                                            class="counter-time-title">Days</span></div>
                                                </li>
                                                <li id="hours">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="hours"></span><span
                                                            class="counter-time-title">Hours</span></div>
                                                </li>
                                                <li id="minutes">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="minutes"></span><span
                                                            class="counter-time-title">Minutes</span></div>
                                                </li>
                                                <li id="seconds">
                                                    <div class="first-bg"></div>
                                                    <div class="second-bg"></div>
                                                    <div class="third-bg"></div>
                                                    <div class="content-div"><span class="seconds"></span><span
                                                            class="counter-time-title">Seconds</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="subscribe-form">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 text-center">
                                        <div class="subscribe-form text-center">
                                            <form action="#" class="form-inline mx-auto">
                                                <input type="email" name="email" class="form-control btn-rounded"
                                                    placeholder="youremail@gmail.com" autocomplete="off" />
                                                    <button type="submit" class="btn btn-primary btn-round"> <span
                                                        class="btn-text">Subscribe</span> <span><i
                                                            class="btn-icon icofont icofont-paper-plane"></i></span>
                                                </button> </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-icon-box-style2">
                    <ul class="list-inline social-icons social-icons-style2">
                        <li> <a href="#" target="_blank" class=""><i
                                    class="icofont icofont-social-facebook"></i></a> </li>
                        <li> <a href="#" target="_blank" class=""><i
                                    class="icofont icofont-social-twitter"></i></a> </li>
                        <li> <a href="#" target="_blank" class=""><i
                                    class="icofont icofont-social-google-plus"></i></a> </li>
                        <li class="menu-design"><span class="top-line"></span><span class="bottom-line"></span></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                <div id="main-content-about" class="xs-no-positioning fixed fixed-middle">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="about_img"> <img class="w-100" src="{{ asset('home/img/about-team.png')}}"
                                        alt="" />
                                    <div class="border-shape"></div>
                                    <div class="badge"><img class="w-100" src="{{ asset('home/img/badge.png')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="title text-left"> <span class="about-small-title">About us.</span>
                                    <h1 class="about-main-title">We provide always best services for our customr.</h1>
                                </div>
                                <div class="content-text">
                                    <p class="first-pera">Consectetur adipiscing elit, sed do eusmod tempor incedunt
                                        laboe and nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <p class="second-pera"> Adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliq minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatu. </p>
                                    <p class="third-pera"> Adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliq minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatu. </p>
                                    <div class="contact-btn">
                                        <button type="button" class="btn btn-primary btn-sm" href="#pills-contact">Contact Us
                                            <i class="icofont icofont-swoosh-right"></i></button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div id="main-content-contact" class="xs-no-positioning fixed fixed-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="title">
                                    <p class="contact-small-title">Contact Us!</p><span class="contact-main-title">Get
                                        In Touch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="contact-form-main-div">
                                    <form id="contact-form" action="#" class="clearfix text-center">
                                        <div class="row">
                                            <div class="success">Your message has been sent successfully.</div>
                                            <div class="error">E-mail must be valid and message must be longer than 1
                                                character.</div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-field">
                                                <input type="text" id="name" name="name"
                                                    class="form-control" placeholder="Manie Burkholder" /><i
                                                    class="icofont icofont-user"></i> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-field">
                                                <input type="email" id="email_address" name="email"
                                                    class="form-control" placeholder="support24@gmail.com" /><i
                                                    class="icofont icofont-envelope"></i> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-field">
                                                <input type="text" id="phone" name="phone"
                                                    class="form-control" placeholder="+88 056 958 467" /><i
                                                    class="icofont icofont-phone"></i> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-field">
                                                <input type="text" id="address" name="address"
                                                    class="form-control"
                                                    placeholder="Garfield Street, Huntington, NY 11743" /><i
                                                    class="icofont icofont-location-pin"></i> </div>
                                            <div class="col-md-12 col-lg-12 col-xl-12 form-field">
                                                <textarea id="message" name="message" class="form-control" placeholder="Message Here" rows="7"></textarea>
                                            </div>
                                        </div><button type="submit" name="submit" id="submit"
                                            class="btn btn-primary">Send Message <i
                                                class="icofont icofont-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('home/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('home/js/zepto.min.js')}}"></script>
    <script src="{{ asset('home/js/constellation.min.js')}}"></script>
    <script src="{{ asset('home/js/stars.js')}}"></script>
    <script src="{{ asset('home/js/scripts.js')}}"></script>
</body>

</html>
