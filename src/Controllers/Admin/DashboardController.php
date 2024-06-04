<?php

namespace Thanh\XuongOop\Controllers\Admin;


use Thanh\XuongOop\Commons\Controller;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
