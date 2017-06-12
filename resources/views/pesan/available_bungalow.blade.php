@extends('layouts.main')
@section('title','Room Availbility')
@section('content')
<section class="section-breadcrumb">
        <h2 class="title" >Check Results</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Rooms</span></span>
        </div>
        <div class="booking-progress-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 booking-step ">
                        <a href="booking-choose-date.html"><span class="number-circle">1</span>Choose date</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step current">
                        <a href="booking-choose-room.html"><span class="number-circle">2</span>Choose rooms</a>
                    </div>
                    <div class="col-md-3 col-xs-6 booking-step">
                        <a href="booking-reservation.html"><span class="number-circle">3</span>Reservation</a>
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
                <div class="col-lg-8 col-md-7 ">
                    <h3 class="hidden">Choose room</h3>
                    <div class="rooms-container">
                        <img src="images/booking/booking-lg.jpg" class="img-centered img-responsive" alt="booking-banner" data-animate="fadeIn">
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div>
                                        <img src="images/booking/room-thumb-1.jpg" class="img-responsive" alt="room-thumb-1">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">Superior Room - No.305</h4>
                                        <em >from <span class="price">$99.00</span>/night</em>
                                        <p class="content">Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. Sed convallis malesuada massa id volutpat.</p>
                                        <p><a href="facilities.html" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this room</a></p>
                                        <a href="room-single.html" class="button transparent">Select this room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <img src="images/booking/room-thumb-2.jpg" class="img-responsive" alt="room-thumb-2">
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">Luxury Room - No.1208</h4>
                                        <em >from <span class="price">$199.00</span>/night</em>
                                        <p class="content">Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. Sed convallis malesuada massa id volutpat.</p>
                                        <p><a href="facilities.html" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this room</a></p>
                                        <a href="room-single.html" class="button transparent">Select this room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <img src="images/booking/room-thumb-3.jpg" class="img-responsive" alt="room-thumb-3">
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">Deluxe Room - No.415</h4>
                                        <em >from <span class="price">$99.00</span>/night</em>
                                        <p class="content">Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. Sed convallis malesuada massa id volutpat.</p>
                                        <p><a href="facilities.html" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this room</a></p>
                                        <a href="room-single.html" class="button transparent">Select this room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <img src="images/booking/room-thumb-4.jpg" class="img-responsive" alt="-room-thumb-4">
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">Superior Room - No.706</h4>
                                        <em >from <span class="price">$99.00</span>/night</em>
                                        <p class="content">Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. Sed convallis malesuada massa id volutpat.</p>
                                        <p><a href="facilities.html" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this room</a></p>
                                        <a href="room-single.html" class="button transparent">Select this room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-row">
                            <div class="row">
                                <div class="col-xs-5">
                                    <img src="images/booking/room-thumb-5.jpg" class="img-responsive" alt="room-thumb-5">
                                </div>
                                <div class="col-xs-7">
                                    <div class="">
                                        <h4 class="subtitle">Superior - No.707</h4>
                                        <em >from <span class="price">$99.00</span>/night</em>
                                        <p class="content">Aliquam suscipit nisi in dui commodo tristique. Sed mollis posuere sapien, vitae fringilla purus ornare vel. Sed convallis malesuada massa id volutpat.</p>
                                        <p><a href="facilities.html" class="link secondary"><i class="fa fa-arrow-right"></i>See facilities of this room</a></p>
                                        <a href="room-single.html" class="button transparent">Select this room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection