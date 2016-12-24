@extends('layouts.navigation') 
@section('title','Services')
@section('nav')

    <h1 class="hidden">Facilities</h1>
    <section class="section-breadcrumb">
        <h2 class="title" >Our Facilities</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Facilities</span></span>
        </div>
    </section>

    <section class="section-facilities">
        <h2 class="hidden">Services</h2>
        <div class="container">
            <div class="facilities-container">
                <div class="row">
                @foreach($fasilitas as $item)
                    <div class="col-sm-6 col-md-3">
                        <div class="content-box">
                            <img src="images/facility-1.jpg" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">{{ $item->nama }}</h3>
                            <p class="content">{{ $item->keterangan }}</p>
                        </div>
                    </div>
                @endforeach    
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials bg-secondary">
        <div class="text-center">
            <h2 class="title">Testimonial</h2>
        </div>
        <div class="moon-divider white"></div>
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
                            <h4 class="name">Admin</h4>
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

    @endsection