</head>
<!-- page wrapper -->
<body>

    <div class="boxed_wrapper home-1">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="z" class="letters-loading">
                                z
                            </span>
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="index-2.html"><img src="{{asset('assets/images/adz.png')}}" alt=""></a></figure>
                        </div>
                        <div class="right-column pull-right">
                            <div class="phone-box">
                                <p><i class="fas fa-phone"></i>Start your project <a href="tel:8454937395">8454937395</a></p>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                            <div class="search-box">
                                <form action="https://azim.commonsupport.com/Bithlo/index.html" method="post" class="search-form">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search......" required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-right clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{route('home')}}">Home</a>
                                            <!-- <ul> -->
                                                <!-- <li><a href="index-2.html">Data Science</a></li>
                                                <li><a href="index-3.html">Artificial intelligence</a></li>
                                                <li><a href="index-4.html">Artificial intelligence 02</a></li>
                                                <li><a href="index-5.html">User Analysis</a></li>
                                                <li><a href="index-6.html">Business Intelligence</a></li>
                                                <li><a href="index-7.html">Machine Learning</a></li>
                                                <li><a href="index-8.html">Face Affirmation</a></li>
                                                <li><a href="index-9.html">BI Execution</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                                <li><a href="index-rtl.html">RTL Home</a></li> -->
                                            <!-- </ul> -->
                                        </li>
                                        <li class="dropdown"><a href="index-2.html">Company</a>
                                            <ul>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                                <!-- <li><a href="error.html">404</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index-2.html">Services</a>
                                            <ul>
                                                <li><a href="{{route('service')}}">Our Services</a></li>
                                                <!-- <li><a href="advertising-marketing.html">Advertising & Marketing</a></li> -->
                                                <li><a href="{{ route('performance') }}">Performance Makrting </a></li>
                                                <li><a href="{{route('mobile')}}">Mobile Advertising</a></li>
                                                <!-- <li><a href="travel-hospitality.html">Genrate Traffic</a></li> -->
                                                <li><a href="{{ route('monotize') }}">Boosting & Monetizing</a></li>
                                                <!-- <li><a href="trasportation-logistics.html">Trasportation & Logistics</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index-2.html">Works</a>
                                            <ul>
                                                <li><a href="{{ route('project') }}">Our Projects</a></li>
                                                <!-- <li><a href="project-2.html">Project 3 Columns</a></li>
                                                <li><a href="project-details.html">Project Details</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="{{route('blog')}}">Blogs</a>
                                            <!-- <ul>
                                                <li><a href="{{route('blog')}}">Blog</a></li> -->
                                                <!-- <li><a href="blog-2.html">Blog Classic</a></li> -->
                                                <!-- <li><a href="blog-details.html">Blog Details</a></li> -->
                                            <!-- </ul> -->
                                        </li>
                                        <!-- <li class="dropdown"><a href="index-2.html">Elements</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-xl-3 column">
                                                        <ul>
                                                            <li><h4>Elements 1</h4></li>
                                                            <li><a href="about-element-1.html">About Block 01</a></li>
                                                            <li><a href="about-element-2.html">About Block 02</a></li>
                                                            <li><a href="about-element-3.html">About Block 03</a></li>
                                                            <li><a href="about-element-4.html">About Block 04</a></li>
                                                            <li><a href="about-element-5.html">About Block 05</a></li>
                                                            <li><a href="about-element-6.html">About Block 06</a></li>
                                                            <li><a href="about-element-7.html">About Block 07</a></li>
                                                            <li><a href="about-element-8.html">About Block 08</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-3 column">
                                                        <ul>
                                                            <li><h4>Elements 2</h4></li>
                                                            <li><a href="service-element-1.html">Service Block 01</a></li>
                                                            <li><a href="service-element-2.html">Service Block 02</a></li>
                                                            <li><a href="service-element-3.html">Service Block 03</a></li>
                                                            <li><a href="service-element-4.html">Service Block 04</a></li>
                                                            <li><a href="service-element-5.html">Service Block 05</a></li>
                                                            <li><a href="service-element-6.html">Service Block 06</a></li>
                                                            <li><a href="service-element-7.html">Service Block 07</a></li>
                                                            <li><a href="service-element-8.html">Service Block 08</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-3 column">
                                                        <ul>
                                                            <li><h4>Elements 3</h4></li>
                                                            <li><a href="team-element-1.html">Team Block 01</a></li>
                                                            <li><a href="team-element-2.html">Team Block 02</a></li>
                                                            <li><a href="team-element-3.html">Team Block 03</a></li>
                                                            <li><a href="team-element-4.html">Team Block 04</a></li>
                                                            <li><a href="news-element-1.html">News Block 01</a></li>
                                                            <li><a href="news-element-2.html">News Block 02</a></li>
                                                            <li><a href="news-element-3.html">News Block 03</a></li>
                                                            <li><a href="news-element-4.html">News Block 04</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-3 column">
                                                        <ul>
                                                            <li><h4>Elements 4</h4></li>
                                                            <li><a href="working-element-1.html">Working Block 01</a></li>
                                                            <li><a href="working-element-2.html">Working Block 02</a></li>
                                                            <li><a href="chooseus-element-1.html">Chooseus Block 01</a></li>
                                                            <li><a href="chooseus-element-2.html">Chooseus Block 02</a></li>
                                                            <li><a href="chooseus-element-3.html">Chooseus Block 03</a></li>
                                                            <li><a href="chooseus-element-4.html">Chooseus Block 04</a></li>
                                                            <li><a href="skills-element-1.html">Skills Block 01</a></li>
                                                            <li><a href="skills-element-2.html">Skills Block 02</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li class="dropdown"><a href="index-2.html">Pages</a>
                                            <ul>
                                                <li><a href="{{route('ourTeam')}}">Our Team</a></li>
                                                <!-- <li><a href="pricing.html">Pricing Plan</a></li> -->
                                                <li><a href="{{route('faq')}}">Faq's</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-one">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <figure class="sticky-logo pull-left">
                            <a href="index-2.html"><img src="assets/images/adzw.png" style="height:60px !important" alt=""></a>
                        </figure>
                        <div class="menu-area pull-right clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-4.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
