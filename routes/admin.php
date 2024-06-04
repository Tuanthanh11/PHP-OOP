<?php

// CRUD bao gom: Danh sach , them , sua , xem , xoa
// User:
//      GET       ->USER/INDEX        -> INDEX          ->Danh sach
//      GET       ->USER/CREATE       -> CREATE         ->Hien thi form them moi
//      POST      ->USER/STORE        -> STORE          ->Luu du lieu tu form them moi vao DB
//      GET       ->USER/ID/show           -> SHOW($id)      ->Xem chi tiet
//      GET       ->USER/ID/EDIT      -> EDIT($id)      ->Hien thi form cap nhat
//      POST       ->USER/ID/update          -> UPDATE($id)    ->Luu du form cap nhat vao DB
//      GET    ->USER/ID/delete           -> DELETE($id)    ->Xoa ban ghi trong DB

use Thanh\XuongOop\Controllers\Admin\DashboardController;
use Thanh\XuongOop\Controllers\Admin\UserController;


// Authentication phải đăng nhặp mới vào dc admin
// Trc khi kiểm tra GET/POST set user có tồn tại hay ko nếu ko trả về trang login
$router->before('GET|POST', '/admin/*.*', function() {
    if (! isset($_SESSION['user'])) {
        header('location: ' . url('login') );
        exit();
    }
});

$router->mount('/admin', function () use ($router) {

    $router->get('/',                   DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {

        $router->get('/',                   UserController::class . '@index');
        $router->get('/create',             UserController::class . '@create');
        $router->post('/store',             UserController::class . '@store');
        $router->get('/{id}/show',          UserController::class . '@show');
        $router->get('/{id}/edit',          UserController::class . '@edit');
        $router->post('/{id}/update',       UserController::class . '@update');
        $router->get('/{id}/delete',        UserController::class . '@delete');
    });
});
