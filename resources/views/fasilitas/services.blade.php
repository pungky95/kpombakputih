@extends('layouts.main') 
@section('title','Services')
@section('content')

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
                            <img src="{{asset("$item->path")}}" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <h3 class="title">{{ $item->nama }}</h3>
                            {{-- <p class="content">{!! $item->keterangan !!}</p> --}}
                        </div>
                    </div>
                @endforeach    
                </div>
                @if ($fasilitas->hasPages())
    <div class="row">
        <div class="col-md-12 page-controls text-center">
        {{-- Previous Page Link --}}
        @if ($fasilitas->onFirstPage())
            <a href="#" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
        @else
            <a href="{{ $fasilitas->previousPageUrl() }}" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
        @endif 
                @for($i=1;$i<=$fasilitas->lastPage();$i++)
                    @if ($i == $fasilitas->currentPage())
                        <a href="{{$fasilitas->url($i)}}" class="button ">{{$i}}</a>
                    @else
                        <a href="{{$fasilitas->url($i)}}" class="button secondary transparent">{{$i}}</a>
                    @endif
                @endfor
        @if ($fasilitas->hasMorePages())
            <a href="{{ $fasilitas->nextPageUrl() }}" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
        @else
            <a href="#" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
        @endif
        </div>
    </div>
@endif
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
                </div>
            </div>
            <div class="testimonial-slider-page-controls"></div>
        </div>
    </section>

    @endsection