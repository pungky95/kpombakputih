@extends('layouts.navigation')
@section('title','Blog')
@section('nav') 

    <section class="section-breadcrumb">
        <h2 class="title" >Search Result</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Blog > Search Result</span></span>
        </div>
    </section>

    <section class="section-blog">
        <h2 class="hidden">Blog section</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="hidden">Blog list</h3>
                    <div class="list-container">
                        <div class="post-row">
                        @if(isset($details))  
                            @foreach($details as $item)
                            <div class="row">
                                <div class="col-sm-5">
                                    <div>
                                        <img src="images/blog/post-thumb-1.jpg" class="img-responsive" data-animate="fadeIn" alt="post-thumb-1">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="post-box">
                                        <h4 class="post-title"><a href="blog-single.html">{{ $item->nama }}</a></h4>
                                        <div class="post-meta">
                                            <span class="post-date"><i class="fa fa-calendar-o"></i> {{ $item->created_at->format('d/M/Y')}} </span>
                                            <!-- <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span> -->
                                        </div>
                                        <p class="content">{{$item->konten}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else <h4>No Details found. Try to search again !</h4>
                        @endif
                        </div>
                        <div class="page-controls">
                        @if(isset($details))
                            @if($details->currentPage() > 1)
                               <a href="{{ $details->previousPageUrl() }}" class="pull-right">Newer entries <i class="glyphicon glyphicon-arrow-right"></i></a> 
                            @endif

                            @if($details->hasMorePages())
                                <a href="{{ $details->nextPageUrl() }}" class="pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Older entries </a>
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
                            <form action="search" method="POST" role="search">
                            {{ csrf_field() }}
                                <div class="input-wrapper"><input type="text" id="keyword" name="keyword" placeholder="Enter keyword"></div>
                                <button ><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection