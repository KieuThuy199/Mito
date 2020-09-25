@extends('user.layout.layout')
@section('content')

    <section class="container addtocart_box">
        <div class="row">
            <div class="col-lg-12 col-12 addtocart_box_content">
                <h3>added to your cart</h3>
                <div class="col-lg-12 box_member">
                    <h5>Get 15% off day PLUST an extra 15% off all orders when you become a member!</h5>
                </div>
                <div class=" col-lg-12 addtocart_box_checkout">
                    <div class="row margintop_addtocart">
                        <div class="col-lg-2">
                        <img src="img/img_Slider_section_6.jpg" width="100%" >
                        </div>
                        <div class="col-lg-4 addtocart_name">
                            <a href="#" ><h6>Lorem ipsum dolor sit amet consectetur </h6></a>
                            <h5>quantity: <b> 1 </b> </h5>
                            <h5>price: <b> $40.00</b></h5>

                        </div>
                        <div class="col-lg-3">
                            <a href="index.php" class="addtocart_continue">continue shopping</a>
                        </div>
                        <div class="col-lg-3">
                            <a href="checkout.php" class="proceed_continue">proceed to checkout</a>
                            <div class="addtocart_content_checkout">
                                <h5>total number of class : <b>1 </b> </h5>
                                <h5>order subtotal <b> $80.00</b></h5>
                                <a href="#">edit cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                <div class="row addtocart_coupons">
                    <h6>Marketplace patterns don't apply toward free shipping offer or <b style="font-family:'font-medium'; font-weight: 300;"> MITO SWEETS </b> couponts</h6>
                    </div>
                </div>
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3 title-related">Related Classed</div>
            <div class="col-lg-9 strong"></div>
        </div>
        </div>
    </section>

    <section class="related">
        <div class="container">
            <div id="mixedSlider">
                <div class="MS-content">
                    <div class="item">
                        <div class="imgTitle">
                        <div class="card">
                            <img src="img/img_Slider_little_section_7_1.jpg" class="card-img-top" >
                            <h6 class="content_slider">Skill : BEGINER</h6>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                        <div class="card">
                            <img src="img/img_Slider_little_section_7_2.jpg" class="card-img-top">
                            <h6 class="content_slider">Skill : BEGINER</h6>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                    <div class="imgTitle">
                        <div class="card">
                        <img src="img/img_Slider_little_section_7_3.jpg" class="card-img-top" >
                        <h6 class="content_slider">Skill : BEGINER</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                    <div class="card">
                        <img src="img/img_Slider_little_section_7_4.jpg" class="card-img-top" >
                        <h6 class="content_slider">Skill : BEGINER</h6>
                    </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgTitle">
                    <div class="card">
                        <img src="img/img_Slider_little_section_7_4.jpg" class="card-img-top" >
                        <h6 class="content_slider">Skill : BEGINER</h6>
                    </div>
                    </div>
                </div>
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><img src="img/arrow_left.png" style="width: 50%;"></button>
                    <button class="MS-right"><img src="img/arrow_right.png" style="width: 50%;"></button>
                </div>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/multislider.js"></script>
    <script>
        $('#basicSlider').multislider({
                continuous: true,
                duration: 2000
            });
            $('#mixedSlider').multislider({
                duration: 500,
                interval: 3000
            });
    </script>

@endsection
