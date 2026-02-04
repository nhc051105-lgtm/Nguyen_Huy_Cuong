<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//bai2
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

Route::get('/about', function () {
    return "
        <h2>Thông tin cá nhân</h2>
        <p>Họ tên: Nguyễn Huy Cường</p>
        <p>Lớp: D18CNPM2</p>
        <p>MSSV: 23810310084</p>
    ";
});

Route::get('/contact', function () {
    return view('contact');
});

//bai3
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});

Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>Tuổi: $age</p>
    ";
});

//bai4
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });

});

Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day' => '^(0?[1-9]|[12][0-9]|3[01])$',
    'month' => '^(0?[1-9]|1[0-2])$',
    'year' => '^[0-9]{4}$'
]);
