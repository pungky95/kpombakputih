@extends('layouts.main')
@section('title','Bungalow')
@section('content')
    <section class="section-breadcrumb">
        <h2 class="title" >Accommodations</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Bungalows</span></span>
        </div>
    </section>

    <section class="section-style-2 section-check-rooms">
        <h2 class="hidden" >Rooms section</h2>
        <div class="container">
            <h3 class="title" >Check Availability</h3>
            <div class="section-starter"></div>
            <div class="row">
                <div class="search-form">
                    <form class="check-rooms ">
                        <div class="col-md-3">
                        <div class="form-group ">
                            <label>Arrival Date</label><br>
                            <input class="form-control datepicker" data-theme="primary" >
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group ">
                            <label>Departure Date</label><br>
                            <input class="form-control datepicker">
                        </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                            <label>Adults</label><br>
                            <select class="form-control form-select" data-theme="primary">
                                <option selected="selected">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                            <label >Children</label><br>
                            <select class="form-control form-select">
                                <option selected="selected">0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group text-center">
                            <button type="submit" class="button">Check Now</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach ($bungalow_galeris as $items)
                <h3 class="hidden">Rooms list</h3>
                <div class="col-sm-4">
                    <div class="room-box">
                        <img src="images/room-1.jpg" class="img-centered img-responsive" data-animate="fadeIn" alt="room-1">
                        <h4 class="title-big"><strong>{{substr($items->nama,0,17)}}</strong> {{substr($items->nama,17)}}</h4>
                        <p class="content">{!!$items->keterangan!!}</p>
                        <a href="{{url('bungalow/'.$items->bungalow_id)}}" class="button secondary transparent">Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection