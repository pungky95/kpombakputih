@extends('layouts.main')
@section('title','Blog')
@section('content')

    <section class="section-breadcrumb">
        <h2 class="title">Up-to-date with us</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Blog > {{$blog->nama}}</span></span>
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
                                    <img src="{{asset($blog->foto)}}" class="img-responsive" alt="post-thumb-1" data-animate="fadeIn" >
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="post-box">
                                    <h4 class="post-category"><a href="#">{{ $blog->kategori }}</a></h4>
                                    <h4 class="post-title"><a href="#">{{ $blog->nama}} </a></h4>
                                    <div class="post-meta">
                                        <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $blog->created_at->format('d/M/Y')}}</span>
                                        <span class="post-comments"><i class="fa fa-comments"></i>@if($blog->komentar->count()==1){{ $blog->komentar->count()}} Comment @elseif($blog->komentar->count()==0)0 @else{{$blog->komentar->count()}} Comments @endif</span>
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
                            <h3 class="subtitle">There are @if($blog->komentar->count()==1){{ $blog->komentar->count()}} @elseif($blog->komentar->count()==0)no @else{{$blog->komentar->count()}} @endif comments on this post</h3>
                            @foreach($komentar as $item)
                            <div class="comment-box">
                                <img src="images/blog/avatar-2.png" class="img-responsive" alt="avatar-2">
                                <div class="comment-info">
                                    <h4 class="comment-name">{{$item->nama}}</h4>
                                    <div class="comment-date">{{ $item->created_at->format('d/M/Y')}}</div>
                                    <p class="content">{{ $item->konten }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="leave-comment-container">
                            <div class="subtitle">Leave a comment</div>
                            {!! Form::open(['url' => '/komentar', 'class' => 'comment-form form-horizontal', 'files' => true]) !!}
                                <div class="form-group">
                                    <label class="col-sm-2" >Name *</label>
                                    <div class="col-sm-6">
                                        <input name="nama" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Email *</label>
                                    <div class="col-sm-6">
                                        <input name="email" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Website </label>
                                    <div class="col-sm-6">
                                        <input name="Website" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Message *</label>
                                    <div class="col-sm-10">
                                        <textarea name="konten" class="form-control" ></textarea>
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
                        @foreach($recent->slice(0,3) as $item)
                        <div class="row recent-post-row">
                            <a href="{{ url('/blog/' . $item->id) }}">
                                <img src="{{asset($item->foto)}}" alt="post-thumb-sm-1" data-animate="fadeIn" data-delay="0">
                                <p class="content">{{ $item->nama }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="widget-box ">
                        <h4 class="widget-title">Categories</h4>
                        <hr>
                        <ul class="categories">
                        @foreach($kategori as $item)
                            <li><a href="{{ url('/blog/category/' . $item->kategori) }}">{{ $item->kategori }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css"> p { text-align: justify; }</style>

@endsection