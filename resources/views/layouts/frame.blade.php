<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Smart Super-Retail
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{asset('css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <script src="{{asset('js/respond.min.js')}}"></script>

    <link rel="shortcut icon" href="{{asset('favicon.png')}}">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="{{url('/#')}}" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="{{url('/register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('customer-orders')}}" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="{{url('/register')}}"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <em><a class="navbar-brand  text-white" href="{{url('http://smartsuperelec.co.ke')}}">
  <h3 style="font-weight:bold;"><span style="color: #009599">Smart Super-Retail</h3></a></em>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="{{url('basket')}}">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="{{url('/mens_wear')}}">Men Items</a></li> 
                           <li><a href="{{url('/womens_wear')}}">Women Items</a></li>
                           <li><a href="{{url('/childrens_wear')}}">Childrens Items</a></li>
                           <li><a href="{{url('/other_products')}}">Other Products</a></li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Shop <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/products_category')}}">Products Category</a></li>
                            <li><a href="{{url('/detail')}}">Products Details</a></li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Order <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/basket')}}">Cart</a></li>
                            <li><a href="{{url('/checkout1')}}">Innitial Step</a></li>
                            <li><a href="{{url('/checkout2')}}">Second Step</a></li>
                            <li><a href="{{url('/checkout3')}}">Third Step</a></li>
                            <li><a href="{{url('/checkout4')}}">Final Step</a></li>
                        </ul>
                    </li>

                     <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/blog')}}">Main Blog</a></li>
                            <li><a href="{{url('/post')}}">Blog Posts</a></li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Profile <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/register')}}">User Account</a></li>
                            <li><a href="{{url('/customer-orders')}}">User Order History</a></li>
                            <li><a href="{{url('/customer-order')}}">User Order Details</a></li>
                        </ul>
                    </li>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="{{url('/basket')}}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

     @yield('content')


    <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="{{url('/contact')}}">Contact us</a>
                            </li>
                            <li><a href="{{url('about')}}">About us</a>
                            </li>
                            <li><a href="{{url('/#!')}}">Terms and conditions</a>
                            </li>
                            <li><a href="{{url('/faq')}}">FAQ</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="{{url('/register')}}">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Products categories</h4>

                        <ul>
                            <li><a href="{{url('/mens_wear')}}">Men Items</a>
                            </li>
                            <li><a href="{{url('/womens_wear')}}">Women Items</a>
                            </li>
                            <li><a href="{{url('/childrens_wear')}}">Children Items</a>
                            </li>
                            <li><a href="{{url('/other_products')}}">Other Items</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Smart Super-Shop Ltd.</strong>
                            <br>Thousand Street Avenue
                            <br>P.O Box,
                            <br>236-40222
                            <br>Oyugis
                            <br>
                            <strong>Kenya</strong>
                        </p>

                        <a href="{{url('/contact')}}">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Send!</button>

            </span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="linkedin external" data-animate-hover="shake"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2019 Smart Super-Retail LTD.All Right Reserved.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Developed by <a href="https://bootstraptemple.com">Bootstrap Temple</a>
                         <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>


</body>

</html>