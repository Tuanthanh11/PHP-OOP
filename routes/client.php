<?php

use Thanh\XuongOop\Controllers\Client\AboutController;
use Thanh\XuongOop\Controllers\Client\ContactController;
use Thanh\XuongOop\Controllers\Client\HomeController;
use Thanh\XuongOop\Controllers\Client\LoginController;
use Thanh\XuongOop\Controllers\Client\ProductController;

$router->get('/client', function () {
    echo "Trang chu";
});

// Website co cac trang la:

// trang chu
// gioi thieu
// san pham
// chi tiet san pham
// lien he

// De dinh nghia dc , dau tien phai tao controller trc
// tiep theo , khai bao function tuong uong de su ly
// buoc cuoi , dinh nghia duong dan

// HTTP Method: get, post, put(path), delete, option, head

$router->get('/',               HomeController::class . '@index');
$router->get('/about',          AboutController::class . '@index');

$router->get('/contract',       ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

$router->get('/products',       ProductController::class . '@index');
$router->get('/products{id}',   ProductController::class . '@detail');

$router->get('/login',       LoginController::class . '@showFormlogin');
$router->post('/handle-login',   LoginController::class . '@login');
$router->get('/logout',   LoginController::class . '@logout');
