@extends('user.layout.layout')
@section('content')

    <section class="container-fluid signin_box">
        <div class="row">
            <div class="col-lg-3 col-1"></div>
            <div class="col-lg-6 col-10 signin_box_content">
                <h3>Sign In</h3>
                <div class="col-lg-12">
                    <div class="col-lg-12 signin_or">
                        <div class="row">
                            <div class="col-lg-5 col-5 signin_img_or"><img src="img/Vector Smart Object copy 2.png" style="width: 100%;"></div>
                            <div class="col-lg-2 col-2 signin_text_or">OR</div>
                            <div class="col-lg-5 col-5 signin_img_or"><img src="img/Vector Smart Object copy 2.png" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 box_button_signin">
                            <a href="#" class="signin_button_facebook"><img src="img/icon_facebook.png" alt="icon_facebook"style="float: left; width:8px;">Facebook</a>
                        </div>
                        <div class="col-lg-6 box_button_signin">
                            <a href="#" class="signin_button_Google"><img src="img/icon_google.png" alt="icon_google" style="float: left; width:15px;">Google</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input type="text" class="signin_email col-lg-12" placeholder="Email" >
                </div>
                <div class="col-lg-12">
                    <input type="password" id="password" class="signin_password col-lg-12" placeholder="Password" >
                    <img toggle="#password" src="img/eye.png" alt="eyse" class="signin_eye">
                </div>
                <script>
                                $(".signin_eye").click(function() {

                                    $(this).toggleClass("fa-eye fa-eye-slash");
                                    var input = $($(this).attr("toggle"));
                                    if (input.attr("type") == "password") {
                                    input.attr("type", "text");
                                    } else {
                                    input.attr("type", "password");
                                    }
                                });
                            </script>
                <div class="col-lg-12">
                    <a href="#" class="signin_signin">sign in</a>
                </div>
                <div class="col-lg-12 signin_forgot_password">
                    <a href="forgotpassword.php" >forgot password</a>
                </div>
                <div class="col-lg-12 signin_forgot_account">
                    <a href="createaccount.php" >create account</a>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <h6 class="signin_title">This site is protected by reCAPTCHA and the Google
                                <a href="#" class="signin_title_pp">Privacy Policy</a>  and  <a href="" class="signin_title_tov">Terms of Service</a> apply.</h6>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-1"></div>
        </div>
    </section>

@endsection
