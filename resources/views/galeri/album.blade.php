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
        <div class="container">
            <div class="gallery-container">
                @for($i=0;$i<sizeof($arrkategori);$i++)
                <div class="row gallery-row">
                    <div class="col-md-6">
                        <a href="{{ url('/galeri/' . $arrkategori[$i]['kategori_id']) }}"><img src="{{ asset($arrkategori[$i]['path']) }}" class="img-centered img-responsive" data-animate="fadeIn" alt="gallery-1"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="desc">This album has {{($arrkategori[$i]['number'])}}  photos</p>
                        <h3 class="content">{{$arrkategori[$i]['nama']}}</h3>
                        <div class="date"><i class="fa fa-calendar-o"></i>@php $date=strtotime($arrkategori[$i]['created_at']); echo date('M jS, Y',$date); @endphp  {{-- May 22nd, 2015 --}}</div>
                        <a href="{{ url('/galeri/' . $arrkategori[$i]['kategori_id']) }}" class="button secondary transparent">Detail</a>
                    </div>
                </div>
                @endfor
                {{-- <div class="row">
                    <div class="col-md-12 page-controls text-center">
                        <a href="#" class="button secondary transparent"><i class="fa fa-chevron-left"></i> </a>
                        <a href="#" class="button secondary transparent">1</a>
                        <a href="#" class="button ">2</a>
                        <a href="#" class="button secondary transparent">3</a>
                        <a href="#" class="button secondary transparent"><i class="fa fa-chevron-right"></i> </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>  
@endsection