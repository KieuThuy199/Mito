<?php

use Illuminate\Console\Scheduling\Schedule;

return array (
    'dashboard' => array (
        'dashboard-title' => 'Hệ Thống Quản Trị',
        'menu' => array (
            'home' => 'Về trang chủ',
            'news' => 'Tin tức',
            'contact' => 'Liên hệ',
            'sendnews' => 'Nhận tin mới nhất',
            'freetutorial' => 'Hướng dẫn miễn phí',
            'gallery'=> 'Bộ sưu tập',
            'schedule' => 'Lịch học',
            'web' => 'Giao diện',
            'class' => array(
                'title' => 'Khóa học',
                'online' => 'Khóa học trực tuyến',
                'hands' => 'Khóa học thực hành',
                'level' => 'Cấp độ',
                'tag' => 'Hashtag',
                'discount' => 'Phiếu giảm giá',
                'bill' => 'Đơn mua khóa học',
            ),
            'cake' => array(
                'title' => 'Bánh',
                'type' => 'Loại bánh',
                'size' => 'Kích thước bánh',
                'shape' => 'Hình dạng bánh',
                'flavor' => 'Hương vị bánh',
                'color' => 'Màu sắc bánh',
                'bill' => 'Đơn đặt bánh',
            ),
            'admin' => array(
                'title' => 'Tài khoản',
                'list' => 'Danh sách tài khoản',
                'type' => 'Loại tài khoản',
                'permissions' => 'Quyền hạn',
            ),
        ),
        'login' => 'Đăng nhập',
        'forgot' => 'Quên mật khẩu'
    ),
    'menuuser' => array(
        'onlineclass' => 'Khóa Học Trực Tuyến',
        'handsonclass' => 'Khóa Học Thực Hành',
        'cakeorder' => 'Đặt Bánh',
        'news'=>'Tin Tức',
        'schedules' => 'Lịch Học',
        'freetutorials'=>'Hướng Dẫn Miễn Phí',
        'contacts'=>'Liên Hệ',
    ),
    'admin' => array (
        'profile' => 'Thông tin cá nhân',
        'logout' => 'Đăng xuất',
        'avatar' => 'Ảnh đại diện',
        'changepass' => 'Đổi mật khẩu',
        'changeinfor' => 'Chỉnh sửa thông tin',
        'mail' => 'Email',
        'phone' => 'Số điện thoại',
        'birth' => 'Ngày sinh',
        'sex' => 'Giới tính',
    ),
    'changepass' => array (
        'oldpass' => 'Mật khẩu cũ',
        'newpass' => 'Mật khẩu mới',
        'confirm' => 'Nhập lại mật khẩu mới',
    ),
    'changeinfor' => array (
        'name' => 'Tên đầy đủ',
        'mail' => 'Email',
        'phone' => 'Số điện thoại',
        'birth' => 'Ngày sinh',
        'sex' => 'Giới tính',
        'confirm' => 'Xác nhận',
    ),
    'button' => array(
        'add' => 'Thêm',
        'delete' => 'Xóa',
        'edit' => 'Sửa',
    ),
    'back' => 'Trở về',
    'news' => array(
        'img' => 'Hình ảnh',
        'name' => 'Tên',
        'summary' => 'Tóm tắt',
        'content' => 'Nội dung',
    ),
    'web' => array(
        'online' => 'Banner Khóa học trực tuyến',
        'hands' => 'Banner Khóa học tại lớp',
        'order' => 'Banner Đặt bánh',
        'title' => 'Banner Tiêu đề',
        'decrip' => 'Banner Mô tả',

    ),
);
