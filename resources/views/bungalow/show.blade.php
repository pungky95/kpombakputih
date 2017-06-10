@extends('layouts.main')
@section('title','Bungalow')
@section('content')
<section class="section-breadcrumb">
        <h2 class="title" >{{$bungalow->judul}}</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Bungalows</span></span>
        </div>
</section>

    <section class="section-room-single">
        <h2 class="hidden" >Room section</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="room-description">
                        <img src="{{asset($galeri->path)}}" class="img-centered img-responsive" alt="room-large" data-animate="fadeIn">
                        <h3 class="subtitle">Description</h3>
                        {!!$bungalow->keterangan!!}
                        <h3 class="subtitle large-caps">Facilities</h3>
                        <ul class="two-cols">
                            @foreach($fasilitas as $items)
                            <li><a href="#">{{$items->nama}}</a></li>
                            @endforeach
                        </ul>

                        <h3 class="subtitle ">Other Information</h3>
                        <p class="content">Vestibulum urna massa, hendrerit sed fringilla in, mollis vitae tellus. Vestibulum mattis nulla elementum tristique fringilla. Morbi in sollicitudin erat. Nullam ligula sem, imperdiet nec commodo non, convallis vitae neque. Cras tempor magna a purus finibus tristique. Suspendisse euismod, neque faucibus dictum rutrum, ex dolor tempor dolor, ut egestas velit tellus quis erat. Curabitur vel elit a nibh fringilla maximus. Curabitur ut auctor elit, non gravida felis.</p>
                        <em class="content">Sed malesuada tellus id sem placerat dapibus. Pellentesque dui lorem, viverra fringilla nisl id, molestie condimentum tellus. Vivamus nec lectus congue, ultrices felis sit amet, dapibus augue..</em>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <h3 class="hidden" >Room side bar</h3>
                    <div class="widget-box ">
                        <h4 class="widget-title">Book this room</h4>
                        <hr>
                        <em >from IDR <span class="price">{{number_format($bungalow->tarif_low,2)}}</span> / night</em>
                        <div class="include-header">This price includes</div>
                        <div class="include-item">Breakfast</div>
                        {{-- <div class="include-header"><strong>... and do not includes:</strong></div>
                        <div class="include-item">Free spa ticket</div>
                        <div class="include-item">VAT fee & 5% service fee</div> --}}
                        <div class="text-center">
                            <a href="#" class="button">Book</a>
                        </div>
                    </div>
                    <div class="widget-box">
                        <h4 class="widget-title">Search rooms</h4>
                        <em >For rates & availability</em>
                        <hr>

                        <form class="check-rooms vertical third">
                            <div class="form-group ">
                                <label>Arrival Date</label><br>
                                <input class="form-control datepicker" data-theme="primary">
                            </div>
                            <div class="form-group ">
                                <label >Departure Date</label><br>
                                <input class="form-control datepicker" data-theme="primary">
                            </div>
                            <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Adults</label><br>
                                <select class="form-control third">
                                    <option>1</option>
                                    <option selected="selected">2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-6">
                                <label >Children</label><br>
                                <select class="form-control third">
                                    <option>0</option>
                                    <option selected="selected">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <button type="submit" class="button">Check Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection