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
                         style="background-image: url(img/gedung_sate.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
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
                         style="background-image: url(img/gedung_sate.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
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
                         style="background-image: url(img/gedung_sate.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
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
                    <div class="categories-two__single" style="--accent-color: #b3c42e; background-color: #26973C; ">
                        <div class="categories-two__icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="agriculture-services.html" class="text-white">Order</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->

                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #6cbc94; background-color: #26973C;">
                        <div class="categories-two__icon categories-two__icon-2">
                            <span class="fa fa-calendar-alt"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="farming-products.html" class="text-white">Schedule</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->

                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #50a72c; background-color: #26973C;">
                        <div class="categories-two__icon categories-two__icon-3">
                            <span class="fa fa-map-marked-alt"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="organic-services.html" class="text-white">Tracking</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->

                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="categories-two__single" style="--accent-color: #d7a955; background-color: #26973C;">
                        <div class="categories-two__icon categories-two__icon-4">
                            <span class="fa fa-user-headset"></span>
                        </div>
                        <h3 class="categories-two__title"><a href="delivery-services.html" class="text-white">Support</a></h3>
                    </div>
                </div>
                <!--Categories Two Single End-->

                <!--Categories Two Single Start-->
                <div class="col-xl-2 col-lg-4 col-md-4 ">
                    <div class="categories-two__single" style="--accent-color: #5580d7;">
                        <div class="categories-two__icon categories-two__icon-5">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 500 500" version="1.1"><path d="M 128 167.696 C 120.193 169.017, 106.056 173.423, 97.882 177.082 C 87.469 181.743, 70.892 190.914, 66.406 194.496 L 63.500 196.817 71.150 200.306 C 89.368 208.614, 101.855 217.683, 111.125 229.335 C 118.007 237.986, 123.919 242.850, 132.956 247.299 C 138.651 250.103, 140.454 250.498, 147.479 250.481 C 154.322 250.464, 156.296 250.045, 160.917 247.629 C 166.151 244.893, 177 235.601, 177 233.855 C 177 233.385, 175.762 233.002, 174.250 233.005 C 169.856 233.013, 162.145 229.816, 158 226.268 C 152.174 221.282, 149.656 215.179, 149.578 205.861 L 149.513 198.091 140.507 195.106 C 129.087 191.321, 121.189 190.051, 108 189.876 L 97.500 189.737 104.500 188.849 C 116.423 187.336, 130.617 189.161, 148.504 194.506 C 150.266 195.032, 150.804 194.161, 152.954 187.302 C 154.299 183.011, 155.422 177.250, 155.449 174.500 L 155.500 169.500 151 168.330 C 146.653 167.201, 133.128 166.827, 128 167.696 M 302 229.562 C 283.368 239.287, 253.258 241.544, 223.292 235.463 C 208.990 232.560, 195.628 234.029, 184.010 239.782 C 177.162 243.172, 166.929 253.234, 163.553 259.895 C 160.065 266.778, 160.247 269.340, 163.868 264.341 C 175.607 248.136, 196.174 241.917, 222.500 246.611 C 228.169 247.622, 237.422 248.234, 247.500 248.263 C 264.858 248.314, 273.429 246.789, 286.371 241.346 C 293.036 238.543, 304.676 231.347, 306.872 228.672 C 308.670 226.482, 307.485 226.699, 302 229.562 M 185 349 L 185 356.105 190.147 355.802 C 195.742 355.474, 197.893 353.649, 196.531 350.386 C 196.098 349.349, 195.689 347.150, 195.622 345.500 C 195.504 342.604, 195.318 342.490, 190.250 342.198 L 185 341.895 185 349 M 205 349 L 205 356 210.583 356 C 217.010 356, 217.896 353.716, 211.673 353.190 C 206.656 352.766, 206.578 350, 211.583 350 C 216.102 350, 215.757 347.639, 211.173 347.187 C 206.868 346.762, 207.132 345, 211.500 345 C 213.944 345, 215 344.548, 215 343.500 C 215 342.367, 213.778 342, 210 342 L 205 342 205 349 M 222 343.500 C 222 344.333, 222.889 345, 224 345 C 225.758 345, 226 345.667, 226 350.500 C 226 354.722, 226.348 356, 227.500 356 C 228.649 356, 229 354.730, 229 350.570 C 229 345.761, 229.249 345.103, 231.172 344.820 C 232.366 344.644, 233.529 343.938, 233.755 343.250 C 234.054 342.342, 232.503 342, 228.083 342 C 223.343 342, 222 342.331, 222 343.500 M 239 343.094 C 239 343.695, 239.900 344.423, 241 344.710 C 242.688 345.152, 243 346.074, 243 350.617 C 243 355.333, 243.248 356, 245 356 C 246.752 356, 247 355.333, 247 350.617 C 247 346.074, 247.312 345.152, 249 344.710 C 253.257 343.597, 250.900 342, 245 342 C 241.324 342, 239 342.424, 239 343.094 M 258 349 L 258 356 263.583 356 C 270.010 356, 270.896 353.716, 264.673 353.190 C 259.656 352.766, 259.578 350, 264.583 350 C 269.102 350, 268.757 347.639, 264.173 347.187 C 259.836 346.758, 260.166 345.191, 264.673 344.810 C 270.896 344.284, 270.010 342, 263.583 342 L 258 342 258 349 M 277 348.948 C 277 354.550, 277.308 356, 278.500 356 C 279.333 356, 280 355.111, 280 354 C 280 352.894, 280.667 352, 281.492 352 C 282.312 352, 283.545 352.900, 284.232 354 C 284.919 355.100, 286.298 356, 287.297 356 C 288.967 356, 288.990 355.823, 287.577 353.806 C 286.186 351.821, 286.198 351.438, 287.703 349.776 C 288.988 348.356, 289.149 347.323, 288.413 345.220 C 287.563 342.791, 286.902 342.468, 282.231 342.198 L 277 341.895 277 348.948 M 308 349 L 308 356 312.583 356 C 317.633 356, 318.501 353.755, 313.673 353.184 C 311.142 352.884, 311 352.578, 311 347.434 C 311 343.270, 310.649 342, 309.500 342 C 308.310 342, 308 343.444, 308 349 M 324 349 C 324 354.556, 324.310 356, 325.500 356 C 326.690 356, 327 354.556, 327 349 C 327 343.444, 326.690 342, 325.500 342 C 324.310 342, 324 343.444, 324 349 M 336 349 C 336 354.556, 336.310 356, 337.500 356 C 338.433 356, 339 355.056, 339 353.500 C 339 351.389, 339.467 351, 342 351 C 344 351, 345 350.500, 345 349.500 C 345 348.500, 344 348, 342 348 C 337.823 348, 337.973 345.228, 342.173 344.813 C 347.699 344.268, 346.821 342, 341.083 342 L 336 342 336 349 M 353 349 L 353 356 358.583 356 C 365.010 356, 365.896 353.716, 359.673 353.190 C 354.656 352.766, 354.578 350, 359.583 350 C 364.102 350, 363.757 347.639, 359.173 347.187 C 354.836 346.758, 355.166 345.191, 359.673 344.810 C 365.896 344.284, 365.010 342, 358.583 342 L 353 342 353 349 M 188 346 C 188 346.550, 189.125 347, 190.500 347 C 191.875 347, 193 346.550, 193 346 C 193 345.450, 191.875 345, 190.500 345 C 189.125 345, 188 345.450, 188 346 M 280 347 C 280 348.737, 280.511 349.074, 282.750 348.816 C 284.387 348.628, 285.500 347.893, 285.500 347 C 285.500 346.107, 284.387 345.372, 282.750 345.184 C 280.511 344.926, 280 345.263, 280 347 M 188 351.434 C 188 352.517, 188.951 353, 191.083 353 C 194.909 353, 194.566 350.644, 190.673 350.184 C 188.779 349.959, 188 350.323, 188 351.434" stroke="none" fill="#26973c" fill-rule="evenodd"/><path d="M 261 263.356 C 253.178 265.703, 251.067 266.857, 246.102 271.501 C 235.530 281.390, 232.417 297.362, 238.454 310.747 C 242.646 320.043, 251.560 327.464, 261 329.517 C 266.513 330.715, 276.834 330.216, 281.998 328.501 C 288.690 326.278, 295 320.659, 295 316.922 C 295 313.367, 291.870 310, 288.566 310 C 287.228 310, 283.877 311.402, 281.120 313.116 C 276.535 315.966, 275.526 316.199, 269.282 315.846 C 260.744 315.364, 256.737 312.779, 253.394 305.599 C 249.388 296.995, 250.706 288.058, 256.896 281.869 C 263.358 275.407, 272.054 274.568, 280.678 279.574 C 286.250 282.809, 290.273 282.740, 292.927 279.365 C 295.636 275.922, 295.542 273.798, 292.523 270.210 C 287.203 263.888, 270.984 260.361, 261 263.356 M 320 263.538 C 308.917 266.627, 299.927 274.989, 296.325 285.559 C 294.036 292.276, 294.834 305.099, 297.933 311.423 C 310.153 336.357, 348.723 336.404, 361.261 311.500 C 363.669 306.719, 365.231 297.319, 364.502 292.011 C 363.534 284.975, 358.966 276.089, 354.026 271.635 C 344.955 263.456, 331.651 260.290, 320 263.538 M 188.306 265.413 L 185.500 267.827 185.500 296.308 C 185.500 322.913, 185.626 324.929, 187.405 326.895 C 189.230 328.912, 190.219 329, 211 329 C 230.743 329, 232.839 328.836, 234.345 327.171 C 236.542 324.744, 236.450 319.717, 234.171 317.655 C 232.633 316.263, 229.850 316, 216.671 316 L 201 316 201 309.500 L 201 303 214.045 303 C 226.563 303, 227.190 302.901, 229.545 300.545 C 232.495 297.596, 232.656 295.032, 230.091 291.861 C 228.281 289.623, 227.473 289.483, 214.591 289.173 L 201 288.845 201 282.923 L 201 277 216.326 277 C 231.052 277, 231.736 276.910, 233.826 274.686 C 236.808 271.512, 236.622 267.634, 233.365 265.073 C 230.901 263.134, 229.447 263, 210.921 263 C 191.422 263, 191.068 263.038, 188.306 265.413 M 323.500 277.269 C 316.056 280.323, 311.938 285.424, 310.556 293.304 C 309.098 301.618, 314.798 312.105, 322.315 314.939 C 327.135 316.756, 335.086 316.198, 339.500 313.734 C 345.187 310.558, 349.293 302.426, 348.754 295.410 C 347.949 284.958, 341.036 277.385, 331.494 276.501 C 328.707 276.243, 325.174 276.583, 323.500 277.269" stroke="none" fill="#3c4937" fill-rule="evenodd"/><path d="M 159.680 145.154 C 160.131 149.194, 160.440 157.450, 160.366 163.500 C 160.255 172.615, 159.765 175.871, 157.510 182.500 C 154.285 191.978, 153.272 202.797, 154.953 209.804 C 157.743 221.433, 167.911 228.703, 182.814 229.725 L 190.830 230.274 191.933 226.387 C 197.073 208.258, 194.857 189.216, 185.490 171.039 C 183.071 166.342, 182.039 163.625, 183.198 165 C 187.146 169.684, 193.828 185.331, 195.563 193.954 C 197.440 203.284, 197.074 214.449, 194.586 223.750 C 193.248 228.748, 193.273 229, 195.101 229 C 198.734 229, 206.047 224.754, 209.844 220.439 C 218.211 210.934, 219.160 193.034, 212.037 179.072 C 206.057 167.350, 190.626 154.226, 170.737 143.946 L 158.860 137.807 159.680 145.154" stroke="none" fill="#7bc02d" fill-rule="evenodd"/><path d="" stroke="none" fill="#24943c" fill-rule="evenodd"/></svg></span>
                        </div>
                        <h3 class="categories-two__title font-bold"><a href="agriculture-services.html">ECO +</a></h3>
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
