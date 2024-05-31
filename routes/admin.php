<?php

// CRUD bao gom: Danh sach , them , sua , xem , xoa
// User:
//      GET       ->USER/INDEX        -> INDEX      ->Danh sach
//      GET       ->USER/CREATE       -> CREATE     ->Hien thi form them moi
//      POST      ->USER/STORE        -> STORE      ->Luu du lieu tu form them moi vao DB
//      GET       ->USER/ID           -> SHOW($id)       ->Xem chi tiet
//      PUT       ->USER/ID/EDIT      -> EDIT($id)      ->Hien thi form cap nhat
//      PUT       ->USER/ID/          -> UPDATE($id)     ->Luu du form cap nhat vao DB
//      DELETE    ->USER/ID           -> DELETE($id)     ->Xoa ban ghi trong DB

use Thanh\XuongOop\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    // CRUD USER
    $router->mount('/users', function () use ($router) {

        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}', UserController::class . '@update');
        $router->post('/{id}/delete',   UserController::class . '@delete');
    });
});
