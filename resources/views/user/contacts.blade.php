@extends('user.layout.layout')
@section('content')

    <section class="container">
        <h3 class="col-lg-12" style="text-align: center; margin-top: 50px">Liên hệ với chúng tôi</h3>
        <div class="row" style="margin:50px 0">
            <div class="col-lg-4 contact_box_icon contact_box_border_1" >
                <img src="img/phone_icon.png" alt="phone">
                <h4 style="color:#be5000; margin:15px 0;">ĐIỆN THOẠI</h4>
                <h4>0903 124 56 78</h4>
                <h4>0903 124 98 76</h4>
            </div>
            <div class="col-lg-4 contact_box_icon">
                <img src="img/localtion_icon.png" alt="localtion">
                <h4 style="color:#be5000; margin:15px 0;">ĐỊA CHỈ</h4>
                <h4>319 Lý Thường Kiệt, P.15, quận</h4>
                <h4>11, TP.HCM</h4>
            </div>
            <div class="col-lg-4 contact_box_icon contact_box_border_2" >
                <img style="width:15%; margin: 18px 0; margin:15px 0 22px 0;" src="img/email_icon.png" alt="email">
                <h4 style="color:#be5000">EMAIL</h4>
                <h4>mitosweet@gmail.com</h4>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="col-lg-12" style="margin:70px 0 30px 0 ">
            <div class="row">
                <div class="col-lg-3"></div>
                <h4 class="col-lg-6" style="text-align: center;">Nếu các bạn có thắc mắc xin vui lòng gửi tin nhắn cho chúng tôi!</h4>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-2"></div>
            <form class="col-lg-8" style="text-align: center;">
                <div class="contact_from">
                    <input type="text" name="" placeholder="Tên của bạn...">
                    <input type="text" name="" placeholder="Email của bạn...">
                    <input type="text" name="" placeholder="Tiêu đề...">
                    <textarea rows="5" cols="50" name="description" placeholder="Tin nhắn..."></textarea>
                </div>
                <input type="submit" class="contact_submit" value="Gửi Tin Nhắn">
            </form>

            <div class="col-lg-2"></div>
        </div>
    </section>

@endsection
