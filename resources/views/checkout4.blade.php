@extends('layouts.frame')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li>Checkout - Order review</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="{{url('/checkout4')}}">
                            <h1>Checkout - Order review</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="{{url('/checkout1')}}"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="{{url('/checkout2')}}"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li><a href="{{url('/checkout3')}}"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="active"><a href="{{url('/#')}}"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{url('/#')}}">
                                                        <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="{{url('/#')}}">White Blouse Armani</a>
                                                </td>
                                                <td>2</td>
                                                <td>ksh.123.00</td>
                                                <td>ksh.0.00</td>
                                                <td>ksh.246.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="{{url('/#')}}">
                                                        <img src="{{asset('img/basketsquare.jpg')}}" alt="Black Blouse Armani">
                                                    </a>
                                                </td>
                                                <td><a href="{{url('/#')}}">Black Blouse Armani</a>
                                                </td>
                                                <td>1</td>
                                                <td>ksh.200.00</td>
                                                <td>ksh.0.00</td>
                                                <td>ksh.200.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th>ksh.400.00</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{url('checkout3')}}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Payment method</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Place an order<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>ksh.446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>ksh.100.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>ksh.0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>ksh.456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection