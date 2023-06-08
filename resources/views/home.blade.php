@extends('master')

@section('content')

    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder">
            <!-- home-slider  -->
            <div class="fs-gallery-wrap home-slider fl-wrap full-height" data-autoplayslider="5000">
                <div class="slide-progress-container">
                    <div class="slide-progress-content">
                        <div class="slide-progress-warp">
                            <div class="slide-progress"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container" data-scrollax-parent="true" >
                    <div class="swiper-wrapper"  >

                        @foreach($sliders as $slider)
                        <!-- swiper-slide-->
                        <div class="swiper-slide">
                            <div class="bg"  data-bg="{{ Storage::url($slider->_get('image')) }}" data-scrollax="properties: { translateY: '250px' }" ></div>
                            <div class="overlay"></div>
                            <!-- hero-wrap-->
                            <div class="hero-wrap alt">
                                <div class="container">
                                    <div class="hero-item">
                                        <h3>{{ __('Arıcan İnşaat') }}</h3>
                                        <h2>{{ $slider->_get('title') }}</h2>
                                        <h2 style="font-size: 42px; top: -16px; position:relative;">{{ $slider->_get('description') }}</h2>
                                        <div class="clearfix"></div>
                                        @if($slider->_get('button_text'))
                                            <a href="{{ $slider->_get('button_link') }}" class="btn float-btn flat-btn">{{ $slider->_get('button_text') }}</a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- hero-wrap end-->
                        </div>
                        <!-- swiper-slide end-->
                        @endforeach
                    </div>
                    <div class="sw-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
                    <div class="sw-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- home-slider end-->
            <!--content-->
            <div class="content">
                <!--section -->
                <section id="sec2" data-scrollax-parent="true" >
                    <div class="container">
                        <div class="section-container fl-wrap">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="content-wrap about-wrap">
                                        <h3 class="bold-title">{{ $homeField->_get('about_title') }}</h3>
                                        {!! $homeField->_get('about_content') !!}

                                        <h3 class="bold-title">What we do</h3>
                                        <div class="pr-tags fl-wrap">
                                            <span>Services : </span>
                                            <ul>
                                                <li><a href="#">Architecture</a></li>
                                                <li><a href="#">Design</a></li>
                                                <li><a href="#">Photography</a></li>
                                            </ul>
                                        </div>
                                        <span class="bold-separator"></span>
                                        <div class="clearfix"></div>
                                        <a href="portfolio.html" class="btn float-btn flat-btn">Our portfolio</a>
                                    </div>
                                </div>
                                <div class="col-md-5" data-aos="zoom-out-left">
                                    <div class="box-item">
                                        <img src="{{ Storage::url($homeField->_get('about_bg')) }}"  class="respimg" alt="">
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg dec-bg left-pos-dec"  data-bg="/images/bg/14.jpg"></div>
                </section>
                <!--section end  -->
                <!--section -->
                <section  >
                    <div class="bg"  data-bg="/images/bg/4.jpg"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="intro-text fl-wrap">
                            <h2>Entrust your project <br>to our team of  <br>professionals</h2>
                            <a href="services.html" class="btn float-btn flat-btn">Our Services</a>
                            <a href="contact.html" class="btn float-btn flat-btn">Get in Touch</a>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <!--section -->
                <section >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pr-title">
                                    Our Featured Work
                                    <span>Lorem Ipsum generators on the Internet tend to repeat king this the first true generator . </span>
                                </div>
                            </div>
                        </div>
                        <!--parallax-item -->
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                                    <div class="parallax-header fl-wrap">
                                        <span>01.</span>
                                        <ul>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Architecture </a></li>
                                        </ul>
                                    </div>
                                    <img  src="/images/folio/2.jpg"   alt="">
                                    <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="portfolio-single.html">Theatre de Stoep</a></h3>
                                        <h4>There are many variations of passages of Lorem Ipsum</h4>
                                        <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--parallax-item end-->
                        <!--parallax-item -->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                                    <div class="parallax-header fl-wrap">
                                        <span>02.</span>
                                        <ul>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Architecture </a></li>
                                        </ul>
                                    </div>
                                    <img  src="/images/folio/11.jpg"   alt="">
                                    <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                                        <h4>There are many variations of passages of Lorem Ipsum</h4>
                                        <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--parallax-item end-->
                        <!--parallax-item -->
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                                    <div class="parallax-header fl-wrap">
                                        <span>03.</span>
                                        <ul>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Architecture </a></li>
                                        </ul>
                                    </div>
                                    <img  src="/images/folio/16.jpg"   alt="">
                                    <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="portfolio-single.html">Theatre de Stoep</a></h3>
                                        <h4>There are many variations of passages of Lorem Ipsum</h4>
                                        <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--parallax-item end-->
                        <!--parallax-item -->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                                    <div class="parallax-header fl-wrap">
                                        <span>04.</span>
                                        <ul>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Architecture </a></li>
                                        </ul>
                                    </div>
                                    <img  src="/images/folio/19.jpg"   alt="">
                                    <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="portfolio-single.html">New Acropolis Museum</a></h3>
                                        <h4>There are many variations of passages of Lorem Ipsum</h4>
                                        <a href="portfolio-single.html" class="btn float-btn flat-btn">View project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--parallax-item end-->
                    </div>
                    <div class="partcile-dec" data-parcount="250"></div>
                </section>
                <!--section end  -->
                <!--section -->
                <section class="parallax-section header-section  " data-scrollax-parent="true" id="sec6">
                    <div class="bg"  data-bg="/images/bg/1.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pr-title">
                                    Testimonials
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="single-slider testilider fl-wrap" data-effects="slide">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <h3>Andy Smith</h3>
                                                    <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                                    <a href="#" class="btn float-btn flat-btn" target="_blank">Via Twitter</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <h3>Liza Mirovsky</h3>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. Integer iaculis tellus nulla, quis imperdiet magna venenatis vitae"</p>
                                                    <a href="#" class="btn float-btn flat-btn" target="_blank">Via Facebook</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testi-item fl-wrap">
                                                    <h3>Gary Trust</h3>
                                                    <p>"If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."</p>
                                                    <a href="#" class="btn float-btn flat-btn" target="_blank">Via Myspace</a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                        </div>
                                        <div class="swiper-pagination"></div>
                                        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <!--section -->
                <section>
                    <div class="container">
                        <div class="clients-list fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"> <img src="/images/clients/1.jpg" alt=""> </a></li>
                                <li><a href="#" target="_blank"> <img src="/images/clients/2.jpg" alt=""> </a></li>
                                <li><a href="#" target="_blank"> <img src="/images/clients/3.jpg" alt=""> </a></li>
                                <li><a href="#" target="_blank"> <img src="/images/clients/4.jpg" alt=""> </a></li>
                                <li><a href="#" target="_blank"> <img src="/images/clients/5.jpg" alt=""> </a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--section end  -->
                <!--social-wrap -->
                <div class="social-wrap fl-wrap">
                    <ul>
                        <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <!--social-wrap end-->
            </div>
            <!-- content  end -->
            <!--=============== content-footer   ===============-->
            <div class="height-emulator"></div>
            <footer class="content-footer">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="footer-logo" href="index.html"><img src="/images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-header fl-wrap"><span>01.</span> Contacts</div>
                            <div class="footer-box fl-wrap">
                                <ul>
                                    <li><span>Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                    <li> <span>Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                    <li><span>Phone :</span><a href="#">+7(111)123456789</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="footer-header fl-wrap"><span>02.</span> Subscribe</div>
                            <div class="footer-box fl-wrap">
                                <div class="subcribe-form fl-wrap">
                                    <span>Newsletter</span>
                                    <form id="subscribe">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button">Submit</button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="fl-wrap policy-box">
                                <p> &#169; Balkon   2017.  All rights reserved.  </p>
                            </div>
                        </div>
                    </div>
                    <div class="to-top"><i class="fa fa-long-arrow-up"></i></div>
                </div>
            </footer>
            <!-- content-footer end    -->
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->

    <!-- Share container  -->
    <div class="share-wrapper isShare">
        <div class="share-container"></div>
    </div>
    <!-- Share container  end-->

@endsection
