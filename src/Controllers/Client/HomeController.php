<?php

namespace Thanh\XuongOop\Controllers\Client;


use Thanh\XuongOop\Commons\Controller;
use Thanh\XuongOop\Commons\Helper;
use Thanh\XuongOop\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // $user = new  User();
        // Helper::debug($user);

        $name = 'Thanh dz';
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
