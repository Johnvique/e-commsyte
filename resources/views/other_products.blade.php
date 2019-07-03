@extends('layouts.frame')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Other Items</li>
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
                                    <a href="{{url('/#!')}}">Culteries <span class="badge pull-right">42</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">Knives</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Spoons</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Folks</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Plates</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Dishes</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Mugs</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Cups</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Thermo Flasks</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Jugs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{url('/#!')}}">Bags  <span class="badge pull-right">123</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">Laptop Bags</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Handbags</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Wallets</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Pouches</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">School Bags</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Travelling Bags</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/#!')}}">Accesories  <span class="badge pull-right">11</span></a>
                                    <ul>
                                        <li><a href="{{url('/#!')}}">Mobile Phones</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Radios Cassete</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Music Systems</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Desktop Computers & Laptops</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Solar Panels</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Gas Cookers</a>
                                        </li>
                                        <li><a href="{{url('/#!')}}">Water Dispensers</a>
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
                                            <input type="checkbox">Computers(10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Tecno SmartPhones (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Complete Electronics (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Lighting Bulbs (14)
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
                        <a href="{{url('/#')}}">
                            <img src="{{asset('img/banner.jpg')}}" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Other Products</>
                        <p>Other Products department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
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
                                    <h3><a href="{{url('/detail')}}">Heat Resistant Metallic Spoon</a></h3>
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
                                    <h3><a href="{{url('/detail')}}">Valuable Thermo Flask</a></h3>
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
                                    <h3><a href="{{url('/detail')}}">New Jersey Travelling Bag</a></h3>
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
                                    <h3><a href="{{url('/detail')}}">Scientific Calculator</a></h3>
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
                                    <h3><a href="{{url('/detail')}}">Complete Mathematical Set</a></h3>
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
                                    <h3><a href="{{url('/detail')}}">Set Book</a></h3>
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
