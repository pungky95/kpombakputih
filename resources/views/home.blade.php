@extends('layouts.navigation')
@section('title','Home')
@section('nav')
 <div id="main-slider" class="slider">
        <div class="swiper-container">
            <h2 class="hidden">Main Slider</h2>
            <div class="swiper-wrapper">
                <!-- Slide 01 -->
                <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-3.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Swimming</strong>Pool</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                        </div>
                    </div>
                </div>
                <!-- Slide 02 -->
                 <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-5.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Comfort</strong>Room</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                        </div>
                    </div>
                </div>
                <!-- Slide 03 -->
                <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-4.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <div class="slide-subtitle" data-animate="fadeInRight">Special Offers</div>
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Water</strong>Sport</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                            <div class="slide-subtitle-italic" data-animate="fadeInRight" data-delay="300"><span class="price">$149</span></div>
                            <a href="#" class="button transparent" data-animate="fadeInRight" data-delay="300">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-control prev"><i class="icon-prev"></i></div>
        <div class="main-slider-control next"><i class="icon-next"></i></div>
        <div class="container">
            <div class="page-controls centered clearfix">
            </div>
        </div>
    </div>

    <section class="section-search-rooms">
        <h2 class="hidden">Search Rooms</h2>
        <div class="search-rooms-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="title-container">
                            <div class="title-area bg-primary">
                                <div class="title">Search Rooms</div>
                                <div class="subtitle">For rates & availability</div>
                                <p class="content muted">Choose from over 5 House that suits you best</p>
                            </div>
                            <div class="title-background bg-primary"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="search-form">
                            <form class="form-inline check-rooms secondary" action="#" method="post" >
                                <div class="form-group ">
                                    <label>Arrival Date</label><br>
                                    <input name="arrival" class="form-control datepicker" data-theme="secondary">
                                </div>
                                <div class="form-group ">
                                    <label>Departure Date</label><br>
                                    <input name="departure" class="form-control datepicker" data-theme="secondary">
                                </div>
                                <div class="form-group">
                                    <label>Adults</label><br>
                                    <select name="adults" class="form-control form-select secondary" >
                                    	<option selected="selected">0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Children</label><br>
                                    <select name="children" class="form-control form-select secondary" >
                                        <option selected="selected">0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="button">Check Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-why-us">
        <h2 class="title text-center" >Why the Ombak Putih</h2>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="content-box ">
                        <img src="{{ asset("moon/images/home/why-moon-4.jpg")}}" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-1">
                        <h3 class="title">King Bed Size</h3>
                        <p class="content">Porttitor pharetra tortor in, consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. Sed a lacinia sapien. Etiam dignissim sit amet felis ac sagittis pharetra sagittis ultrices.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <img src="{{ asset("moon/images/home/why-moon-5.jpg")}}" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-2">
                        <h3 class="title">Kitchen</h3>
                        <p class="content">Vestibulum quis posuere ligula. Fusce in odio ac diam finibus tempus. Suspendisse potenti. Etiam accumsan purus magna, et viverra neque volutpat fermentum. Vivamus consequat, felis at aliquam elementum, massa sem.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="content-box">
                        <img src="{{ asset("moon/images/home/why-moon-6.jpg")}}" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-3">
                        <h3 class="title">Tropical Garden</h3>
                        <p class="content ">Donec condimentum id erat a molestie. In luctus quis risus cursus faucibus. Pellentesque ornare dui cursus ex dictum, eget porttitor est iaculis. Quisque vehicula iaculis purus a egestas in tortor facilisis, congue nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-rooms">
        <h2 class="hidden">Rooms</h2>
        <div class="container">
            <div class="rooms-area">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="room-title-container" >
                            <h3 class="title">House</h3>
                            <div class="title-room">One</div>
                            <p class="content muted">Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.</p>
                            <a href="#" class="link secondary">Continue Reading </a>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="{{ asset("moon/images/room-1.jpg")}}" class="img-centered img-responsive grayscale" data-animate="fadeInLeft" alt="room-1">
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="room-container" >
                            <div class="price-text">from <span class="price">$99.00</span> / night</div>
                            <p class="room-desc">Only 5 rooms are available</p>
                            <p class="room-desc">Breakfast included</p>
                            <p class="room-desc">Price does not include VAT & service fee</p>
                            <a href="booking-choose-date.html" class="button" >Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="room-title-container" >
                            <h3 class="title">House</h3>
                            <div class="title-room">Two</div>
                            <p class="content muted">Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.</p>
                            <a href="#" class="link secondary">Continue Reading </a>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="{{ asset("moon/images/room-2.jpg")}}" class="img-centered img-responsive grayscale" data-animate="fadeInLeft" alt="room-2">
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="room-container" >
                            <div class="price-text">from <span class="price">$99.00</span> / night</div>
                            <p class="room-desc">Only 5 rooms are available</p>
                            <p class="room-desc">Breakfast included</p>
                            <p class="room-desc">Price does not include VAT & service fee</p>
                            <a href="booking-choose-date.html" class="button" >Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="room-title-container" >
                            <h3 class="title">House</h3>
                            <div class="title-room">Three</div>
                            <p class="content muted">Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.</p>
                            <a href="#" class="link secondary">Continue Reading </a>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="{{ asset("moon/images/room-3.jpg")}}" class="img-centered img-responsive grayscale" data-animate="fadeInLeft" alt="room-3">
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="room-container" >
                            <div class="price-text">from <span class="price">$99.00</span> / night</div>
                            <p class="room-desc">Only 5 rooms are available</p>
                            <p class="room-desc">Breakfast included</p>
                            <p class="room-desc">Price does not include VAT & service fee</p>
                            <a href="booking-choose-date.html" class="button" >Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-8 col-xs-offset-6 rooms-background bg-secondary"></div>
        </div>
    </section>

    <section class="section-facilities">
        <div class="text-center">
            <h2 class="title">Ombak Putih's Facilities</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="facilities-container">
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("moon/images/facility-pool.jpg")}}" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">Swimming Pool</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Free Wifi</h3>
                            <p class="content">Vivamus eros dolor, auctor aliquet dolor sit amet, euismod imperdiet ex. Nam sed nulla sed massa suscipit feugiat. Mauris et nunc ornare, placerat ex ac, interdum magna. Donec mollis tellus non sem pulvinar.</p>
                            <div class="tri-down"></div>
                            <img src="{{ asset("moon/images/facility-wifi.jpg")}}" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("moon/images/facility-bicycle.jpg")}}" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-3">
                            <div class="tri-up"></div>
                            <h3 class="title">Bicycle Rent</h3>
                            <p class="content">Suspendisse euismod, neque faucibus dictum rutrum, ex dolor tempor dolor, ut egestas velit tellus quis erat. Curabitur vel elit a nibh fringilla maximus.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content-box">
                            <h3 class="title">Hot &amp; Cold Shower</h3>
                            <p class="content">Molestie condimentum tellus. Vivamus nec lectus congue, ultrices felis sit amet, dapibus augue. Cras fringilla efficitur elementum. Mauris ac consectetur nibh. Mauris tincidunt dolor justo, ac accumsan.</p>
                            <div class="tri-down"></div>
                            <img src="{{ asset("moon/images/facility-shower.jpg")}}" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-4">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 text-center">
                    <a href="facilities.html" class="button transparent" >See All Facilities</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials bg-primary">
        <div class="text-center">
            <h2 class="title">Testimonial</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="testimonial-slider swiper-container">
                <div class="swiper-wrapper">
                @if($testimoni->count()>=3)
                @foreach($testimoni->random(3) as $item)
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">{{ $item->konten }}</p>
                            <h4 class="name">{{ $item->nama_tamu}}</h4>
                            <div class="position">Our Guest</div>
                        </div>
                    </div>
                @endforeach
                @elseif($testimoni->count()==0)
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">There is no Testimoni yet</p>
                            <h4 class="name">Koos Buis</h4>
                            <div class="position">Admin</div>
                        </div>
                    </div>
                @else
                @foreach($testimoni as $item)
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">{{ $item->konten }}</p>
                            <h4 class="name">{{ $item->nama_tamu}}</h4>
                            <div class="position">Our Guest</div>
                        </div>
                    </div>
                @endforeach  
                @endif
                </div>
            </div>
            <div class="testimonial-slider-page-controls"></div>
        </div>
    </section>

    <section class="section-from-blog ">
        <div class="text-center">
            <h2 class="title">From Our Blog</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="row" >
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box ">
                        <a href="blog-single.html">
                            <img src="{{ asset("moon/images/blog/blog-thumb-1.jpg")}}" class="img-centered img-responsive" alt="blog-thumb-1">
                            <div class="blog-meta-box ">
                                <h3 class="blog-title">Sed convallis malesuada massa id volutpat</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>May 21st, 2015</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box">
                        <a href="blog-single.html">
                            <img src="{{ asset("moon/images/blog/blog-thumb-2.jpg")}}" class="img-centered img-responsive" alt="blog-thumb-2">
                            <div class="blog-meta-box">
                                <h3 class="blog-title">Consectetur pharetra elit id maximus facillisis erat</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>May 21st, 2015</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box">
                        <a href="blog-single.html">
                            <img src="{{ asset("moon/images/blog/blog-thumb-3.jpg")}}" class="img-centered img-responsive" alt="blog-thumb-3">
                            <div class="blog-meta-box">
                                <h3 class="blog-title">elleantesque ornare dui cursus ex dictum porttitor</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>May 21st, 2015</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="blog-box wide">
                        <a href="blog-single.html">
                            <img src="{{ asset("moon/images/blog/blog-thumb-4.jpg")}}" class="img-centered img-responsive" alt="blog-thumb-4">
                            <div class="blog-meta-box ">
                                <h3 class="blog-title">Fusce in odio ac diam finibus tempus at aliquam elementum</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>May 21st, 2015</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{url ('blog/user')}}" class="button transparent" >See All Entries</a>
            </div>
        </div>
    </section>
@endsection
