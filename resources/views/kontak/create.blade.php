@extends('layouts.main')
@section('title','Contact')
@section('content')
{{ Counter::count('contact') }}
@include('sweet::alert')
@if (count($errors) > 0)
    <script type="text/javascript"> sweetAlert("Failed to Sent Your Message", "Check Your Contact Form" , "error"); </script>
@endif
    <section class="section-breadcrumb">
        <h2 class="title" >About the Ombak Putih Bungalow</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Contact Us</span></span>
        </div>
    </section>

    <section class="section-style-2 section-contact-us">
        <h2 class="hidden">Contact us</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="map-wrapper">
                        <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1415.92136390103!2d115.22198704334643!3d-8.762447309085502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2466510cccaaef6f!2sOmbak+Putih+Bungalows!5e0!3m2!1sen!2sid!4v1476875479272" style="border:0;height: 100%;"></iframe>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48363.38936933083!2d-73.98671186938435!3d40.746365916129626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b30eac9f%3A0xaca05ca48ab5ac2c!2s350+5th+Ave%2C+New+York%2C+NY+10118%2C+USA!5e0!3m2!1sen!2smy!4v1430753807808" style="border:0;height: 100%;"></iframe> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="title" >Ombak Putih Bungalow</h3>
                    <div class="section-starter"></div>
                    <p class="content">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam vitae imperdiet massa, id malesuada est. Ut volutpat lorem id ante egestas, non laoreet turpis venenatis.</p>
                    <div class="row">
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">Koos Buis</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>Jalan Pratama 101X, Tanjung Benoa, Nusa Dua, Bali</div>
                            <div class="address-line"><i class="fa fa-phone"></i>(+62)81-338-827-281</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>dinafur@hotmail.com</div>
                        </div>
                        <div class="col-sm-6 office-box" >
                            <h4 class="subtitle">Lina Hartatik</h4>
                            <div class="address-line"><i class="fa fa-map-marker"></i>Jalan Pratama 101X, Tanjung Benoa, Nusa Dua, Bali</div>
                            <div class="address-line"><i class="fa fa-phone"></i>(+62)81-338-622-462</div>
                            <div class="address-line"><i class="fa fa-envelope"></i>linahartatik@hotmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title" >Drop us a line</h3>
                    <div class="section-starter"></div>
                    <form class="contact-form" method="POST" action="{{ url ('/kontak') }}">
                            {!! Form::open(['url' => '/kontak', 'class' => 'contact-form', 'files' => true]) !!}
                            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                                {!! Form::label('nama', 'Name*', ['class' => 'control-label']) !!}
                                <div >
                                    {!! Form::text('nama', null, ['class' => 'form-control','placeholder' => 'John Doe']) !!}
                                    {!! $errors->first('nama', '<p style="color: red;" >:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                {!! Form::label('phone', 'Phone*', ['class' => 'control-label']) !!}
                                <div>
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '08123456789']) !!}
                                    {!! $errors->first('phone', '<p style="color: red;" >:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
                                <div >
                                    {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'johndoe@gmail.com']) !!}
                                    {!! $errors->first('email', '<p style="color: red;" >:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('pesan') ? 'has-error' : ''}}">
                                {!! Form::label('pesan', 'Message*', ['class' => 'control-label']) !!}
                                <div >
                                    {!! Form::textarea('pesan', null, ['class' => 'form-control','placeholder'=>'Write your message here']) !!}
                                    {!! $errors->first('pesan', '<p style="color: red;" >:message</p>') !!}
                                </div>
                            </div>
                        {!! Form::submit('Send Us', ['class' => 'button secondary transparent']) !!}
                        {!! Form::close() !!}
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="{{asset("images/contact/1489476256.jpg")}}" style="width: 737; height: 491; object-fit: cover;" class="img-centered img-responsive" alt="contact-bg">
                </div>
            </div>

        </div>
    </section>
@endsection 
