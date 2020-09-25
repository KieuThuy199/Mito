@extends('user.layout.layout')
@section('content')

    <section class="container-fluid ca_box">
        <div class="row">
            <div class="col-lg-3 col-1"></div>
            <div class="col-lg-6 col-10 ca_box_content">
                <h3>watch free now</h3>
                <div class=" col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 box_button_ca">
                            <a href="#" class="ca_button_facebook"><img src="img/icon_facebook.png" alt="icon_facebook"style="float: left; width:8px;">Facebook</a>
                        </div>
                        <div class="col-lg-6 box_button_ca">
                            <a href="#" class="ca_button_Google"><img src="img/icon_google.png" alt="icon_google" style="float: left; width:15px;">Google</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12 ca_or">
                        <div class="row">
                            <div class="col-lg-5 col-5 ca_img_or"><img src="img/Vector Smart Object copy 2.png" style="width: 100%;"></div>
                            <div class="col-lg-2 col-2 ca_text_or">OR</div>
                            <div class="col-lg-5 col-5 ca_img_or"><img src="img/Vector Smart Object copy 2.png" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input type="text" class="ca_email col-lg-12" placeholder="Email" >
                </div>
                <div class="col-lg-12">
                    <input type="password" class="ca_password col-lg-12" placeholder="Password (minimum 6 characters)" >
                    <img src="img/eye.png" alt="eyse" class="ca_eye">
                </div>
                <div class="col-lg-12 ca_box_checkbox">
                    <input type="checkbox"><h6>Send me info on new classes, sales, and techniquesly.</h6>
                </div>
                <div class="col-lg-12">
                    <a href="#" class="ca_sw">start watching</a>
                </div>
                <div class="col-lg-12 ca_signin">
                    <a href="signin.php" >sign in</a>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <h6 class="ca_title">This site is protected by reCAPTCHA and the Google
                                <a href="#" class="ca_title_pp">Privacy Policy</a>  and  <a href="" class="ca_title_tov">Terms of Service</a> apply. Your Free Preview includes a changing selection of classes. Does
                                not include patterns, recipes and downloadable materials.</h6>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <h6 class="ca_title">This site is protected by reCAPTCHA and the Google
                                <a href="#" class="ca_title_pp">Privacy Policy</a>  and  <a href="" class="ca_title_tov">Terms of Service</a> apply.</h6>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-1"></div>
        </div>
    </section>

@endsection
