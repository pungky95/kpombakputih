@extends('layouts.main')
@section('title','Choose Date')
@section('content')
<section class="section-breadcrumb">
        <h2 class="title" >Check Results</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Choose Date</span></span>
        </div>
        <div class="booking-progress-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 booking-step current">
                        <a href="#"><span class="number-circle">1</span>Choose date</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
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
                                        <label >Adults</label>
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
                    <h3 class="hidden">Calendar</h3>
                    <div class="calendar-container">
                        <img src="images/booking/booking-lg.jpg" class="img-centered img-responsive" alt="booking-banner" data-animate="fadeIn">
                        <div class="dates-container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="date-picker-inline first"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="date-picker-inline second"></div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-12 ">
                                    <div class="legend-box ">
                                    <label class="legend"><span class="unavailable"></span>Unavailable</label>
                                    <label class="legend"><span class="selected"></span>Selected</label>
                                    <label class="legend"><span class="available"></span>Available</label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection