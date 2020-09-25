@extends('user.layout.layout')
@section('content')

    <section class="shopping-cart">
        <div class="container">
            <div class="col-lg-12 box_member">
            <h5>Get 15% off day PLUST an extra 15% off all orders when you become a member!</h5>
            </div>
            <div class="row shopping-content">
                <div class="col-lg-12">
                    <div class="row">
                        <h1>Shopping Cart</h1>&emsp;
                        <h5 style="line-height: 3;">(3 classes)</h5>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <ul class="shopping-list">
                        <li class="shopping-item">
                            <div class="row shopping-box">
                                <div class="col-lg-3 col-md-4">
                                    <img src="img/shoppingcart_1.jpg" width="100%">
                                </div>
                                <div class="col-lg-5 col-md-8 product-name">
                                    <a href="#"><h5>Lorem ipsum dolor sit amet eget dolor</h5></a>
                                    <div class="row">
                                        <a href="#" class="col-lg-4 col-md-5 col-3"><h7>Remove</h7></a>
                                        <a href="#" class="col-lg-8 col-md-7 col-9" style="border-left: 1px solid #493223; padding-left: 11%;"><h7>Move to Wishlist</h7></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 price">
                                    <h6>Price: <span>$40.00</span></h6>
                                </div>
                            </div>
                        </li>
                        <li class="shopping-item">
                            <div class="row shopping-box">
                                <div class="col-lg-3 col-md-4">
                                    <img src="img/shoppingcart_2.jpg" width="100%">
                                </div>
                                <div class="col-lg-5 col-md-8 product-name">
                                    <a href="#"><h5>Lorem ipsum dolor sit amet eget dolor</h5></a>
                                    <div class="row">
                                        <a href="#" class="col-lg-4 col-md-5 col-3"><h7>Remove</h7></a>
                                        <a href="#" class="col-lg-8 col-md-7 col-9" style="border-left: 1px solid #493223; padding-left: 11%;"><h7>Move to Wishlist</h7></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 price">
                                    <h6>Sale price: <span>$19.99</span></h6>
                                    <h6>Original price: <span class="sale">$40.00</span></h6>
                                </div>
                            </div>
                        </li>
                        <li class="shopping-item">
                            <div class="row shopping-box">
                                <div class="col-lg-3 col-md-4">
                                    <img src="img/shoppingcart_3.jpg" width="100%">
                                </div>
                                <div class="col-lg-5 col-md-8 product-name">
                                    <a href="#"><h5>Lorem ipsum dolor sit amet eget dolor</h5></a>
                                    <div class="row">
                                        <a href="#" class="col-lg-4 col-md-5 col-3"><h7>Remove</h7></a>
                                        <a href="#" class="col-lg-8 col-md-7 col-9" style="border-left: 1px solid #493223; padding-left: 11%;"><h7>Move to Wishlist</h7></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 price">
                                    <h6>Sale price: <span>$19.99</span></h6>
                                    <h6>Original price: <span class="sale">$40.00</span></h6>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="col-lg-12 subtotal">
                        <h5>Subtotal: $79.98</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 pt-4">
                <button class="col-lg-12 btn-checkout" onclick="window.location.href='checkout.php'" type="button">checkout</button>

                <form class="form-inline form-coupon">
                    <h5 class="mb-4">Have a coupon code?</h5>
                    <input id="coupon" class="form-control col-lg-8 col-md-7 col-8" type="text" placeholder="ENTER CODE..." aria-label="Subscribe">
                    <button id="btn-apply" class="btn btn-outline-success col-lg-4 col-md-5 col-4" type="submit">Apply</button>
                </form>
                <div class="order-list">
                    <ul class="col-lg-12">
                        <h5 class="mb-3" style="text-transform: none;">Order Summary</h5>
                        <li class="row list-item">
                            <h5 class="col-lg-6 col-md-6 col-6">subtotal:</h5>
                            <span class="col-lg-6 col-md-6 col-6">$79.98</span>
                        </li>
                        <li class="row list-item">
                            <h5 class="col-lg-6 col-md-6 col-6" style="font-family: 'font-thin'; font-weight: bold;">tax:</h5>
                            <span class="col-lg-6 col-md-6 col-6" style="font-family: 'font-thin'; font-weight: bold; ">$0.00</span>
                        </li>
                    </ul>
                    <div class="col-lg-12 total">
                        <div class="row">
                            <h5 class="col-lg-6 col-md-6 col-6">total:</h5>
                            <span class="col-lg-6 col-md-6 col-6">$79.98</span>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>

@endsection
