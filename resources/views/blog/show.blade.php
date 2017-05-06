@extends('layouts.main')
@section('title','Blog')
@section('content')
@include('sweet::alert')
@if (count($errors) > 0)
    <script type="text/javascript"> sweetAlert("Failed to Sent Your Message", "Check Your Comment Form" , "error"); </script>
@endif
    <section class="section-breadcrumb">
        <h2 class="title">Up-to-date with us</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Blog > {{$blog->judul}}</span></span>
        </div>
    </section>

    <section class="section-blog">
        <h2 class="hidden">Blog section</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="hidden">Blog content</h3>
                    <div class="blog-container">
                        <div class="row">
                        
                            <div class="col-sm-5">
                                <div>
                                    <img src="{{asset($blog->path)}}" class="img-responsive" alt="post-thumb-1" data-animate="fadeIn" >
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="post-box">
                                    <h4 class="post-category"><a href="{{ url('/blog/category/' . $blog->kategori) }}">{{ $blog->kategori }}</a></h4>
                                    <h4 class="post-title"><a href="{{ url('/blog/' . $blog->blog_id) }}">{{ $blog->judul}} </a></h4>
                                    <div class="post-meta">
                                        <span class="post-date"><i class="fa fa-calendar-o"></i> 
                                            @php $date=strtotime($blog->created); echo date('M jS, Y',$date); @endphp
                                        </span>
                                        <span class="post-comments"><i class="fa fa-comments"></i>
                                            @if($jumlahkomentar ==1 ){{ $jumlahkomentar }} Comment 
                                            @elseif($jumlahkomentar>1){{$jumlahkomentar}} Comments 
                                            @else{{$jumlahkomentar}}
                                            @endif
                                        </span>
                                        <span class="post-author-name"><i class="fa fa-user"></i>{{ $user->name }}</span>
                                    </div>
                                    <div class="post-social-links">
                                        <div class="header">Share this post</div>
                                        <div class="icons">
                                            <a class="social-link" href=""><i class="fa fa-facebook"></i></a>
                                            <a id="twitter" class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                                            <a id="google" class="social-link" href="#"><i class="fa fa-google-plus"></i></a>
                                            <a id="pinterest" class="social-link" href="#"><i class="fa fa-pinterest-p"></i></a>
                                            <a id="instagram" class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="post-content">
                                {!!($blog->konten)!!}
                            </div>
                        
                        <div class="post-tags">
                            Tags: <em>{{ $blog->kategori }}</em>
                        </div>

                        <div class="comments-container">
                            <h3 class="subtitle">There are 
                            @if($jumlahkomentar == 1){{$jumlahkomentar}} comment on this post
                            @elseif($jumlahkomentar > 1){{$jumlahkomentar}} comments on this post
                            @else {{$jumlahkomentar}}  comment on this post
                            @endif </h3>
                            @foreach($komentar as $items)
                            <div class="comment-box">
                                <img src="{{ asset('/images/gallery/user.png') }}" style="width: 75px;" class="img-responsive" alt="avatar-2">
                                <div class="comment-info">
                                    <h4 class="comment-name">{{$items->nama}}</h4>
                                    <div class="comment-date">{{ $items->created_at->format('d/M/Y')}}</div>
                                    <p class="content">{{ $items->konten }}</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="page-controls">
                        @if(isset($komentar))
                            @if($komentar->currentPage() > 1)
                               <a href="{{ $komentar->previousPageUrl() }}" class="pull-right">Newer entries <i class="glyphicon glyphicon-arrow-right"></i></a> 
                            @endif

                            @if($komentar->hasMorePages())
                                <a href="{{ $komentar->nextPageUrl() }}" class="pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Older entries </a>
                            @endif
                        @endif
                        </div>
                        </div>
                        <div class="leave-comment-container">
                            <div class="subtitle">Leave a comment</div>
                            {!! Form::open(['url' => '/komentar','id'=>'focus', 'class' => 'comment-form form-horizontal', 'files' => true]) !!}
                                <div class="form-group">
                                    <label class="col-sm-2" >Name *</label>
                                    <div class="col-sm-6">
                                        <input name="nama" type="text" class="form-control" placeholder="John Doe" autofocus>
                                        {!! $errors->first('nama', '<p style="color: red;" >:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Email *</label>
                                    <div class="col-sm-6">
                                        <input name="email" type="text" class="form-control" placeholder="johndoe@email.com" >
                                        {!! $errors->first('email', '<p style="color: red;" >:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Website </label>
                                    <div class="col-sm-6">
                                        <input name="website" type="text" class="form-control" placeholder="http://www.website.com">
                                        {!! $errors->first('website', '<p style="color: red;" >:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Message *</label>
                                    <div class="col-sm-10">
                                        <textarea name="konten" class="form-control" placeholder="Write your comment here" ></textarea>
                                        {!! $errors->first('konten', '<p style="color: red;" >:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="button">Post Comment</button>
                                    </div>
                                </div>
                                <input value="{{$blog->id}}" type="hidden" name="blog_id">
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="hidden">Blog sidebar</h3>
                    <div class="widget-box ">
                        <h4 class="widget-title">Search this blog</h4>
                        <hr>
                        <div class="search-box">
                            <form action="{{ url('/blog/search') }}" method="POST" role="search">
                            {{ csrf_field() }}
                                <div class="input-wrapper"><input type="text" id="keyword" name="keyword" placeholder="Enter keyword"></div>
                                <button ><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget-box ">
                        <h4 class="widget-title">Recent Posts</h4>
                        <hr>
                        @if(isset($recent))
                        @foreach($recent->slice(0,3) as $blog)
                        <div class="row recent-post-row">
                            <a href="{{ url('/blog/' . $blog->id) }}">
                                <img src="{{asset($blog->path)}}" style="object-fit: cover;" alt="post-thumb-sm-1" data-animate="fadeIn" data-delay="0">
                                <p class="content">{{ $blog->nama }}</p>
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="widget-box ">
                        <h4 class="widget-title">Categories</h4>
                        <hr>
                        <ul class="categories">
                        @if(isset($kategori))
                        @foreach($kategori as $items)
                            <li><a href="{{ url('/blog/category/' . $items->nama) }}">{{ $items->nama }}</a></li>
                        @endforeach
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css"> p { text-align: justify; }</style>
@endsection