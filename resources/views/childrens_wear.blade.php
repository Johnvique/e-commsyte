@extends('layouts.frame')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Children</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Product Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="{{url('/#!')}}">School Items <span class="badge pull-right">42</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">Story Books</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Set</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Rubber</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Pencils</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">School Bag</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{url('/#!')}}">Clothes  <span class="badge pull-right">123</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">T-shirts</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Vests</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Watch</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Shirts</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Shoes</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Jackets</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Sweaters</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Shorts</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Pants</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/#!')}}">Recreational Items  <span class="badge pull-right">11</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">Toys</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Football</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Sport Shoes</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Balloons</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">School Watch (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Vest Tops (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Mobile Toys (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">School Uniforms (14)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour white"></span> White (14)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour green"></span> Green (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour red"></span> Red (10)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="{{url('/#!')}}">
                            <img src="{{asset('img/banner.jpg')}}" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Childrens' Choice</h1>
                        <p>In our Childrens' department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="{{url('/#!')}}" class="btn btn-default btn-sm btn-primary">12</a>  <a href="{{url('/#!')}}" class="btn btn-default btn-sm">24</a>  <a href="{{url('/#!')}}" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product1.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product1_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product1.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">Adidas Football</a></h3>
                                    <p class="price">ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product2_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product2.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">Skating Shoes</a></h3>
                                    <p class="price"><del>ksh.280</del> ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product3.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product3_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product3.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">HB drawing Pencils</a></h3>
                                    <p class="price">ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product3.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product3_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product3.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">White Indian School Bag</a></h3>
                                    <p class="price">ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product2_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product2.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">Black and White Games kit</a></h3>
                                    <p class="price">ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product1.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{url('/detail')}}">
                                                <img src="{{asset('img/product1_2.jpg')}}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/detail')}}" class="invisible">
                                    <img src="{{asset('img/product1.jpg')}}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{url('/detail')}}">Packet Erasers</a></h3>
                                    <p class="price">ksh.143.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="{{url('/#!')}}" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="{{url('/#!')}}">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="{{url('/#!')}}">2</a>
                            </li>
                            <li><a href="{{url('/#!')}}">3</a>
                            </li>
                            <li><a href="{{url('/#!')}}">4</a>
                            </li>
                            <li><a href="{{url('/#!')}}">5</a>
                            </li>
                            <li><a href="{{url('/#!')}}">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection