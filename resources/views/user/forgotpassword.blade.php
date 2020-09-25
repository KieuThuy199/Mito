@extends('user.layout.layout')
@section('content')

    <section class="container-fluid signin_box">
        <div class="row">
            <div class="col-lg-3 col-1"></div>
            <div class="col-lg-6 col-10 signin_box_content">
                <h3>Forgot Password</h3>
                <div class="col-lg-12" style="text-align: center; margin-top:15px;">
                    <h6 style="font-size: 15px; color: black">Please enter the email address associated with your Bluprint account.</h6>
                </div>
                <div class="col-lg-12">
                    <input type="text" class="signin_email col-lg-12" placeholder="Enter Your Email....." >
                </div>
                <div class="col-lg-12">
                    <a href="#" class="signin_signin" style="font-size: 20px">Forgot Your Password</a>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <h6 class="signin_title">
                                <a href="signin.php" class="signin_title_pp">‹ Back to Sign In</a></h6>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-1"></div>
        </div>
    </section>

@endsection
