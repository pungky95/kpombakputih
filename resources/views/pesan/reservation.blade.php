@extends('layouts.main')
@section('title','Reservation')
@section('content')
<section class="section-breadcrumb">
        <h2 class="title" >Check Results</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Reservation</span></span>
        </div>
        <div class="booking-progress-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 booking-step ">
                        <a href="#"><span class="number-circle">1</span>Choose date</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
                        <a href="#"><span class="number-circle">2</span>Choose rooms</a>
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
                <div class="col-lg-4 col-md-5 ">
                    <h3 class="hidden">Check date form</h3>
                    <div class="widget-box ">
                        <div class="widget-title">Your Reservation Information</div>
                        <em >Booking Online System</em>
                        <hr>
                        <form class="check-rooms vertical third">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group ">
                                        <label >Arrival Date</label>
                                        <input class="form-control datepicker " data-theme="primary">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label >Departure Date</label>
                                        <input class="form-control datepicker " data-theme="primary">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="">Night</label>
                                        <select class="form-control third">
                                            <option>1</option>
                                            <option selected="selected">2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label >Rooms</label>
                                        <select class="form-control third">
                                            <option>0</option>
                                            <option>1</option>
                                            <option selected="selected">2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr >
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <br>
                                        <label class="room-num"><i class="fa fa-plus-circle"></i>Room 1</label>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group ">
                                        <label>Adults</label>
                                        <select class="form-control third">
                                            <option>1</option>
                                            <option selected="selected">2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group ">
                                        <label >Children</label>
                                        <select class="form-control third">
                                            <option>0</option>
                                            <option selected="selected">1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group ">
                                        <br>
                                        <label class="room-num"><i class="fa fa-plus-circle"></i>Room 2</label>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group ">
                                        <label>Adults</label>
                                        <select class="form-control third">
                                            <option>1</option>
                                            <option selected="selected">2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group ">
                                        <label >Children</label>
                                        <select class="form-control third">
                                            <option>0</option>
                                            <option selected="selected">1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr >
                            <div class="text-center">
                                <button type="submit" class="button">Check Availability</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <h3 class="hidden">Reservation form</h3>
                    <div class="reservation-container">
                        <img src="images/booking/booking-lg.jpg" class="img-centered img-responsive" alt="booking-background" data-animate="fadeIn">
                        <div class="reservation-form">
                            <form class="form-horizontal" role="form">
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label" >First name *</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label " >Last name *</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label">Email *</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="">
                                        <label class="control-label">Phone *</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="">
                                        <label class="control-label">Additional note for us</label>
                                        <textarea class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="text-center buttons-container">
                                        <button class="button">Book via Email</button>
                                        <span class="space-text">-or-</span>
                                        <button class="button third">Pay with Paypal Now</button>
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