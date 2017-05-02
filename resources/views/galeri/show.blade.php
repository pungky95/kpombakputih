@extends('layouts.main')
@section('title','Gallery')
@section('content')    
    <section class="section-breadcrumb">
        <h2 class="title" >Our Galleries</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Gallery</span></span>
        </div>
    </section>

    <section class="section-gallery">
        <h2 class="hidden" >Gallery section</h2>
        <div class="container ">
            <div class="gallery-container">
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="gallery-single.html"><img src="{{asset($single->path)}}" class="img-centered img-responsive" alt="gallery" data-animate="fadeIn" data-delay="300"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has {{sizeof($galeri)}} photos</p>
                        <p class="content">{{$kategori->nama}}</p>
                        <div class="date"><i class="fa fa-calendar-o"></i> @php $date=strtotime($single->created_at); echo date('M jS, Y',$date); @endphp</div>
                        <div class="post-social-links">
                            <div class="header">Share this gallery</div>
                            <div class="icons">
                                <a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                <div class="row gallery-images">
                    @foreach($galeri as $item)
                    <div class="col-md-4 col-xs-6">
                        <a href="{{asset($item->path)}}" data-lightbox="gallery" data-title=""><img src="{{asset($item->path)}}" class="img-centered img-responsive" data-animate="zoomIn" alt="image-1"></a>
                    </div>
                    @endforeach
                </div>
                
@if ($galeri->hasPages())
    <div class="row">
        <div class="col-md-12 page-controls text-center">
        {{-- Previous Page Link --}}
        @if ($galeri->onFirstPage())
            <a href="#" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
        @else
            <a href="{{ $galeri->previousPageUrl() }}" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
        @endif 
                @for($i=1;$i<=$galeri->lastPage();$i++)
                    @if ($i == $galeri->currentPage())
                        <a href="{{$galeri->url($i)}}" class="button ">{{$i}}</a>
                    @else
                        <a href="{{$galeri->url($i)}}" class="button secondary transparent">{{$i}}</a>
                    @endif
                @endfor
        @if ($galeri->hasMorePages())
            <a href="{{ $galeri->nextPageUrl() }}" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
        @else
            <a href="#" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
        @endif
        </div>
    </div>
@endif

            </div>
        </div>
    </section>
@endsection