@extends('layouts.main')
@section('title','Blog')
@section('content')

    <section class="section-breadcrumb">
        <h2 class="title" >Up-to-date with us</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Blog</span></span>
        </div>
    </section>

    <section class="section-blog">
        <h2 class="hidden">Blog section</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="hidden">Blog list</h3>
                    <div class="list-container">
                        @if(isset($blog))
                        @foreach($blog as $item)
                        <div class="post-row">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div>
                                        <img src="{{asset($item->path)}}" class="img-responsive" style="object-fit: cover" data-animate="fadeIn" alt="post-thumb-1">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="post-box">
                                        <div class="post-category"><a href="{{ url('/blog/category/' . $item->kategori->nama) }}">{{$item->kategori->nama}}</a></div>
                                         <h4 class="post-title"><a href="{{ url('/blog/' . $item->id) }}">{{ $item->nama }}</a></h4>
                                        <div class="post-meta">
                                            <span class="post-date"><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('d/M/Y')}} </span>
                                        </div>
                                    {!!str_limit($item->konten)!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @if(count($blog)<=0)
                        <div class="post-row">
                        <div class="col-sm-7">
                        <h4 class="post-title">Sorry There is No Post</h4>
                        </div>
                        </div>
                        @endif
                        <div class="page-controls">
                        @if(isset($blog))
                            @if($blog->currentPage() > 1)
                               <a href="{{ $blog->previousPageUrl() }}" class="pull-right">Newer entries <i class="glyphicon glyphicon-arrow-right"></i></a> 
                            @endif

                            @if($blog->hasMorePages())
                                <a href="{{ $blog->nextPageUrl() }}" class="pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Older entries </a>
                            @endif
                        @endif
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
                        @if(isset($blog))
                        @foreach($blog->slice(0,3) as $item)
                        <div class="row recent-post-row">
                            <a href="{{ url('/blog/' . $item->id) }}">
                                <img src="{{asset($item->path)}}" style="object-fit: cover;" alt="post-thumb-sm-1" data-animate="fadeIn" data-delay="0">
                                <p class="content">{{ $item->nama }}</p>
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
                        @foreach($kategori as $item)
                            <li><a href="{{ url('/blog/category/' . $item->nama) }}">{{ $item->nama }}</a></li>
                        @endforeach
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection