@extends('layouts.frame')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">
                    <ul class="breadcrumb">

                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>
                </div>

                <!-- *** LEFT COLUMN ***
		     _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">

                    <ul class="breadcrumb">

                        <li><a href="{{url('/blog')}}">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>


                    <div class="box">

                        <h1>Blog category name</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

                    </div>

                    <div class="post">
                        <h2><a href="post.html">Fashion now</a></h2>
                        <p class="author-category">By <a href="{{url('/#')}}">John Slim</a> in <a href="">Fashion and style</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="{{url('/post')}}"><i class="fa fa-calendar-o"></i> feb 20, 2019</a>
                            <a href="{{url('/post')}}"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="{{url('/post')}}">
                                <img src="{{asset('img/blog2.jpg')}}" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="{{url('/post')}}" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>


                    <div class="post">
                        <h2><a href="{{url('/post')}}">Who is who - example blog post</a></h2>
                        <p class="author-category">By <a href="{{url('/#')}}">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="{{url('/post')}}"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="{{url('/post')}}"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="{{url('/post')}}">
                                <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="{{url('/post')}}" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>

                    <ul class="pager">
                        <li class="previous"><a href="{{url('/#')}}">&larr; Older</a>
                        </li>
                        <li class="next disabled"><a href="{{url('/#')}}">Newer &rarr;</a>
                        </li>
                    </ul>



                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Blog</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="{{url('/blog')}}">About us</a>
                                </li>
                                <li class="active">
                                    <a href="{{url('/blog')}}">Fashion</a>
                                </li>
                                <li>
                                    <a href="{{url('/blog')}}">News and gossip</a>
                                </li>
                                <li>
                                    <a href="{{url('/blog')}}">Design</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    <div class="banner">
                        <a href="{{url('/#')}}">
                            <img src="{{asset('img/banner.jpg')}}" alt="sales 2019" class="img-responsive">
                        </a>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection