@extends('layouts.frame')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Full Products Category</li>
                    </ul>

                    <div class="box">
                        <h1>Full Category</h1>
                        <p>In our Full Products department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
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

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">Fur coat with very but very very long name</a></h3>
                                    <p class="price">ksh.450.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">White Blouse Armani</a></h3>
                                    <p class="price"><del>ksh.350</del> ksh.300.00</p>
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

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">Black Blouse Versace</a></h3>
                                    <p class="price">ksh.600.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">Black Blouse Versace</a></h3>
                                    <p class="price">ksh.540.00</p>
                                    <p class="buttons">
                                        <a href="{{url('/detail')}}" class="btn btn-default">View detail</a>
                                        <a href="{{url('/basket')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">White Blouse Versace</a></h3>
                                    <p class="price">ks.150.00</p>
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

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{url('detail')}}">
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
                                    <h3><a href="{{url('/detail')}}">Fur coat</a></h3>
                                    <p class="price">ksh.430.00</p>
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

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">White Blouse Armani</a></h3>
                                    <p class="price"><del>ksh.280</del> ksh.140.00</p>
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

                        <div class="col-md-3 col-sm-4">
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
                                    <h3><a href="{{url('/detail')}}">Black Blouse Versace</a></h3>
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

                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="{{url('/#')}}" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="{{url('/#')}}">&laquo;</a>
                            </li>
                            <li class="active"><a href="{{url('/#')}}">1</a>
                            </li>
                            <li><a href="{{url('/#')}}">2</a>
                            </li>
                            <li><a href="{{url('/#')}}">3</a>
                            </li>
                            <li><a href="{{url('/#')}}">4</a>
                            </li>
                            <li><a href="{{url('/#')}}">5</a>
                            </li>
                            <li><a href="{{url('/#')}}">&raquo;</a>
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