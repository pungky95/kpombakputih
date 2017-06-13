@extends('layouts.main')
@section('title','Choose Bungalow')
@section('content')
<section class="section-breadcrumb">
        <h2 class="title" >Check Results</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Choose Bungalows</span></span>
        </div>
        <div class="booking-progress-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 booking-step ">
                        <a href="#"><span class="number-circle">1</span>Choose date</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step current">
                        <a href="#"><span class="number-circle">2</span>Choose bungalows</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
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
                <div class="col-lg-4 col-md-5 ">
                    <h3 class="hidden">Check date form</h3>
                    <div class="widget-box ">
                        <div class="widget-title">Your Reservation Information</div>
                        <em >Booking Online System</em>
                        <hr>
                        <form class="check-rooms vertical third" action="{{url('/choose_bungalow')}}" method="get">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group ">
                                        <label >Arrival Date</label>
                                        <input class="form-control datepicker " data-theme="primary" name="tgl_masuk">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label >Departure Date</label>
                                        <input class="form-control datepicker " data-theme="primary" name="tgl_keluar">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label >Adults</label>
                                        <select class="form-control third" name="adults">
                                            <option>0</option>
                                            <option>1</option>
                                            <option selected="selected">2</option>
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
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label >Children</label>
                                        <select class="form-control third" name="children">
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
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="button">Check Availability</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 ">
                    <h3 class="hidden">Choose bungalows</h3>
                    <div class="rooms-container">
                        <img src="images/booking/booking-lg.jpg" class="img-centered img-responsive" alt="booking-banner" data-animate="fadeIn">

                        @foreach($bungalow_galeris as $items)
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div>
                                        <img src="{{ asset("$items->path")}}" class="img-responsive" alt="room-thumb-1">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">{{$items->nama}}</h4>
                                        <em >from IDR <span class="price">{{number_format($items->tarif_low,2)}}</span>/night</em>
                                        <p class="content">{!!str_limit($items->keterangan)!!}</p>
                                        <p><a href="{{url('/services')}}" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this bungalow</a></p>
                                        <form action="{{url('bungalow/'.$items->bungalow_id)}}" method="get">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$tgl_masuk}}" name="tgl_masuk">
                                        <input type="hidden" value="{{$tgl_keluar}}" name="tgl_keluar">
                                        <input type="hidden" value="{{$adults}}" name="adults">
                                        <input type="hidden" value="{{$children}}" name="children">
                                        <button type="submit" class="button transparent">Select this bungalow</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection