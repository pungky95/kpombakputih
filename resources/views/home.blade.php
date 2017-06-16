@extends('layouts.main')
@section('title','Welcome to Ombak Putih Bungalows')
@section('content')
@include('sweet::alert')
@if ($errors->has('tgl_masuk') || $errors->has('tgl_keluar'))
<script type="text/javascript"> swal("Failed to Check Bungalows", "{{ $errors->first('tgl_masuk') }} . {{ $errors->first('tgl_keluar') }}" , "error"); </script>
@endif
{{ Counter::count('home') }}
 <div id="main-slider" class="slider">
        <div class="swiper-container">
            <h2 class="hidden">Main Slider</h2>
            <div class="swiper-wrapper">
                <!-- Slide 01 -->
                <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-3.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Tropical</strong> Garden</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                        </div>
                    </div>
                </div>
                <!-- Slide 02 -->
                 <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-5.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Comfort</strong> Room</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                        </div>
                    </div>
                </div>
                <!-- Slide 03 -->
                <div class="swiper-slide" style="background: url({{ URL::asset('moon/images/home/slider-4.jpg')}}) center top/cover no-repeat">
                    <div class="container">
                        <div class="slide-content">
                            <div class="slide-subtitle" data-animate="fadeInRight">Special Offers</div>
                            <h3 class="slide-title" data-animate="fadeInDown"><strong>Water</strong> Sport</h3>
                            <div class="slide-divider" data-animate="fadeInRight"></div>
                            <div class="slide-subtitle-italic" data-animate="fadeInRight" data-delay="300"><span class="price">$149</span></div>
                            <a href="#" class="button transparent" data-animate="fadeInRight" data-delay="300">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-control prev"><i class="icon-prev"></i></div>
        <div class="main-slider-control next"><i class="icon-next"></i></div>
        <div class="container">
            <div class="page-controls centered clearfix">
            </div>
        </div>
    </div>

    <section class="section-search-rooms">
        <h2 class="hidden">Search Rooms</h2>
        <div class="search-rooms-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="title-container">
                            <div class="title-area bg-primary">
                                <div class="title">Search Rooms</div>
                                <div class="subtitle">For rates & availability</div>
                                <p class="content muted">Choose from over {{$bungalow_galeris->count()}} House that suits you best</p>
                            </div>
                            <div class="title-background bg-primary"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="search-form">
                            <form class="form-inline check-rooms secondary" action="{{url('/choose_bungalow')}}" method="get" >
                            {{ csrf_field() }}
                                <div class="form-group ">
                                    <label>Arrival Date</label><br>
                                    <input name="tgl_masuk" class="form-control datepicker" min="<?php echo date('m-d-Y'); ?>" data-theme="secondary">
                                </div>
                                <div class="form-group ">
                                    <label>Departure Date</label><br>
                                    <input name="tgl_keluar" class="form-control datepicker" data-theme="secondary">
                                </div>
                                <div class="form-group">
                                    <label>Adults</label><br>
                                    <select name="adults" class="form-control form-select secondary" >
                                        <option selected="selected">1</option>
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
                                <div class="form-group">
                                    <label >Children</label><br>
                                    <select name="children" class="form-control form-select secondary" >
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
                                <div class="form-group text-center">
                                    <button type="submit" class="button">Check Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-why-us">
        <h2 class="title text-center" >Why the Ombak Putih</h2>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="row">
            @foreach($whyus as $items)
                <div class="col-sm-4">
                    <div class="content-box ">
                        <img src="{{ asset("$items->path")}}" class="img-centered img-responsive" data-animate="fadeIn" alt="why-moon-1">
                        <h3 class="title">{{$items->nama}}</h3>
                        <p class="content">{!!$items->keterangan!!}</p>
                    </div>
                </div>
            @endforeach    
            </div>
        </div>
    </section>

    <section class="section-rooms">
        <h2 class="hidden">Rooms</h2>
        <div class="container">
            <div class="rooms-area">
                @foreach($bungalow_galeris as $items)
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="room-title-container" >
                            <h3 class="title">{{substr($items->nama,0,17)}}</h3>
                            <div class="title-room">{{substr($items->nama,17)}}</div>
                            <p class="content muted">{!!str_limit($items->keterangan)!!}</p>
                            <a href="{{url('bungalow/'.$items->bungalow_id)}}" class="link secondary">Continue Reading </a>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="{{ asset("$items->path")}}" class="img-centered img-responsive grayscale" data-animate="fadeInLeft" alt="room-1">
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="room-container" >
                            <div class="price-text">from <span class="price">IDR {{number_format($items->tarif_low,2)}}</span> / night</div>
                            <p class="room-desc">Only {{$items->jumlah_kamar}} rooms are available</p>
                            <p class="room-desc">Breakfast included</p>
                            <a href="booking-choose-date.html" class="button" >Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-offset-8 col-xs-offset-6 rooms-background bg-secondary"></div>
        </div>
    </section>

    <section class="section-facilities">
        <div class="text-center">
            <h2 class="title">Ombak Putih's Facilities</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="facilities-container">
            @php $sign=0; @endphp
            @foreach($fasilitas as $items)
            @php $sign+=1; @endphp
            @if($sign == 1)
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("$items->path")}}" style="width: 310px; height: 200px; object-fit: cover;" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">{{$items->nama}}</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    @elseif($sign == 2)
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("$items->path")}}" style="width: 310px; height: 200px; object-fit: cover;" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">{{$items->nama}}</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                </div>
            @elseif($sign==3)
                <div class="col-md-6">
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("$items->path")}}" style="width: 310px; height: 200px; object-fit: cover;" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">{{$items->nama}}</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                    @elseif($sign==4)
                    <div class="col-sm-6">
                        <div class="content-box">
                            <img src="{{ asset("$items->path")}}" style="width: 310px; height: 200px; object-fit: cover;" class="img-centered img-responsive" data-animate="zoomIn" alt="facility-1">
                            <div class="tri-up"></div>
                            <h3 class="title">{{$items->nama}}</h3>
                            <p class="content">Nullam ultrices, urna nec malesuada aliquam, neque massa auctor metus, vulputate tristique enim nulla quis ante. Sed vel leo turpis. In in tortor fringilla, scelerisque quam eu, aliquet massa.lorem.</p>
                        </div>
                    </div>
                </div>
            @endif    
            @endforeach
                <div class="col-xs-12 text-center">
                    <a href="{{url('/services')}}" class="button transparent" >See All Facilities</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials bg-primary">
        <div class="text-center">
            <h2 class="title">Testimonial</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="testimonial-slider swiper-container">
                <div class="swiper-wrapper">
                @if($testimoni->count()>=3)
                @foreach($testimoni->random(3) as $item)
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">{{ $item->konten }}</p>
                            <h4 class="name">{{ $item->nama_tamu}}</h4>
                            <div class="position">
                                @if($item->asal != 'Unknown')
                                Our Guest From {{ $item->asal }}
                                @else
                                Our Guest
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                @elseif($testimoni->count()==0)
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">There is no Testimoni yet</p>
                            <h4 class="name">Koos Buis</h4>
                            <div class="position">Admin</div>
                        </div>
                    </div>
                @else
                @foreach($testimoni as $item)
                    <!-- Testimonial 01 -->
                    <div class="swiper-slide">
                        <div class="testimonial-box">
                            <p class="text">{{ $item->konten }}</p>
                            <h4 class="name">{{ $item->nama_tamu}}</h4>
                            <div class="position">
                                @if($item->asal != 'Unknown')
                                Our Guest From {{ $item->asal }}
                                @else
                                Our Guest
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach  
                @endif
                </div>
            </div>
            <div class="testimonial-slider-page-controls"></div>
        </div>
    </section>

    <section class="section-from-blog ">
        <div class="text-center">
            <h2 class="title">From Our Blog</h2>
        </div>
        <div class="moon-divider"></div>
        <div class="container">
            <div class="row" >
                @php $i=0 @endphp
                @foreach($blog as $items)
                @php $i+=1 @endphp

                @if($i==1)
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box ">
                        <a href="{{ url('/blog/' . $items->id) }}">
                            <img src="{{asset($items->path)}}" style="width: 370px; height: 570px; object-fit: cover;" class="img-centered img-responsive" alt="blog-thumb-1">
                            <div class="blog-meta-box ">
                                <h3 class="blog-title">{{ $items->nama }}</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $items->created_at->format('d/M/Y')}}</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>@if($items->komentar->count()==1){{ $items->komentar->count()}} Comment @elseif($items->komentar->count()==0)0 @else{{$items->komentar->count()}} Comments @endif</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif

                @if($i==2)
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box">
                        <a href="{{ url('/blog/' . $items->id) }}">
                            <img src="{{ asset($items->path)}}" style="width: 370px; height: 270px; object-fit: cover;" class="img-centered img-responsive" alt="blog-thumb-2">
                            <div class="blog-meta-box">
                                <h3 class="blog-title">{{ $items->nama }}</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $items->created_at->format('d/M/Y')}}</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>@if($items->komentar->count()==1){{ $items->komentar->count()}} Comment @elseif($items->komentar->count()==0)0 @else{{$items->komentar->count()}} Comments @endif</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif

                @if($i==3)
                <div class="col-md-4 col-xs-6">
                    <div class="blog-box">
                        <a href="{{ url('/blog/' . $items->id) }}">
                            <img src="{{ asset($items->path)}}" style="width: 370px; height: 270px; object-fit: cover;" class="img-centered img-responsive" alt="blog-thumb-3">
                            <div class="blog-meta-box">
                                <h3 class="blog-title">{{ $items->nama }}</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $items->created_at->format('d/M/Y')}}</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>@if($items->komentar->count()==1){{ $items->komentar->count()}} Comment @elseif($items->komentar->count()==0)0 @else{{$items->komentar->count()}} Comments @endif</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif

                @if($i==4)
                <div class="col-md-8 col-xs-12">
                    <div class="blog-box wide">
                        <a href="{{ url('/blog/' . $items->id) }}">
                            <img src="{{ asset($items->path)}}" style="width: 780px; height: 270px; object-fit: cover;" class="img-centered img-responsive" alt="blog-thumb-4">
                            <div class="blog-meta-box ">
                                <h3 class="blog-title">{{ $items->nama }}</h3>
                                <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $items->created_at->format('d/M/Y')}}</span>
                                <span class="post-comments"><i class="fa fa-comments"></i>@if($items->komentar->count()==1){{ $items->komentar->count()}} Comment @elseif($items->komentar->count()==0)0 @else{{$items->komentar->count()}} Comments @endif</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif

                @endforeach
            </div>
            <div class="text-center">
                <a href="{{url ('blogs')}}" class="button transparent" >See All Entries</a>
            </div>
        </div>
    </section>
@endsection
