@extends('templates.main2')

@section('content')
    <header class="main-header-two">
        <x-frontpage-navbar2/>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-two clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer-two"
                         style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__shape-1 zoom-fade-2">
                                        <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                    </div>
                                    <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                    <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-two"
                         style="background-image: url(assets/images/backgrounds/main-slider-2-2.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__shape-1 zoom-fade-2">
                                        <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                    </div>
                                    <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                    <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer-two"
                         style="background-image: url(assets/images/backgrounds/main-slider-2-3.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__shape-1 zoom-fade-2">
                                        <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                                    </div>
                                    <h4 class="main-slider-two__sub-title">Only Organic Products</h4>
                                    <h2 class="main-slider-two__title">Stay Healthy <span>&</span> <br> Eat Organic
                                    </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Categories Two Start-->
    <section class="categories-two">
        <div class="categories-two__bg-box">
            <div class="categories-two__bg-img-1"
                 style="background-image: url(assets/images/backgrounds/categories-two-bg-img-1.jpg);"></div>
            <div class="categories-two__ripped-paper"
                 style="background-image: url(assets/images/shapes/categories-two-ripped-paper.png);"></div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout Our Category</span>
                <h2 class="section-title__title">Category</h2>
            </div>
            <div class="row justify-content-center">
                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #9c72cc;">
                        <div class="categories-two__icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="agriculture-services.html">Order</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->
            
                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #6cbc94;">
                        <div class="categories-two__icon categories-two__icon-2">
                            <span class="icon-001-home"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="farming-products.html">Schedule</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->
            
                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #50a72c;">
                        <div class="categories-two__icon categories-two__icon-3">
                            <span class="icon-fruits"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="organic-services.html">Tracking</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->
            
                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #d7a955;">
                        <div class="categories-two__icon categories-two__icon-4">
                            <span class="icon-walnut"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="delivery-services.html">Support</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->
            
                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #5580d7;">
                        <div class="categories-two__icon categories-two__icon-5">
                            <span class="icon-iced-coffee"></span>
                        </div>
                        <h3 class="categories-two__title font-bold"><a href="agriculture-services.html">ECO+</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->
            </div>
            
        </div>
    </section>
    <!--Categories Two End-->

    <!--News One Start-->
    <section class="news-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Blog News</span>
                <h2 class="section-title__title">Latest News Updates
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="img\astronaut2.png" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="img\astronaut2.png" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img-box">
                            <div class="news-one__img">
                                <img src="img\astronaut2.png" alt="">
                            </div>
                        </div>
                        <div class="news-one__content-box">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <a href="news-details.html"><i class="fa fa-tag"></i>Apartment</a>
                                </li>
                                <li>
                                    <a href="news-details.html"><i class="fas fa-user-circle"></i>by Admin</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Lorem ipsum dolor sit amet.</a></h3>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="news-details.html">Read More</a>
                                </div>
                                <div class="news-one__comment">
                                    <a href="news-details.html"><i class="fas fa-comments"></i>02</a>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>20 Sep</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--Site Footer Start-->
    <x-frontpage-footer2/>
    <!--Site Footer End-->


@endsection

@section('script')
    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
