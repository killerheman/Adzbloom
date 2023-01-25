@extends('frontend.master')
@section('style')
@endsection
@section('content')
 <!-- Page Title -->
 <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Contact Now</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-68.png);"></div>
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>SEND MESSAGE</h5>
                    <h2>We’d love to hear from you <br />for your massage</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
                        <div class="form-inner">
                            <form method="post" action="#" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" name="phone" required="" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="subject" required="" placeholder="Subject">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-seven" type="submit" name="submit-form">Send Massage</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->


        <!-- contact-info-two -->
        <section class="contact-info-two">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content_block_21">
                            <div class="content-box">
                                <h2>Contact informateion</h2>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fas fa-headphones"></i></div>
                                    <h3>Make a Call</h3>
                                    <span>LET’S TALK WITH OUR EXPERTS</span>
                                    <p><a href="tel:8454937395">8454937395</a>, Mon - Fri: 09.00 to 18.00</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="far fa-envelope"></i></div>
                                    <h3>Send a Mail</h3>
                                    <span>DONT’S HESITATE TO MAIL</span>
                                    <p><a href="mailto:career@example.com">support@adzbloom.com</a>, <a href="mailto:support@info.com">info@adzbloom.com</a></p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="far fa-paper-plane"></i></div>
                                    <h3>Location</h3>
                                    <span>VISIT TO EXPLORE THE WORLD</span>
                                    <p>Anil & Anant Estate 10, Village Road Bhandup,Mumbai,Maharastra,India-400078</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 map-column">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.9761773125956!2d72.93764631421386!3d19.152520054541405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b86474125c85%3A0x3726bf6bf159ef5f!2sAnil%20and%20Anand%20Estate!5e0!3m2!1sen!2sin!4v1671370570778!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-two end -->
        

@endsection

@section('script')

@endsection