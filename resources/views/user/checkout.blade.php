@extends('user.layout.layout')
@section('content')

    <div class="container-fluid" style="background-color: #f5f2f0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12 checkout_title_box">
                        <div class="col-lg-12">
                            <h4>Secure Checkout</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row checkout_box_radio">
                                <h5>Get $15 off today PLUS unlimited access to 1,300+ classes when you become a member!</h5>
                                <div class="col-lg-12 checkout_checking">
                                    <input type="radio"><h6>Continue Checking Out</h6>
                                </div>
                                <div class="col-lg-12 checkout_monthly">
                                    <input type="radio"><h6>Choose Monthly Plan - $7.99/month</h6>
                                </div>
                                <div class="col-lg-12 checkout_annual">
                                    <input type="radio"><h6>Choose Annual Plan -<b style="color: #CDCDCD; text-decoration: line-through;">$79.99/year</b>  $39.99</h6>
                                </div>
                                <div class="col-lg-12 checkout_after">
                                    <h6> Billed $79.99 annually after first year</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 checkout_phancach">
                                    <h5>Frofile</h5>
                                    <hr class="hr mt-4">
                                </div>
                                <div class="col-lg-12 checkout_logo">
                                <a href="#"><img src="img/checkout_logo_1.png" alt="visa" width="150px"></a>
                                <a href="#"><img src="img/checkout_logo_2.png" alt="mastercard" width="150px"></a>
                                <a href="#"><img src="img/checkout_logo_3.png" alt="paypal" width="150px"></a>
                                <a href="#"><img src="img/checkout_logo_4.png" alt="momo" width="150px"> </a>
                                </div>
                                <div class="col-lg-12 checkout_logo_title">
                                    <h6>We use SSL encryption to protect personal information, including your
                                        credit card information.</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 checkout_nameoc">
                                    <h6>* NAME ON CARD</h6>
                                    <input type="text" name="checkout_nameoc" placeholder="Name as it appears on card">
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-5 checkout_cartn">
                                    <h6>* CARD NUMBER</h6>
                                    <input type="text" name="checkout_cartn" placeholder="Card Number">
                                </div>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5 checkout_expires">
                                    <h6>* EXPIRES</h6>
                                    <input type="date" name="checkout_cartn"  placeholder="Year">
                                </div>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5 checkout_ccvn">
                                    <h6>* CCV NUMBER</h6>
                                    <input type="text" name="ccvnumber" placeholder="cvv">
                                </div>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-8 checkout_checkbox">
                                    <input type="checkbox">
                                    <h7>Save this credit card for faster checkout next time.</h7>
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-5 checkout_button_save">
                                    <a href="#">save & continue</a>
                                </div>
                                <div class="col-lg-7"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 checkout_box_shoppingcart">
                        <div class="col-lg-12 checkout_shopppingcart_title">
                            <div class="col-lg-12">
                                <h6>Shopping cart</h6>
                            </div>
                        </div>
                            <div class="col-lg-12 checkout_shopppingcart_product">
                                <div class="row">
                                    <div class="col-lg-4 col-4" style="padding: 0;">
                                        <a href=""><img src="img/shoppingcart_1.jpg" width="100px"></a>
                                    </div>
                                    <div class="col-lg-8 col-8" >
                                        <a href="#"><h6>Lorem ipsum dolor sit amet eget dolor</h6></a>
                                        <h5>Quantity: 1</h5>
                                        <h4>Price: <b style="font-weight: 100; font-family:'font-medium';">$40.00</b></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 checkout_shopppingcart_product">
                                <div class="row">
                                    <div class="col-lg-4 col-4" style="padding: 0;">
                                        <a href=""><img src="img/shoppingcart_2.jpg" width="100px"></a>
                                    </div>
                                    <div class="col-lg-8 col-8" >
                                        <a href="#"><h6>Lorem ipsum dolor sit amet eget dolor</h6></a>
                                        <h5>Quantity: 1</h5>
                                        <h4>Price: <b style="font-weight: 100; font-family:'font-medium';">$40.00</b></h4>
                                        <h3>Original Price: <b style="font-weight: 900; text-decoration: line-through;color:#cdcdcd;">$50.00</b></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 checkout_shopppingcart_product">
                                <div class="row">
                                    <div class="col-lg-4 col-4" style="padding: 0;">
                                        <a href=""><img src="img/shoppingcart_3.jpg" width="100px"></a>
                                    </div>
                                    <div class="col-lg-8 col-8" >
                                        <a href="#"><h6>Lorem ipsum dolor sit amet eget dolor</h6></a>
                                        <h5>Quantity: 1</h5>
                                        <h4>Price: <b style="font-weight: 100; font-family:'font-medium';">$40.00</b></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 subtotal" style="padding:0;">
                                <h6>Subtotal: $79.98</h6>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 pt-4">
                                    <form class="form-inline form-coupon" style="margin:0 0 0 0;">
                                        <h5 class="mb-4" style="text-transform:uppercase; font-size: 17px">Have a coupon code?</h5>
                                        <input id="coupon" class="form-control col-lg-8 col-md-7 col-8" type="text" placeholder="ENTER CODE..." aria-label="Subscribe">
                                        <button id="btn-apply" class="btn btn-outline-success col-lg-4 col-md-5 col-4" type="submit">Apply</button>
                                    </form>
                                    <div class="order-list" style="margin:25px 0;">
                                        <ul class="col-lg-12">
                                            <h5 class="mb-3" style="font-size: 17px;" >Order Summary</h5>
                                            <li class="row list-item">
                                                <h5 class="col-lg-6 col-md-6 col-6" style="font-size: 17px;">subtotal:</h5>
                                                <span class="col-lg-6 col-md-6 col-6" style="font-size: 17px;">$79.98</span>
                                            </li>
                                            <li class="row list-item">
                                                <h5 class="col-lg-6 col-md-6 col-6" style="font-family: 'font-thin'; font-weight: bold; font-size: 17px;">tax:</h5>
                                                <span class="col-lg-6 col-md-6 col-6" style="font-family: 'font-thin'; font-weight: bold; font-size: 17px; ">$0.00</span>
                                            </li>
                                        </ul>
                                        <div class="col-lg-12 total">
                                            <div class="row">
                                                <h5 class="col-lg-6 col-md-6 col-6" style="font-size: 17px;">total:</h5>
                                                <span class="col-lg-6 col-md-6 col-6" style="font-size: 17px;">$0.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 checkout_box_shippinghelp">
                        <h4>Shipping Help</h4>
                        <h6>View estimated shipping times:<b style="font-weight: 100; font-family: 'font-medium';"> United States, International.</b></h6>
                        <h6>Classes and downloadable items will be available immediately in your libraries and will not be shipped.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
