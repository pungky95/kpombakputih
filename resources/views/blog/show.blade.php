@extends('layouts.navigation')
@section('title','Blog')
@section('nav')

    <section class="section-breadcrumb">
        <h2 class="title">Up-to-date with us</h2>
        <div class="breadcrumb">
            You are here: <span class="slug"><span class="home"> Home </span> <span class="page"> > Blog</span></span>
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
                                    <img src="images/blog/post-thumb-1.jpg" class="img-responsive" alt="post-thumb-1" data-animate="fadeIn" >
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="post-box">
                                    <h4 class="post-category"><a href="#"></a>{{ $blog->katagori }}</h4>
                                    <h4 class="post-title"><a href="#">{{ $blog->nama}} </a></h4>
                                    <div class="post-meta">
                                        <span class="post-date"><i class="fa fa-calendar-o"></i>May 21st, 2015</span>
                                        <span class="post-comments"><i class="fa fa-comments"></i>5 comments</span>
                                        <span class="post-author-name"><i class="fa fa-user"></i>{{ $user->name }}</span>
                                    </div>
                                    <div class="post-social-links">
                                        <div class="header">Share this post</div>
                                        <div class="icons">
                                            <a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                                            <a class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                                            <a class="social-link" href="#"><i class="fa fa-google-plus"></i></a>
                                            <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i></a>
                                            <a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="post-content">
                                <p class="content"> &nbsp;&nbsp;&nbsp;&nbsp; {{ $blog->konten }} </p>
                                <p class="content highlight">{{ $blog->qoute }}</p>
                                <p class="content"> &nbsp;&nbsp;&nbsp;&nbsp; {{ $blog->konten1 }}</p>
                                
                         
                            </div>
                        
                        <div class="post-tags">
                            Tags: <em>{{ $blog->kategori }}</em>
                        </div>
                        <div class="post-author">
                            <img src="images/blog/author.png" class="img-responsive" alt="author">
                            <div class="author-info">
                                <h4 class="author-name">{{ $user->name }}</h4>
                                <p class="content">Integer ultricies nisi sed augue interdum porta. Vestibulum ac aliquam risus, ac dictum magna. Fusce lacus arcu, facilisis eu odio nec, varius vestibulum sem. Ut ornare est et sollicitudin vehicula. Nulla venenatis auctor quam, ac porta lectus dictum in ac dictum magna.</p>
                                <div class="icons">
                                    <a class="social-link" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="social-link" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="social-link" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a class="social-link" href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="page-controls">
                            <a href="#" class="pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Previous Post</a>
                            <a href="#" class="pull-right">Next Post <i class="glyphicon glyphicon-arrow-right"></i></a>
                        </div>

                        <div class="comments-container">
                            <h3 class="subtitle">There are 3 comments on this post</h3>
                            <div class="comment-box">
                                <img src="images/blog/avatar-2.png" class="img-responsive" alt="avatar-2">
                                <div class="comment-info">
                                    <h4 class="comment-name">Sean Dean</h4>
                                    <div class="comment-date">May 28th, 2015 at 1:39 pm</div>
                                    <p class="content">Nam quis tristique orci. Nam nec dapibus velit, quis vulputate eros. Nulla commodo viverra magna vel molestie. Nam a eleifend leo. Maecenas fermentum, nibh ultrices rhoncus tempus, libero ligula bibendum quam, in laoreet felis velit tincidunt sem. Vestibulum ante ipsum primis in faucibus.</p>
                                </div>
                            </div>

                            <div class="comment-box level2">
                                <img src="images/blog/avatar-1.png" class="img-responsive" alt="avatar-1">
                                <div class="comment-info">
                                    <h4 class="comment-name">Charles Harris</h4>
                                    <div class="comment-date">May 28th, 2015 at 1:39 pm</div>
                                    <p class="content">Vestibulum elementum mauris turpis, et posuere nulla faucibus vel. Sed sollicitudin ligula odio, sit amet ullamcorper lacus placerat non. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                </div>
                            </div>

                            <div class="comment-box">
                                <img src="images/blog/avatar-3.png" class="img-responsive" alt="avatar-3">
                                <div class="comment-info">
                                    <h4 class="comment-name">Thomas Robertson</h4>
                                    <div class="comment-date">May 28th, 2015 at 1:39 pm</div>
                                    <p class="content">Nam quis tristique orci. Nam nec dapibus velit, quis vulputate eros. Nulla commodo viverra magna vel molestie. Nam a eleifend leo. Maecenas fermentum, nibh ultrices rhoncus tempus, libero ligula bibendum quam, in laoreet felis velit tincidunt sem. Vestibulum ante ipsum primis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment-container">
                            <div class="subtitle">Leave a comment</div>
                            <form class="comment-form form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-sm-2" >Name *</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Email *</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Website *</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2" >Message *</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="button">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="hidden">Blog sidebar</h3>
                    <div class="widget-box ">
                        <h4 class="widget-title">Search this blog</h4>
                        <hr>
                        <div class="search-box">
                            <div class="input-wrapper"><input type="text" id="keyword" name="keyword" placeholder="Enter keyword"></div>
                            <button ><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="widget-box ">
                        <h4 class="widget-title">Recent Posts</h4>
                        <hr>
                        <div class="row recent-post-row">
                            <a href="#">
                                <img src="images/blog/post-thumb-sm-1.jpg" alt="post-thumb-sm-1" data-animate="fadeIn" data-delay="0">
                                <p class="content">Sed nulla ipsum porttitor pharetra tortor</p>
                            </a>
                        </div>
                        <div class="row recent-post-row">
                            <a href="#">
                                <img src="images/blog/post-thumb-sm-2.jpg" alt="post-thumb-sm-2" data-animate="fadeIn" data-delay="100">
                                <p class="content">Sed nulla ipsum porttitor pharetra tortor</p>
                            </a>
                        </div>
                        <div class="row recent-post-row">
                            <a href="#">
                                <img src="images/blog/post-thumb-sm-3.jpg" alt="post-thumb-sm-3" data-animate="fadeIn" data-delay="200">
                                <p class="content">Sed nulla ipsum porttitor pharetra tortor</p>
                            </a>
                        </div>
                    </div>
                    <div class="widget-box ">
                        <h4 class="widget-title">Categories</h4>
                        <hr>
                        <ul class="categories">
                            <li><a href="#">Hotel Reviews</a></li>
                            <li class="current"><a href="#">Travel Tips</a></li>
                            <li><a href="#">Around the world</a></li>
                            <li><a href="#">Facilities</a></li>
                            <li><a href="#">Travel and Food</a></li>
                            <li><a href="#">Miscellaneous</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection