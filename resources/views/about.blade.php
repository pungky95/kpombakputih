   @extends('layouts.navigation') 
   @section('title','About')
   @section('nav')
   {{ Counter::count('about') }}
    <section class="section-breadcrumb">
        <h2 class="title" >About the Ombak Putih Bungalow</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > About Us</span></span>
        </div>
    </section>

    <section class="section-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title" >Our Story</h2>
                    <div class="section-starter"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="content">Welcome on the website from Ombak Putih Bungalows.Ombak Putih is in English “White Wave”.
                                It is named after the fantastic waves you will see on the beautiful sandy beaches only 100 meters from our bungalows.
                                You can find our bungalows in the little village Tanjung Benoa, at the border from Nusa-Dua in the sunny south of Bali.
                                Ombak Putih is situated at a lively street with a lot of restaurants and small shops, nearby the conference centre.
                                It is only an half hour drive from our bungalows to the modern airport from Bali.</p>
                            <p> We offer you free taxi-transportation to and from the airport (by min stay of 7 days only for this site !).
                                Koos Buis and Lina Hartatik are the enthusiastic managers of the park. They will offer you a holliday you won’t forget.
                                Koos and Lina can arrange all kind of activities for you.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="content">
                                From unique excursions all over the island to an unforgettable diner party at the beach.
                                We hope that you will enjoy reading our site and that we will soon be able to welcome you on Bali.

                                Koos Buis and Lina Hartatik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6" >
                            <img src="{{ asset("moon/images/about/story-1.jpg")}}" class="img-centered img-responsive" alt="story-1">
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset("moon/images/about/story-2.jpg")}}"  class="img-centered img-responsive" alt="story-2">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-style-2 section-why-us section-bg-white">
        <div class="container">
            <div>
                <h2 class="title" >What Makes Us Different</h2>
                <div class="section-starter"></div>
            </div>
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

    <section class="section-style-2 section-testimonials-2 ">
        <div class="container">
            <div class="row">
                <div class="col-md-20">
                    <h2 class="title" >Testimonial</h2>
                    <div class="section-starter"></div>
                    <div class="testimonial-slider-2 swiper-container">
                    <div class="swiper-wrapper">
                    @if($testimoni->count()>=3)
                        @foreach($testimoni->random(3) as $item)
                        <!-- Testimonial 01 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box">
                                <p class="text">{{ $item->konten }}</p>
                                <div class="tri-down"></div>
                                <div class="profile" >
                                    <img src="{{ asset("moon/images/about/avatar-1.png") }}" class="img img-circle avatar" alt="avatar-1">
                                    <h3 class="name">{{ $item->nama_tamu }}</h3>
                                    <div class="position">Our Guest</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @elseif($testimoni->count()==0)
                        <!-- Testimonial 01 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box">
                                <p class="text">There is no testimoni yet</p>
                                <div class="tri-down"></div>
                                <div class="profile" >
                                    <img src="{{ asset("moon/images/about/avatar-1.png") }}" class="img img-circle avatar" alt="avatar-1">
                                    <h3 class="name">Koos Buis</h3>
                                    <div class="position">Admin</div>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach($testimoni as $item)
                        <!-- Testimonial 01 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box">
                                <p class="text">{{ $item->konten }}</p>
                                <div class="tri-down"></div>
                                <div class="profile" >
                                    <img src="{{ asset("moon/images/about/avatar-1.png") }}" class="img img-circle avatar" alt="avatar-1">
                                    <h3 class="name">{{ $item->nama_tamu }}</h3>
                                    <div class="position">Our Guest</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    </div>
                </div>
                    <div class="testimonial-slider-page-controls"></div>
                </div>
            </div>

        </div>
    </section>
    @endsection