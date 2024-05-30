<?php

namespace Thanh\XuongOop\Controllers\Admin;

use Thanh\XuongOop\Commons\Controller;

class UserController extends Controller
{
    public function index(){
        echo __CLASS__ .'@'. __FUNCTION__;
    }
    public function create(){
        echo __CLASS__ .'@'. __FUNCTION__;
    }
    public function show($id){
        echo __CLASS__ .'@'. __FUNCTION__ . '- ID = ' . $id;
    }
    public function edit($id){
        echo __CLASS__ .'@'. __FUNCTION__ . '- ID = ' . $id;
    }
    public function update($id){
        echo __CLASS__ .'@'. __FUNCTION__ . '- ID = ' . $id;
    }
    public function delete($id){
        echo __CLASS__ .'@'. __FUNCTION__ . '- ID = ' . $id;
    }
}
