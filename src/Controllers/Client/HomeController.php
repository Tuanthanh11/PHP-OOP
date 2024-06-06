<?php

namespace Thanh\XuongOop\Controllers\Client;


use Thanh\XuongOop\Commons\Controller;
use Thanh\XuongOop\Commons\Helper;
use Thanh\XuongOop\Models\Product;
use Thanh\XuongOop\Models\User;

class HomeController extends Controller
{

    private Product $product;

    public function __construct(){
        $this->product = new Product();
    }
    public function index()
    {
        
        $name = 'Thanh dz';
        $product =$this->product->all();


        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $product
        ]);
    }
}
