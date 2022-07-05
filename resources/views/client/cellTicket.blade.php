@extends('client.accountLay')
@section('account')

    @if(Auth::user()->tickets < 50)
        <div class="alert alert-danger"><p>کاربر عزیز حداقل موجودی لازم برای فروش  <b>50</b> عدد می‌باشد.</p></div>

    @else
        <div class="container">
            <div class="nk-gap-4"></div>

        <div class="nk-store nk-store-cart">
            <div class="nk-box-3 bg-dark-1">
                <div class="table-responsive">
                    <!-- START: Products in Cart -->
                    <table class="table nk-store-cart-products">
                        <tbody>

                        <tr>
                            <td class="nk-product-cart-thumb">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="{{asset('assets/images/')}}" alt="p4game" class="nk-img">
                                </a>
                            </td>
                            <td class="nk-product-cart-title">
                                <h2 class="nk-post-title h5">
                                    <a href="#">Men Tshirt</a>
                                </h2>
                            </td>
                            <td class="nk-product-cart-price">$67.00</td>
                            <td class="nk-product-cart-quantity">
                                <div class="nk-form-control-number">
                                    <input type="number" min="1" max="14" name="quantity" value="1" class="form-control">
                                </div>
                            </td>
                            <td class="nk-product-cart-total">
                                $67.00
                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-trash-b"></span></a></td>
                        </tr>


                        </tbody>
                    </table>
                    <!-- END: Products in Cart -->
                </div>
            </div>

            <div class="nk-gap-3"></div>
            <div class="row vertical-gap lg-gap">
                <div class="col-md-6">

                <!-- START: Calculate Shipping -->
                    <div class="nk-box-3 bg-dark-1">
                        <h3 class="nk-title h4 text-center">Calculate Shipping</h3>
                        <div class="nk-gap-2"></div>
                        <form action="#" class="nk-form nk-form-style-1">
                            <select name="country" class="form-control">
                                <option value="">Select a country...</option>
                            </select>

                            <div class="nk-gap-2"></div>
                            <div class="row vertical-gap">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="state" placeholder="State">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="zip" placeholder="Zip">
                                </div>
                            </div>

                            <div class="nk-gap-2"></div>
                            <a class="nk-btn nk-btn-lg link-effect-4 float-right" href="#"><span class="icon"><span class="ion-refresh"></span></span> Update Totals</a>
                        </form>
                    </div>
                <!-- END: Calculate Shipping -->

                </div>
                <div class="col-md-6">
                    <div class="nk-box-3 bg-dark-1">

                    <!-- START: Cart Totals -->
                        <h3 class="nk-title h4 text-center">Cart Totals</h3>
                        <table class="table nk-store-cart-totals">
                            <tbody>
                            <tr class="nk-store-cart-totals-subtotal">
                                <td>
                                    Subtotal
                                </td>
                                <td>
                                    $317.00
                                </td>
                            </tr>
                            <tr class="nk-store-cart-totals-shipping">
                                <td>
                                    Shipping
                                </td>
                                <td>
                                    Free Shipping
                                </td>
                            </tr>
                            <tr class="nk-store-cart-totals-total">
                                <td>
                                    Total
                                </td>
                                <td>
                                    $317.00
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <!-- END: Cart Totals -->

                    </div>
                </div>
            </div>

            <div class="nk-gap-2"></div>
            <a class="nk-btn nk-btn-lg link-effect-4 float-right" href="store-checkout.html">Proceed to Checkout</a>
            <div class="clearfix"></div>
        </div>
        @endif

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>





@endsection
{{--<div class="col-lg-9">--}}
{{--    <div class="nk-box-3 bg-dark-1">--}}
{{--        <h2 class="nk-title">فروش تیکت</h2>--}}
{{--        <div class="nk-gap-1"></div>--}}

{{--        <div class="table-responsive">--}}
{{--            <table class="table table-bordered">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Order</th>--}}
{{--                    <th>Date</th>--}}
{{--                    <th>Status</th>--}}
{{--                    <th>Total</th>--}}
{{--                    <th>&nbsp;</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr class="order">--}}
{{--                    <td><a href="#">#24</a></td>--}}
{{--                    <td><time datetime="2017-07-23">23 July 2017</time></td>--}}
{{--                    <td>Processing</td>--}}
{{--                    <td>$104.99</td>--}}
{{--                    <td><a href="#" class="nk-btn link-effect-4">View</a></td>--}}
{{--                </tr>--}}
{{--                <tr class="order">--}}
{{--                    <td><a href="#">#18</a></td>--}}
{{--                    <td><time datetime="2017-07-23">16 July 2017</time></td>--}}
{{--                    <td>Shipped</td>--}}
{{--                    <td>$250.00</td>--}}
{{--                    <td><a href="#" class="nk-btn link-effect-4">View</a></td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
