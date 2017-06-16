@extends('layouts.main')
@section('title','Reservation')
@section('content')
@if ($errors->has('tgl_masuk') || $errors->has('tgl_keluar'))
<script type="text/javascript"> swal("Failed to Check Bungalows", "{{ $errors->first('tgl_masuk') }} . {{ $errors->first('tgl_keluar') }}" , "error"); </script>
@endif
<section class="section-breadcrumb">
        <h2 class="title" >Check Results</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Reservation</span></span>
        </div>
        <div class="booking-progress-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 booking-step ">
                        <a href="{{url('choose_date')}}"><span class="number-circle">1</span>Choose date</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
                        <a href="#"><span class="number-circle">2</span>Choose bungalows</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step current">
                        <a href="#"><span class="number-circle">3</span>Reservation</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
                        <a href="#"><span class="number-circle">4</span>Review & Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-booking">
        <h2 class="hidden">Booking section</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5 ">
                </div>
                <div class="col-lg-8 col-md-7">
                    <h3 class="hidden">Reservation form</h3>
                    <div class="reservation-container">
                        <img src="{{asset('/images/gallery/bg_reservasi.jpg')}}" class="img-centered img-responsive" alt="booking-background" data-animate="fadeIn">
                        <div class="reservation-form">
                            <form class="form-horizontal" role="form" action="{{url('/book')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{$tgl_masuk}}" name="tgl_masuk">
                            <input type="hidden" value="{{$tgl_keluar}}" name="tgl_keluar">
                            <input type="hidden" value="{{$bungalow_id}}" name="bungalow_id">
                                <div class="col-xs-12">
                                    <div class="">
                                        <label class="control-label" >Full Name *</label>
                                        <input type="text" class="form-control" name="nama_pemesan">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label" >Adults</label>
                                        <select class="form-control third" name="jumlah_dewasa">
                                            <option selected="selected">1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <label class="control-label" >Children</label>
                                        <select class="form-control third" name="jumlah_anak">
                                            <option selected="selected">0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label">Email *</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label">Phone *</label>
                                        <input type="text" class="form-control" name="no_telepon">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="">
                                        <label class="control-label">Additional note for us</label>
                                        <textarea class="form-control" name="permintaan_khusus"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="text-center buttons-container">
                                        <button class="button third">Book Now</button>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection